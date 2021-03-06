<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\widgets\Breadcrumbs;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

use loutrux\argon\widgets\Nav;
use loutrux\argon\widgets\NavBar;
use loutrux\argon\widgets\Alert;

\loutrux\argon\ArgonAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> -->
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style type="text/css">
      .text-white {
        display: none;
    }
    </style>
</head>
<body class="bg-default">
<?php $this->beginBody() ?>
<?= Html::tag('span','',['id' => 'global_prefixUrl', 'data-content' => \Yii::$app->request->BaseUrl]); ?>
<div class="main-content">
    <!-- Navbar -->
<?php
  // if (!Yii::$app->user->isGuest) {
  //   $menuItems = [
  //     ['label' => 'Home', 'url' => ['/site/index']],
  //     ['label' => 'Sign Out', 'url' => ['/site/logout'], 'linkOptions' => ['data' => ['method' => 'post']]],

  //   ];
  // }

  if (Yii::$app->user->isGuest) {
      // Menu for guest
     $menuItems[] =  ['label' => 'Home', 'url' => ['/site/index']];
      $menuItems[] = ['label' => 'Daftar', 'url' => ['/tb-pasien/create']];
      $menuItems[] = ['label' => 'Ambil Nomor', 'url' => ['/site/login']];
  } else {
      // Menu for logged user
      // ...
  
    }

    // Dynamic menu item added in view with the 'additionalsMenuItems' block
    if (($additionalsMenuItems = ArrayHelper::getValue($this->blocks,['additionalsMenuItems'])) !== null)
      $menuItems[] = $additionalsMenuItems;
      
    NavBar::begin([
        'brandLabel'          => ArrayHelper::getValue($this->blocks,['brandLabel'],Yii::$app->name),
        'brandUrl'            => ArrayHelper::getValue($this->blocks,['brandUrl'],Yii::$app->homeUrl),
        'brandScrollContent'  => ArrayHelper::getValue($this->blocks,['navbarScrollContent'],false),
        'brandAfter'          => ArrayHelper::getValue($this->blocks,['brandAfter'],false),
        // uncollapsed menu showed in mobile view
        'headerContent' => Nav::widget([
          'options' => ['class' => 'd-md-none_ align-items-center'],
          'encodeLabels' => false,
          'items' => ($additionalsMenuItems)?[$additionalsMenuItems]:[],
        ]),
        'options' => [
            'class' => 'navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark navbar-fixed-top',
        ],
        'innerContainerOptions' => ['class' => 'container px-4']

    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'encodeLabels' => false,
        'items' => $menuItems,
    ]);
    NavBar::end();
?>
    <!-- Header -->
    <div class="header py-7 py-lg-8">
      <div class="container">
        <div class="header-body">
          <?= Alert::widget() ?>
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5 text-center">
              <?= ArrayHelper::getValue($this->blocks,['header']) ?? 
                    Html::tag('h1',$this->title,['class' => 'text-white']).
                    Html::tag('p',$this->title,['class' => 'text-lead text-white' ]) ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card main-container mt--6 p-4">
      <?= $content ?>
    </div>

  <footer class="py-5">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            ?? <?= date('Y') ?> <a href="<?= Yii::$app->homeUrl ?>" class="font-weight-bold ml-1" target="_blank"><?= Yii::$app->name ?></a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <?= Yii::powered() ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
