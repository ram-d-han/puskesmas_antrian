<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbDaftarKategori */

$this->title = 'Update Tb Daftar Kategori: ' . $model->id_daftar_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Tb Daftar Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_daftar_kategori, 'url' => ['view', 'id' => $model->id_daftar_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-daftar-kategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
