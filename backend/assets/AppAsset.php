<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
	'plugins/bootstrap/css/bootstrap.min.css',
	'plugins/ionicons/css/ionicons.min.css',
	'plugins/font-awesome/css/font-awesome.min.css',
	'plugins/animate/animate.css',
	'plugins/bootstrapValidator/bootstrapValidator.min.css',
	'plugins/switchery/switchery.min.css',
	'css/material.css',
	'css/style.css',
	'css/plugins.css',
	'css/helpers.css',
	'css/responsive.css',
    ];
    
    public $js = [
        'plugins/jquery-1.11.1.min.js',
        'plugins/bootstrap/js/bootstrap.min.js',
        'plugins/bootstrap/js/holder.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'js/core.js',
        'plugins/bootstrapValidator/bootstrapValidator.min.js',
        'plugins/switchery/switchery.min.js',
        'js/maniac.js',
    ];
    
    public $depends = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
    ];

}
