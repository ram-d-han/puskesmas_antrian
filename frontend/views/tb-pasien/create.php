<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TbPasien */

$this->title = 'Daftar Pasien Baru';
?>
<div class="tb-pasien-create">

    <h1>Silahkan isi kolom dengan data yang sesuai</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
