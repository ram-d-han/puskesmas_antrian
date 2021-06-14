<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TbRekamMedis */

$this->title = $model->id_rekam_medis;
$this->params['breadcrumbs'][] = ['label' => 'Tb Rekam Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-rekam-medis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_rekam_medis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_rekam_medis], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_rekam_medis',
            'tgl_periksa',
            'no_rm',
            'anamnesa',
            'blk',
            'diagnosa',
            'terapi',
            'askep',
            'kie',
        ],
    ]) ?>

</div>
