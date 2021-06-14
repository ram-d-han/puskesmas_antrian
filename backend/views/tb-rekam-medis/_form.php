<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TbRekamMedis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-rekam-medis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_periksa')->textInput() ?>

    <?= $form->field($model, 'no_rm')->textInput() ?>

    <?= $form->field($model, 'anamnesa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'blk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'terapi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'askep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kie')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
