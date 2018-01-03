<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Abreu consulting | Income Tax & Inmigration Services';
Yii::$app->params['active'] = 'home';
?>
<div class="site-index">
    <!--BANNER START-->
    <div id="banner" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="jumbotron" >
                    <h1 class="small tlt" data-in-effect="fadeIn" data-out-shuffle="true"><?= Yii::t('app','Welcome To');?></h1>
                    <h1 class="small tlt" data-in-effect="fadeIn" data-out-shuffle="true"><span class="bold">Abreu Consulting Group</span></h1>
                    <p class="big tlt" data-in-effect="bounceInDown"><?= Yii::t('app','Income Tax & Immigration Services');?></p>

                    <?php  if (Yii::$app->language=='en') {?>
                        <?= Html::a('Learn More<i class="fa fa-send"></i>', ['site/profile'],['class'=>'btn btn-banner']) ?>
                    <?php } ?>

                    <?php  if (Yii::$app->language=='es') {?>
                        <?= Html::a('Leer más<i class="fa fa-send"></i>', ['site/profile'],['class'=>'btn btn-banner']) ?>
                    <?php } ?>



                </div>
            </div>
        </div>
    </div>
    <!--BANNER END-->

    <!--CTA1 START-->

    <div class="cta-1">
        <div class="container">
            <div class="row text-center white">
                <h1 class="cta-title tlt" data-in-effect="fadeInUp"><?= Yii::t('app','We believe in the value of relationships.');?></h1>
                <p class="cta-sub-title tlt" data-in-effect="wobble"><?= Yii::t('app','We view every client relationship like a partnership, and truly believe that our success is a result of your success.');?></p>

            </div>
        </div>
    </div>
    <!--CTA1 END-->

    <!--SERVICE START-->
    <div class="page-title text-center">
        <h1><?= Yii::t('app','Our Service');?></h1>
        <p><?= Yii::t('app','We offer a wide range of services that are individually tailored to meet our client\'s needs.');?></p>
        <hr class="pg-titl-bdr-btm"></hr>
    </div>
    <div id="service" class="">
            <div><img src="/img/slider/1.jpg" alt="Abreu"></div>
            <div><img src="/img/slider/2.jpeg" alt="Abreu"></div>
            <div><img src="/img/slider/3.jpg" alt="Abreu"></div>
            <div><img src="/img/slider/4.jpg" alt="Abreu"></div>
            <div><img src="/img/slider/5.jpg" alt="Abreu"></div>
    </div>
    <!--SERVICE END-->
    <!--CTA2 START-->
    <div class="cta2">
        <div class="container">
            <div class="row white text-center">
                <h3 class="wd75 fnt-24 fadeIn"><?= Yii::t('app','We have a team of highly qualified experts ready to work for you!');?></h3>
                <p class="cta-sub-title"></p>
                <?php  if (Yii::$app->language=='en') {?>
                    <?= Html::a('Request A Quote', ['site/contact'],['class'=>'btn btn-default']) ?>
                <?php } ?>

                <?php  if (Yii::$app->language=='es') {?>
                    <?= Html::a('Solicitar Cuota', ['site/contact'],['class'=>'btn btn-default']) ?>
                <?php } ?>

            </div>
        </div>
    </div>
    <!--CTA2 END-->

    <!--CONTACT START-->
    <div id="contact" class="section-padding">
        <div class="container">
            <div class="row">
    <div class="page-title text-center">
    <h1><?= Yii::t('app','Quick Contact');?></h1>
<?php if (Yii::$app->session->hasFlash('contactFormSubmitted1')): ?>

    <div class="alert alert-success">
        Thank you for contacting us. We will respond to you as soon as possible.
    </div>

    <p>
        Note that if you turn on the Yii debugger, you should be able
        to view the mail message on the mail panel of the debugger.
        <?php if (Yii::$app->mailer->useFileTransport): ?>
            Because the application is in development mode, the email is not sent but saved as
            a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                                                                                Please configure the
            <code>useFileTransport</code> property of the <code>mail</code>
            application component to be false to enable email sending.
        <?php endif; ?>
    </p>

<?php else: ?>
    <p><?= Yii::t('app','If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.');?> </p>
    <hr class="pg-titl-bdr-btm">
    </div>

<!--data-aos="zoom-in"-->
    <div class="form-sec">
                    <?php $form = ActiveForm::begin([
                        'id' => 'contact-form-home',
                         'action' => Url::to(['/site/contact']),
                    ]); ?>
                        <div class="col-md-4 form-group">
                            <?= $form->field($model, 'name')->textInput(['class' => 'form-control text-field-box','placeholder'=>'Your Name'])->label(false) ?>
                        </div>
                        <div class="col-md-4 form-group">
                            <?= $form->field($model, 'email')->textInput(['class' => 'form-control text-field-box', 'id'=>'email', 'placeholder'=>'Your Email'])->label(false) ?>
                        </div>

                        <div class="col-md-4 form-group">
                            <?= $form->field($model, 'subject')->textInput(['class' => 'form-control text-field-box', 'id'=>'subject','placeholder'=>'Subject'])->label(false) ?>
                        </div>
                        <div class="col-md-12 form-group">
                            <?= $form->field($model, 'body')->textarea(['rows' => 5, 'class' => 'form-control text-field-box','placeholder'=>'Message'])->label(false) ?>
                            <?= Html::submitButton('Submit Now', ['class' => 'button-medium', 'name' => 'contact-button']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>


                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!--CONTACT END-->

</div>
<?=
    $this->registerJsFile(
    '@web/js/slick/slick.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
    );?>
<?= $this->registerJs(
    "  
    $(function () {
	$('.tlt').textillate();
});
 $('#service').slick({
            infinite: true,
            speed: 300,
//            slidesToShow: 6,
            centerMode: false,
            variableWidth: true
        });
   
",
    View::POS_READY,
    'Lettering'
); ?>