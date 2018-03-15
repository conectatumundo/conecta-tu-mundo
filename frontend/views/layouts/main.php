<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
        <div class="topbar" id="top">
            <div class="header6">
                <div class="container po-relative">
                    <nav class="navbar navbar-expand-lg h6-nav-bar  h2-nav">
                        <a href="index.html" class="navbar-brand"><img src="https://www.procitec.de/files/cto_layout/img/delete_this/demo_default/logo8.png" alt="wrapkit" /></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#h6-info" aria-controls="h6-info" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                        <div class="collapse navbar-collapse hover-dropdown font-14 ml-auto" id="h6-info">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> 
                                    <a class="nav-link" href="#section">
                                        Sections
                                    </a>
                                </li>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="elements.html#element">
                                        Elements
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="container-fluid">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <div class="footer4 b-t spacer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 m-b-30">
                    <h5 class="m-b-20">Dirreccion.</h5>
                    <p>Calle 76 76s 18 Cali-Colombia</p>
                </div>
                <div class="col-lg-3 col-md-6 m-b-30">
                    <h5 class="m-b-20">Celular</h5>
                    <p>Celular :  318 623 3871 <br/>Oficina :  +57 2488 60 63</p>
                </div>
                <div class="col-lg-3 col-md-6 m-b-30">
                    <h5 class="m-b-20">Email</h5>
                    <p>Office :  <a href="#" class="link">hola@conectatumundo.com</a> <br/>Site :  <a href="#" class="link">www.conectatumundo.com</a></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="m-b-20">Social</h5>
                    <div class="round-social light">
                        <a href="#" class="link"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="link"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="link"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="link"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" class="link"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
