<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Kategori';
?>
<div class="tb-daftar-kategori-index">

    <p>
        <?= Html::a('Create Kategori', ['tb-kategori/create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_daftar_kategori',
            'id_kategori',
            'detail_kategori',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
