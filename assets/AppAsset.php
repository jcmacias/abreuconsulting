<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.min.css',
        'css/slick-team-slider.css',
        'css/animate.css',
        'css/style.css',
        'css/site.css',
    ];
    public $js = [
        'js/jquery.easing.min.js',
        'js/bootstrap.min.js',
        'js/jquery.mixitup.js',
        'js/slick.min.js',
        'js/jquery.lettering.js',
        'js/jquery.textillate.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
