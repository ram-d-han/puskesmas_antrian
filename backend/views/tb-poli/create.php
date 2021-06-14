<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbPoli */

$this->title = 'Create Tb Poli';
$this->params['breadcrumbs'][] = ['label' => 'Tb Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-poli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
