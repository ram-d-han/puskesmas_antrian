<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rm',
            'nama_pasien',
            'nama_kk',
            'hub_keluarga',
            'jenis_pasien',
            //'no_bpjs',
            //'tgl_lahir',
            //'umur',
            //'jenis_kelamin',
            //'alamat',
            //'no_index',
            //'pendidikan',
            //'pekerjaan',
            //'agama',
            //'status_pernikahan',
            //'telepon',
            //'tgl_masuk',
            //'tgl_akhir',
            //'token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
