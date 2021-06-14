<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Admin */

$this->title = 'Update Admin: ' . $model->id_admin;
?>
<div class="admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formUp', [
        'model' => $model,
    ]) ?>

</div>
