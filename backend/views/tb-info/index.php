<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Info';
?>
<div class="tb-info-index">

    <p>
        <?= Html::a('Create Info', ['tb-info-kategori/create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_info',
            'id_kategori',
            'judul',
            'detail1',
            'detail2',
            'gambar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
