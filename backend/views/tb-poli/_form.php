<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TbPoli */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-poli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_poli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_poli')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
