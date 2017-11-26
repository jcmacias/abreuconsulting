<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Abreu consulting | Income Tax & Inmigration Services';
?>
<div class="site-index">
    <!--BANNER START-->
    <div id="banner" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <h1 class="small">Welcome To <span class="bold">Abreu Consulting Group</span></h1>
                    <p class="big">Income Tax & Inmigration Services</p>
                    <a href="#" class="btn btn-banner">Learn More<i class="fa fa-send"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--BANNER END-->

    <!--CTA1 START-->
    <div class="cta-1">
        <div class="container">
            <div class="row text-center white">
                <h1 class="cta-title">Get your maximum tax refund!!</h1>
                <p class="cta-sub-title">Know the difference between getting your taxes done, and getting your taxes won.</p>

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
                    <div class="service-box">
                        <div class="service-icon"><i class="fa fa-money"></i></div>
                        <div class="service-text">
                            <h3>Income Tax</h3>
                            <p>Our company count with more than 15 years of experience of making taxes super simple.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-icon"><i class="fa fa-suitcase"></i></div>
                        <div class="service-text">
                            <h3>Immigration</h3>
                            <p>We have assisted hundreds of thousands of clients with their immigration applications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-icon"><i class="fa fa-graduation-cap"></i></div>
                        <div class="service-text">
                            <h3>Courses</h3>
                            <p> doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
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
                <h3 class="wd75 fnt-24">“Every Thing is designed. Few Things are Designed well.” - Brian Reed</h3>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
                    <hr class="pg-titl-bdr-btm"></hr>
                </div>
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="form-sec">
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea class="form-control text-field-box" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>

                            <button class="button-medium" id="contact-submit" type="submit" name="contact">Submit Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--CONTACT END-->

</div>
