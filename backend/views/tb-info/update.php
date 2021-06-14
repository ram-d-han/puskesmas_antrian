<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbInfo */

$this->title = 'Update Tb Info: ' . $model->id_info;
$this->params['breadcrumbs'][] = ['label' => 'Tb Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_info, 'url' => ['view', 'id' => $model->id_info]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
