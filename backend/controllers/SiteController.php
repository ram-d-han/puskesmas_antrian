<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Admin;
use backend\models\TbPasien;
use backend\models\TbPoli;
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
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $antrianLoket = TbAntrianLoket::find()->where(['tgl_antrian' => date('Y-m-d')]);
        $antrianPoli = TbAntrianPoli::find()->where(['tgl_antrian' => date('Y-m-d')]);
        $antrian = TbAntrianNow::find()->where(['tgl_antrian' => date('Y-m-d')])->one();
        $AdminCount = Admin::find()->count();
        $PasienCount = TbPasien::find()->count();
        $PoliCount = TbPoli::find()->count();

        if ($antrian == null) {
            $model = new TbAntrianNow;
            $model->tgl_antrian = date('Y-m-d');
            $model->loket_pendaftaran = $antrianLoket->count();
            $model->save();
        }
        
        return $this->render('index', [
            'AdminCount' => $AdminCount,
            'PasienCount' => $PasienCount,
            'PoliCount' => $PoliCount,
            'antrianLoket' => $antrianLoket->count(),
            'antrianPoli' => $antrianPoli->count(),
            'antrian' => $antrian]);

    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {

            if (Yii::$app->user->identity->hak_akses == 'admin' || 'super admin') {
                $id = Yii::$app->user->identity->id;
                Yii::$app->db->createCommand()->update('admin', [
                                'last_login' => date('Y-m-d H:i')],
                                'id_admin = '.$id)->execute();

                return $this->goBack();
            } else {
                $model->password = '';

                return $this->render('login', [
                    'model' => $model,
                ]);
            }

        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
