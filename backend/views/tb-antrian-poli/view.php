<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TbAntrianPoli */

$this->title = $model->id_antrian_poli;
$this->params['breadcrumbs'][] = ['label' => 'Tb Antrian Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-antrian-poli-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_antrian_poli], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_antrian_poli], [
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
            'id_antrian_poli',
            'urutan',
            'tgl_antrian',
            'perkiraan_waktu',
            'no_rm',
            'poli_tujuan',
            'status_antrian',
        ],
    ]) ?>

</div>
