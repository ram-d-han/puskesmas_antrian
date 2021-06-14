<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Admin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-form">

    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->label('password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_admin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hak_akses')->dropDownList([
                    'super admin' => 'Super Admin',
                    'admin' => 'Admin'],
                    ['prompt'=>'Select...'], (['maxlength' => true])) ?>

    <div class="form-group">
        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
