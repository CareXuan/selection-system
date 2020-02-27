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
        'modules/bootstrap/css/bootstrap.min.css',
        'modules/ionicons/css/ionicons.min.css',
        'modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css',
        'css/demo.css',
        'css/style.css',
    ];
    public $js = [
      'modules/jquery.min.js',
      'modules/popper.js',
      'modules/tooltip.js',
      'modules/bootstrap/js/bootstrap.min.js',
      'modules/nicescroll/jquery.nicescroll.min.js',
      'modules/scroll-up-bar/dist/scroll-up-bar.min.js',
      'js/sa-functions.js',
      'js/scripts.js',
      'js/custom.js',
      'js/demo.js'
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
