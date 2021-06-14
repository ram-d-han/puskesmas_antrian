<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbDaftarKategori */

$this->title = 'Create Tb Daftar Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Tb Daftar Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-daftar-kategori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
