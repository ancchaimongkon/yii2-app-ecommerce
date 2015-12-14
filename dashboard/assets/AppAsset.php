<?php
namespace dashboard\assets;

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
    public $baseUrl = '@web/vendor';
    
    public $css = [
        'bootstrap-3.3.6/dist/css/bootstrap.min.css',
        'font-awesome-4.5.0/css/font-awesome.min.css',
        
        'ionicons-1.4.0/css/ionicons.min.css',
        'morris/css/morris.css',
        'jvectormap-1.2.2/css/jquery-jvectormap-1.2.2.css',
        'fullcalendar/css/fullcalendar.css',
        'daterangepicker/css/daterangepicker-bs3.css',
        'bootstrap-wysihtml5/css/bootstrap3-wysihtml5.min.css',
        
        'adminLTE/css/style.css',
    ];
    
    public $js = [
        'jquery-2.0.2/js/jquery.min.js',
        'jquery-ui-1.10.3/js/jquery-ui.min.js',
        'bootstrap-3.3.6/dist/js/bootstrap.min.js',
        
        'morris/js/morris.min.js',
        'sparkline/js/sparkline.min.js',
        'jvectormap-1.2.2/js/jvectormap.min.js',
        'jvectormap-1.2.2/js/jvectormap-world-mill-en.js',
        'fullcalendar/js/fullcalendar.min.js',
        'jqueryKnob/js/knob.js',
        'daterangepicker/js/daterangepicker.js',
        'bootstrap-wysihtml5/js/bootstrap3-wysihtml5.all.min.js',
        'iCheck/js/icheck.min.js',
        
        'raphael-2.1.4/js/raphael-min.js',
        'adminLTE/js/app.js',
        'adminLTE/js/dashboard.js'
    ];
    
    public $depends = [
        // 'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset', 
    ];
    
}