<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Poli';
?>
<div class="tb-poli-index">

    <p>
        <?= Html::a('Create Poli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_poli',
            'nama_poli',
            'url_poli:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
