<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TbDaftarKategori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-daftar-kategori-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kategori')->textInput() ?>

    <?= $form->field($model, 'detail_kategori')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
