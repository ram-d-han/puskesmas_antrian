<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbAntrianPoli */

$this->title = 'Create Tb Antrian Poli';
$this->params['breadcrumbs'][] = ['label' => 'Tb Antrian Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-antrian-poli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
