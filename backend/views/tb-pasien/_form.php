<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TbPasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-pasien-form">
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hub_keluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_bpjs')->textInput() ?>

    <?= $form->field($model, 'tgl_lahir')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'umur')->textInput() ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([
                    'laki-laki' => 'Laki-laki',
                    'perempuan' => 'Perempuan'],
                    ['prompt'=>'Select...'], (['maxlength' => true])) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_index')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pendidikan')->dropDownList([
                    'Sekolah Dasar' => 'SD',
                    'Sekolah Menengah Pertama' => 'SMP',
                    'Sekolah Menengah Akhir/Kejuruan' => 'SMA/SMK'],
                    ['prompt'=>'Select...'], (['maxlength' => true])) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama')->dropDownList([
                    'islam' => 'Islam',
                    'kristen' => 'Kristen',
                    'hindu' => 'Hindu',
                    'budha' => 'Budha',
                    'konghucu' => 'Konghucu'],
                    ['prompt'=>'Select...'], (['maxlength' => true])) ?>

    <?= $form->field($model, 'status_pernikahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telepon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_masuk')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'tgl_akhir')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'token')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
