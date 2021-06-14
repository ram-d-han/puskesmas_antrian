<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbInfoKategori */

$this->title = 'Update Tb Info Kategori: ' . $model->id_info_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Tb Info Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_info_kategori, 'url' => ['view', 'id' => $model->id_info_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-info-kategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
