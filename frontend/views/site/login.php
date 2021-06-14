<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\TbPoli;

$poli = TbPoli::find()->all();
$listData = ArrayHelper::map($poli,'nama_poli','nama_poli');

$this->title = 'Login';
?>
<style type="text/css">
    .card {
        margin-top: -12% !important;
        max-height: 500px;
        max-width: 80%;
        margin-bottom: -2%;
    }
    #login-form {
        margin-top: 10%;
        margin-bottom: 15%;
    }
    .form-control {
        width: 130%;
        margin-left: -15%;
    }
</style>

<div class="site-login text-center">
    <h2>Masukkan data untuk ambil nomor antrian</h2>

    <div class="row">
        <div class="col-lg-5" style="margin-left: 30% !important">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'nama_pasien')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'no_rm')->passwordInput() ?>

                <?= $form->field($model, 'poli_tujuan')->dropDownList($listData,
                    ['prompt'=>'Select...']
                        ); ?>
                <div class="form-group">
                    <?= Html::submitButton('Ambil Nomor', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
