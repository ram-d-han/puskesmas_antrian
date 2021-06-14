<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbAntrianLoket */

$this->title = 'Update Tb Antrian Loket: ' . $model->id_antrian_loket;
$this->params['breadcrumbs'][] = ['label' => 'Tb Antrian Lokets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_antrian_loket, 'url' => ['view', 'id' => $model->id_antrian_loket]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-antrian-loket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
