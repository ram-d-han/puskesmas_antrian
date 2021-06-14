<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TbPasien */

$this->title = $model->no_rm;
$this->params['breadcrumbs'][] = ['label' => 'Tb Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-pasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->no_rm], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->no_rm], [
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
            'no_rm',
            'nama_pasien',
            'nama_kk',
            'hub_keluarga',
            'jenis_pasien',
            'no_bpjs',
            'tgl_lahir',
            'umur',
            'jenis_kelamin',
            'alamat',
            'no_index',
            'pendidikan',
            'pekerjaan',
            'agama',
            'status_pernikahan',
            'telepon',
            'tgl_masuk',
            'tgl_akhir',
            'token',
        ],
    ]) ?>

</div>
