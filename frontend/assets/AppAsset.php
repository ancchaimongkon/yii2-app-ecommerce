<?php

namespace frontend\assets;

use Yii; # ปิดการใช้งาน BootstrapAsset
use yii\web\AssetBundle;

class AppAsset extends AssetBundle {
    
    # ปิดการใช้งาน BootstrapAsset
    public function init(){
        parent::init();
        Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
            'css' => [],
            'js' => []
        ];
    }
    
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
        'vendor/bootstrap-3.3.6/dist/css/bootstrap.min.css',
        'vendor/font-awesome-4.5.0/css/font-awesome.min.css',
        'vendor/prettyPhoto/css/prettyPhoto.css',
        'vendor/price-range/css/price-range.css',
        'vendor/animate/css/animate.css',
        'css/main.css',
        'css/responsive.css',
    ];
    
    public $js = [
        'vendor/jquery-2.0.2/js/jquery.min.js',
        'vendor/bootstrap-3.3.6/dist/js/bootstrap.min.js',
        'js/jquery.scrollUp.min.js',
        'vendor/price-range/js/price-range.js',
        'vendor/prettyPhoto/js/jquery.prettyPhoto.js',
        'vendor/holder-2.9.0/holder.min.js',
        'js/main.js',   
    ];
    
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
    
}