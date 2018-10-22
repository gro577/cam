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
        'http://fonts.googleapis.com/css?family=Oswald',
        'css/bootstrap.css',
        'css/bootstrap-responsive.css',
        'css/prettyPhoto.css',
        'css/flexslider.css',
        'css/custom-styles.css',
        'css/style-ie.css',
        //'css/site.css',
    ];
    public $js = [
        'http://html5shim.googlecode.com/svn/trunk/html5.js',
        'http://code.jquery.com/jquery-1.8.3.min.js',
        'js/bootstrap.js',
        'js/jquery.prettyPhoto.js',
        'js/jquery.flexslider.js',
        'js/jquery.custom.js',
       // 'js/templateScript.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
