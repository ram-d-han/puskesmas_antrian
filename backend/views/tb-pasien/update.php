<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbPasien */

$this->title = 'Update Tb Pasien: ' . $model->no_rm;
$this->params['breadcrumbs'][] = ['label' => 'Tb Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rm, 'url' => ['view', 'id' => $model->no_rm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
