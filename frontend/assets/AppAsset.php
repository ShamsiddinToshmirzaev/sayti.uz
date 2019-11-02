<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'scss/index.css',
        'scss/owl.carousel.min.css',
        'scss/owl.theme.default.min.css',

    ];
    public $js = [
        'js/index.js',
        'js/jquery.min.js',
        'js/owl.carousel.min.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
