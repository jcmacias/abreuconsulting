<?php
/**
 * Created by PhpStorm.
 * User: jcmac
 * Date: 11/4/2017
 * Time: 2:32 PM
 */
Yii::$app->params['active'] = 'profile';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="site-service">
        <div class="page-title2 text-center">
            <h1><?= Yii::t('app','Our Mission');?></h1>
            <p><?= Yii::t('app','Almost a decade with hundreds of satisfied customers,');?><br/> <?= Yii::t('app','our work speaks for itself.');?></p>
        </div>
        <hr class="pg-titl-bdr-btm">
        <div class="row">
            <div class="col-lg-12">
                <img src="/img/mission.jpg" class="img-responsive" alt="Miami Consulting">
            </div>
            <div class="col-lg-12 text-block">
                <?php  if (Yii::$app->language=='en') {?>

                    <p ALIGN="justify">Our mission is to provide the highest level of service, convenience and support to our clients. We
                        are committed to maintaining the highest standards of integrity and professionalism in our
                        relationship with you, our client. </p>
                    <p ALIGN="justify">If you’re looking for a firm that will focus on your individual needs, and always treat you like a
                        client who matters, look no further. Our firm is large enough to offer a full range of professional
                        services, but small enough to give you the individual attention that you deserve. </p>
                    <p ALIGN="justify">We believe in the value of relationships. We view every client relationship like a partnership, and
                        truly believe that our success is a result of your success. We are committed to providing close,
                        personal attention to our clients. </p>
                    <p ALIGN="justify">We take pride in giving you the assurance that the personal assistance you receive comes from years
                        of advanced training, technical experience and financial acumen. We will thoroughly and
                        conscientiously study your personal situation, and tailor our advice to your specific needs.</p>
                <?php } ?>

                <?php  if (Yii::$app->language=='es') {?>

                    <p ALIGN="justify">Nuestra misión es proporcionar el más alto nivel de servicio, conveniencia y respaldo a nuestros clientes. Nosotros
                        estamos comprometidos a mantener los más altos estándares de integridad y profesionalismo en nuestra
                        relación con usted, nuestro cliente. </p>
                    <p ALIGN="justify">Si está buscando una empresa que se centre en sus necesidades individuales, y siempre lo trate como un
                       cliente que importa, no busques más. Nuestra firma es lo suficientemente grande como para ofrecer una gama completa de servicios profesionales
                       , pero lo suficientemente pequeña como para brindarle la atención individual que usted se merece.
                    </p>
                    <p ALIGN="justify">Creemos en el valor de las relaciones. Vemos cada relación con el cliente como una asociación, y
                       realmente creo que nuestro éxito es el resultado de su éxito. Nos comprometemos a brindar un acercamiento,
                       atención personalizada a nuestros clientes </p>
                    <p ALIGN="justify">Nos enorgullece brindarle la garantía de que la asistencia personal que recibe proviene de años.
                       de entrenamiento avanzado, experiencia técnica y perspicacia financiera. Lo haremos a fondo y
                       Estudie concienzudamente su situación personal y adapte nuestros consejos a sus necesidades específicas.</p>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
