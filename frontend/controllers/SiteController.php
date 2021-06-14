<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginPasien;
use backend\models\TbPasien;
use backend\models\TbAntrianLoket;
use backend\models\TbAntrianPoli;
use backend\models\TbAntrianNow;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAntrian()
    {
        $antrian = TbAntrianNow::find()->where(['tgl_antrian' => date('Y-m-d')])->one();

        if ($antrian == null) {

            $model = new TbAntrianNow;

            $model->tgl_antrian = date('Y-m-d');
            $model->loket_pendaftaran = TbAntrianLoket::find()->where(['tgl_antrian' => date('Y-m-d')])->count();
            $model->save();

            return $this->render('antrian',['antrian' => $antrian]);

        } else {
        
            return $this->render('antrian',['antrian' => $antrian,]);

        }
        
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginPasien();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $post = Yii::$app->request->post('LoginPasien');
            $nama_pasien = TbPasien::find()->where(['nama_pasien' => $post['nama_pasien']])->one();
            $now = TbAntrianNow::find()->where(['tgl_antrian' => date('Y-m-d')]);
            $loket = TbAntrianLoket::find()->where(['tgl_antrian' => date('Y-m-d')]);
            $poli = TbAntrianPoli::find()->where([
                                        'poli_tujuan' => $post['poli_tujuan'],
                                        'tgl_antrian' => date('Y-m-d')
                                    ]);

            $poli_tjn = str_replace(' ', '_', $post['poli_tujuan']);


                if ($nama_pasien != null && 
                    $post['nama_pasien']  == $nama_pasien->nama_pasien && 
                    $post['no_rm'] == $nama_pasien->no_rm) {

                        $model = new TbAntrianLoket;
                        $model2 = new TbAntrianPoli;
                        $model3 = new TbAntrianNow;

                        if (TbAntrianLoket::find()->all() != null || TbAntrianLoket::find()->all() == null) {
                            $model->urutan = TbAntrianLoket::find()->count()+1;
                            $model->tgl_antrian = date('Y-m-d');
                            $model->no_rm = $nama_pasien->no_rm;
                            $model->poli_tujuan = $post['poli_tujuan'];
                            $model->perkiraan_waktu = '00:30:00';
                            $model->status_antrian = "Menunggu";
                            $model->save();
                        }

                        if ($poli->one() != null || $poli->one() == null) {
                            $model2->urutan = $poli->count()+1;
                            $model2->tgl_antrian = date('Y-m-d');
                            $model2->perkiraan_waktu = '00:30:00';
                            $model2->no_rm = $nama_pasien->no_rm;
                            $model2->poli_tujuan = $post['poli_tujuan'];
                            $model2->status_antrian = "Menunggu";
                            $model2->save();
                        }

                        if ($now->one() == null) {
                            $model3->tgl_antrian = date('Y-m-d');
                            $model3->loket_pendaftaran = $loket->count();
                            $model3->$poli_tjn = $poli->count();
                            $model3->save();

                        } else {

                            $tgl = date('Y-m-d');
                            Yii::$app->db->createCommand()->update('tb_antrian_now',[
                                $poli_tjn => $poli->count(),
                                'loket_pendaftaran' => $loket->count()],
                                ['tgl_antrian' => $tgl])->execute();

                        }
                        return $this->goBack();

                    }  else {

                        $model->no_rm = '';

                        return $this->render('login', [
                            'model' => $model,
                        ]);
                    }

            } else {
                $model->no_rm = '';

                return $this->render('login', [
                    'model' => $model,
                ]);
            }
    }
}