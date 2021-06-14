<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TbInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kategori')->textInput() ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gambar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
