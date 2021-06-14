<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbRekamMedis */

$this->title = 'Update Tb Rekam Medis: ' . $model->id_rekam_medis;
$this->params['breadcrumbs'][] = ['label' => 'Tb Rekam Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rekam_medis, 'url' => ['view', 'id' => $model->id_rekam_medis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-rekam-medis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
