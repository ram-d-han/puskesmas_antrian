<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbRekamMedis */

$this->title = 'Create Tb Rekam Medis';
$this->params['breadcrumbs'][] = ['label' => 'Tb Rekam Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-rekam-medis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
