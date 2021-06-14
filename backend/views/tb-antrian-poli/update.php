<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbAntrianPoli */

$this->title = 'Update Tb Antrian Poli: ' . $model->id_antrian_poli;
$this->params['breadcrumbs'][] = ['label' => 'Tb Antrian Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_antrian_poli, 'url' => ['view', 'id' => $model->id_antrian_poli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-antrian-poli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
