<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$active=Yii::$app->params['active'];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class=" js no-touch">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!--HEADER START-->
    <div class="main-navigation navbar-fixed-top">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="Abreu Consulting" ></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?= $active == 'home' ? 'class="active"' : '';?>><?= Html::a(Yii::t('app','Home'), ['site/index']) ?></li>
                        <li <?= $active == 'profile' ? 'class="active"' : '';?>><?= Html::a(Yii::t('app','Profile'), ['site/profile']) ?></li>
                        <li <?= $active == 'service' ? 'class="active"' : '';?>><?= Html::a(Yii::t('app','Services'), ['site/service']) ?></li>
                        <li <?= $active == 'document' ? 'class="active"' : '';?>><?= Html::a(Yii::t('app','Documents'), ['site/document']) ?></li>
                        <li <?= $active == 'contact' ? 'class="active"' : '';?>><?= Html::a(Yii::t('app','Contact Us'), ['site/contact']) ?></li>
                        <li><?= \lajax\languagepicker\widgets\LanguagePicker::widget([
                                'skin' => \lajax\languagepicker\widgets\LanguagePicker::SKIN_DROPDOWN,
                                'size' => \lajax\languagepicker\widgets\LanguagePicker::SIZE_SMALL
                            ]); ?>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
    </div>
    <!--HEADER END-->

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
    <?= $content ?>
</div>
<!--FOOTER START-->
<footer class="footer section-padding">
    <div class="container">
        <div class="row">
            <div style="visibility: visible; animation-name: zoomIn;" class="col-sm-12 text-center wow zoomIn">
                <h3>Follow us on</h3>
                <div class="footer_social">
                    <ul>
                        <li><a class="f_facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="f_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="f_google" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="f_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--- END COL -->
        </div>
        <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
</footer>
<!--FOOTER END-->
<div class="footer-bottom">
    <div class="container">
        <div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
            <div class="footer_copyright">
                <p> © Copyright, All Rights Reserved.</p>
                <div class="credits">
                    &copy; Abreu Consulting Group <?= date('Y') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
