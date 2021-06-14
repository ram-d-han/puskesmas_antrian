<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbInfoKategori */

$this->title = 'Create Tb Info Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Tb Info Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-info-kategori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
