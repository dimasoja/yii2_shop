<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/style.css',
        'css/flexslider.css',
        'css/flexslider.css',
        '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800',
        
    ];
    public $js = [
        'js/jquery-1.11.1.min.js',
        'js/bootstrap.min.js',
        'js/responsiveslides.min.js',
        'js/jquery.flexslider.js',
        'js/imagezoom.js',
        'js/jquery.flexslider.js',
        
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
