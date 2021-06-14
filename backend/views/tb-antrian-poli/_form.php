<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TbAntrianPoli */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-antrian-poli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'urutan')->textInput() ?>

    <?= $form->field($model, 'tgl_antrian')->textInput() ?>

    <?= $form->field($model, 'perkiraan_waktu')->textInput() ?>

    <?= $form->field($model, 'no_rm')->textInput() ?>

    <?= $form->field($model, 'poli_tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_antrian')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
