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
        'css/site.css',
        'css/demo.css',
        'css/custom.css',
        'css/style.css',
        'modules/ionicons/css/ionicons.min.css',
        'modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css',
        'modules/summernote/summernote-lite.css',
        'modules/flag-icon-css/css/flag-icon.css',
    ];
    public $js = [
      'modules/jquery.min.js',
      'modules/popper.js',
      'modules/tooltip.js',
      'modules/nicescroll/jquery.nicescroll.min.js',
      'modules/scroll-up-bar/dist/scroll-up-bar.min.js',
      'js/sa-functions.js',
      'modules/chart.min.js',
      'modules/summernote/summernote-lite.js',
      'js/scripts.js',
      'js/custom.js',
      'js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
