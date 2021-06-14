<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbPasien */

$this->title = 'Create Tb Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Tb Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
