<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin';
?>

<div class="admin-index">

    <p>
        <?= Html::a('Create Admin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_admin',
            'username',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            'email:email',
            'nama_admin',
            'hak_akses',
            'last_login',
            'status',
            //'verification_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
