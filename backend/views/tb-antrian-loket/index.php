<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Antrian Lokets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-antrian-loket-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Antrian Loket', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_antrian_loket',
            'urutan',
            'tgl_antrian',
            'no_rm',
            'poli_tujuan',
            //'perkiraan_waktu',
            //'status_antrian',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
