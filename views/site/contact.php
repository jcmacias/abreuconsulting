<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
Yii::$app->params['active'] = 'contact';
?>
<div class="container">
    <div class="site-contact">
        <div class="page-title2 text-center">
            <h1><?= Html::encode($this->title) ?></h1>
            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

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
            <p>
                If you have business inquiries or other questions, please fill out<br> the following form to contact us.
                Thank you.
            </p>
            <hr class="pg-titl-bdr-btm"></hr>
        </div>

        <div class="row">
            <div class="col-lg-6">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'class' => 'form-control text-field-box', 'placeholder'=>'Name'])->label(false) ?>

                <?= $form->field($model, 'email')->textInput(['class' => 'form-control text-field-box', 'placeholder'=>'Email'])->label(false) ?>

                <?= $form->field($model, 'subject')->textInput(['class' => 'form-control text-field-box', 'placeholder'=>'Subject'])->label(false) ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 3, 'class' => 'form-control text-field-box'])->label(false) ?>


                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'button-medium', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
            <div class="col-lg-6">
                <script
                    src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBKCWznxmj1qETZ3VtQJPS5AYLSedEp7UI'></script>
                <div style='overflow:hidden;height:400px;width:520px;'>
                    <div id='gmap_canvas' style='height:400px;width:520px;'></div>
                    <style>#gmap_canvas img {
                            max-width: none !important;
                            background: none !important
                        }</style>
                </div>
                <a href='http://maps-website.com/'>google maps html widget</a>
                <script type='text/javascript'
                        src='https://embedmaps.com/google-maps-authorization/script.js?id=b5ff8bc5ed5d6ead324a83e4f101f05c6aa7e232'></script>
                <script type='text/javascript'>function init_map() {
                        var myOptions = {
                            zoom: 12,
                            center: new google.maps.LatLng(25.7477584, -80.3064109),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                        marker = new google.maps.Marker({
                            map: map,
                            position: new google.maps.LatLng(25.7477584, -80.3064109)
                        });
                        infowindow = new google.maps.InfoWindow({content: '<strong>Abreu Consulting Group</strong><br>6850 Coral Way #401<br>33155 Miami<br>'});
                        google.maps.event.addListener(marker, 'click', function () {
                            infowindow.open(map, marker);
                        });
                        infowindow.open(map, marker);
                    }
                    google.maps.event.addDomListener(window, 'load', init_map);</script>
                <div class="contact-data">
                    <p><i class="fa fa-map-marker"></i> 6850 Coral Way #401, Miami, FL 33155<br/>
                    <i class="fa fa-phone"></i> <a href="tel:7863626494">786.362.6494</a><br/>
                    <i class="fa fa-phone"></i> <a href="tel:3058342923">305.834.2923</a><br/>
                    <i class="fa fa-fax"></i> <a href="tel:+7863911203">786.391.1203</a><br/>
                    <i class="fa fa-envelope"></i> <a href="mailto:info@abreuconsultinggroup.com">info@abreuconsultinggroup.com</a><br/>
<!--                    <i class="fa fa-envelope"></i> <a href="mailto:riatineo@hotmail.com">riatineo@hotmail.com</a></p>-->
                </div>
            </div>
        </div>

        <?php endif; ?>
    </div>
</div>
<!--<script>-->
<!--    function initMap() {-->
<!--        var uluru = {lat: -25.363, lng: 131.044};-->
<!--        var map = new google.maps.Map(document.getElementById('map'), {-->
<!--            zoom: 4,-->
<!--            center: uluru-->
<!--        });-->
<!--        var marker = new google.maps.Marker({-->
<!--            position: uluru,-->
<!--            map: map-->
<!--        });-->
<!--    }-->
<!--</script>-->
<!---->
<!--<script async defer-->
<!--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKCWznxmj1qETZ3VtQJPS5AYLSedEp7UI&callback=initMap">-->
<!--</script>-->