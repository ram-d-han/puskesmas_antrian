<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbPoli */

$this->title = 'Update Tb Poli: ' . $model->id_poli;
$this->params['breadcrumbs'][] = ['label' => 'Tb Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_poli, 'url' => ['view', 'id' => $model->id_poli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-poli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
