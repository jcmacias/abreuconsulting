<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;

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
    <div id="service" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h1><?= Yii::t('app','Our Service');?></h1>
                    <p><?= Yii::t('app','We offer a wide range of services that are individually tailored to meet our client\'s needs.');?></p>
                    <hr class="pg-titl-bdr-btm">
                </div>
                <div class="col-md-4">
                    <div class="service-box" data-aos="fade-right">
                        <div class="service-icon"><i class="fa fa-money"></i></div>
                        <div class="service-text">
                            <h3>Tax Preparation</h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box " data-aos="fade-up">
                        <div class="service-icon"><i class="fa fa-suitcase"></i></div>
                        <div class="service-text">
                            <h3>Immigration Services</h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box" data-aos="fade-left">
                        <div class="service-icon"><i class="fa fa-graduation-cap"></i></div>
                        <div class="service-text">
                            <h3>Courses(Coming Soon)</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    <p><?= Yii::t('app','If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.');?> </p>
                    <hr class="pg-titl-bdr-btm">
                </div>
                <div id="sendmessage"><?= Yii::t('app','Your message has been sent. Thank you!');?></div>
                <div id="errormessage"></div>

                <div class="form-sec" data-aos="zoom-in">
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="col-md-4 form-group">
                            <?php  if (Yii::$app->language=='en') {?>
                                <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <?php } ?>

                            <?php  if (Yii::$app->language=='es') {?>
                                <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                            <?php } ?>

                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <?php  if (Yii::$app->language=='en') {?>
                                <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <?php } ?>

                            <?php  if (Yii::$app->language=='es') {?>
                                <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="Correo Electrónico" data-rule="email" data-msg="Por favor introduzca una dirección de correo electrónico válida" />
                            <?php } ?>

                            <div class="validation"></div>
                        </div>

                        <div class="col-md-4 form-group">
                            <?php  if (Yii::$app->language=='en') {?>
                                <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <?php } ?>

                            <?php  if (Yii::$app->language=='es') {?>
                                <input type="text" class="form-control text-field-box" name="asunto" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres como asunto" />
                            <?php } ?>

                            <div class="validation"></div>
                        </div>
                        <div class="col-md-12 form-group">

                            <?php  if (Yii::$app->language=='en') {?>
                                <textarea class="form-control text-field-box" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <?php } ?>

                            <?php  if (Yii::$app->language=='es') {?>
                                <textarea class="form-control text-field-box" name="mensaje" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Message"></textarea>
                            <?php } ?>

                            <div class="validation"></div>

                            <button class="button-medium" id="contact-submit" type="submit" name="contact"><?= Yii::t('app','Submit Now');?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--CONTACT END-->

</div>
<?= $this->registerJs(
    "    
    $(function () {
	$('.tlt').textillate();
})
",
    View::POS_READY,
    'Lettering'
); ?>