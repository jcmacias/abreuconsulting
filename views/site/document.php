<?php
/**
 * Created by PhpStorm.
 * User: jcmac
 * Date: 11/4/2017
 * Time: 2:33 PM
 */
Yii::$app->params['active'] = 'document';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-service">
        <div class="page-title2 text-center">
            <h1><?= Yii::t('app','Documents');?></h1>
            <p><?= Yii::t('app','Your time is important to us.');?> <br> <?= Yii::t('app','Now, you can fill out these forms and speed up your process.');?></p>
            <hr class="pg-titl-bdr-btm"></hr>
        </div>


        <table class="table table-bordered">
            <tr>
                <td><a href="/doc/New%20Client%20Data%20Sheet%20English.pdf">New Client Data Sheet (English)</a></td>

            </tr>
            <tr>
                <td><a href="/doc/New%20Client%20Data%20Sheet%20Spanish.pdf">Nueva Hoja de Datos del Cliente (Spanish)</a></td>

            </tr>
            <tr>
                <td><a href="/doc/New%20Self%20Employee%20English.pdf">New Self Employee Data Sheet(English)</a></td>

            </tr>
            <tr>
                <td><a href="/doc/New%20Self%20Employee%20Spanish.pdf">Nueva Hoja de Datos para Self Employee (Spanish)</a></td>

            </tr>
            <tr>
                <td><a href="/doc/Real%20Estate%20Agents%20Deduction.pdf">Real Estate Agents Deduction (English)</a></td>
            </tr>
        </table>
    </div>
</div>

