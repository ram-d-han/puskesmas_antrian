<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekam Medis';
?>
<div class="tb-rekam-medis-index">

    <p>
        <?= Html::a('Buat Rekam Medis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_rekam_medis',
            'tgl_periksa',
            'no_rm',
            'anamnesa',
            // 'blk',
            'diagnosa',
            //'terapi',
            //'askep',
            //'kie',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
