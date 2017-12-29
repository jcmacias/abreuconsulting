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
                    <h1 class="small tlt" data-in-effect="fadeIn" data-out-shuffle="true">Welcome To</h1>
                    <h1 class="small tlt" data-in-effect="fadeIn" data-out-shuffle="true"><span class="bold">Abreu Consulting Group</span></h1>
                    <p class="big tlt" data-in-effect="bounceInDown">Income Tax & Immigration Services</p>
                    <?= Html::a('Learn More<i class="fa fa-send"></i>', ['site/profile'],['class'=>'btn btn-banner']) ?>
                </div>
            </div>
        </div>
    </div>
    <!--BANNER END-->

    <!--CTA1 START-->
    <div class="cta-1">
        <div class="container">
            <div class="row text-center white">
                <h1 class="cta-title tlt" data-in-effect="fadeInUp">We believe in the value of relationships.</h1>
                <p class="cta-sub-title tlt" data-in-effect="wobble">We view every client relationship like a partnership, and truly believe that our success is a result of your success.</p>

            </div>
        </div>
    </div>
    <!--CTA1 END-->

    <!--SERVICE START-->
    <div id="service" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h1>Our Service</h1>
                    <p>We offer a wide range of services that are individually tailored to meet our client's needs.</p>
                    <hr class="pg-titl-bdr-btm"></hr>
                </div>
                <div class="col-md-4">
                    <div class="service-box" data-aos="fade-right">
                        <div class="service-icon"><i class="fa fa-money"></i></div>
                        <div class="service-text">
                            <h3>Tax Preparation</h3>
                            <p>Our company count with more than 8 years of experience of making taxes super simple.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box " data-aos="fade-up">
                        <div class="service-icon"><i class="fa fa-suitcase"></i></div>
                        <div class="service-text">
                            <h3>Immigration Services</h3>
                            <p>We have assisted hundreds of clients with their immigration applications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box" data-aos="fade-left">
                        <div class="service-icon"><i class="fa fa-graduation-cap"></i></div>
                        <div class="service-text">
                            <h3>Courses(Coming Soon)</h3>
                            <p>Learning is a collaborative process, and we're here to provide you with guidance every step of the way.</p>
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
                <h3 class="wd75 fnt-24 fadeIn">We have a team of highly qualified experts ready to work for you!</h3>
                <p class="cta-sub-title"></p>
                <?= Html::a('Request A Quote', ['site/contact'],['class'=>'btn btn-default']) ?>
            </div>
        </div>
    </div>
    <!--CTA2 END-->

    <!--CONTACT START-->
    <div id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h1>Quick Contact</h1>
                    <p>If you have business inquiries or other questions, please fill out
                        the following form to contact us. Thank you. </p>
                    <hr class="pg-titl-bdr-btm"></hr>
                </div>
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="form-sec" data-aos="zoom-in">
                    <?php $form = ActiveForm::begin([
                        'id' => 'contact-form-home',
//                        'action' => Url::to(['/site/contact']),
                    ]); ?>
                        <div class="col-md-4 form-group">
                            <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'class' => 'form-control text-field-box','placeholder'=>'Your Name', 'data-rule'=>'minlen:4', 'data-msg'=>'Please enter at least 4 chars'])->label(false) ?>
                        </div>
                        <div class="col-md-4 form-group">
                            <?= $form->field($model, 'email')->textInput(['class' => 'form-control text-field-box','name'=>'email', 'id'=>'email', 'placeholder'=>'Your Email', 'data-rule'=>'email', 'data-msg'=>'"Please enter a valid email" '])->label(false) ?>
                        </div>
                        <div class="col-md-4 form-group">
                            <?= $form->field($model, 'subject')->textInput(['class' => 'form-control text-field-box', 'name'=>'subject', 'id'=>'subject','placeholder'=>'Subject','data-rule'=>'minlen:4' ,'data-msg'=>'Please enter at least 8 chars of subject'])->label(false) ?>
                        </div>
                        <div class="col-md-12 form-group">
                            <?= $form->field($model, 'body')->textarea(['rows' => 5, 'class' => 'form-control text-field-box','name'=>'message','data-rule'=>'required', 'data-msg'=>'Please write something for us' ,'placeholder'=>'Message'])->label(false) ?>
                            <?= Html::submitButton('Submit Now', ['class' => 'button-medium', 'name' => 'contact-button']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>


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