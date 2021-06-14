<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbAntrianLoket */

$this->title = 'Create Tb Antrian Loket';
$this->params['breadcrumbs'][] = ['label' => 'Tb Antrian Lokets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-antrian-loket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
