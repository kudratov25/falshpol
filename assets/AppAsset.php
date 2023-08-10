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
        // 'css/site.css',
        'resources/web/assets/mobirise-icons2/mobirise2.css',
        'resources/bootstrap/css/bootstrap.min.css',
        'resources/bootstrap/css/bootstrap-grid.min.css',
        'resources/bootstrap/css/bootstrap-reboot.min.css',
        'resources/parallax/jarallax.css',
        'resources/animatecss/animate.css',
        'resources/popup-overlay-plugin/style.css',
        // 'resources/smart-cart/minicart-theme.css',
        'resources/dropdown/css/style.css',
        'resources/socicon/css/styles.css',
        'resources/theme/css/style.css',
        'resources/mobirise/css/mbr-additional.css',
        'resources/styles/style.css',
        '//fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap',
        '//fonts.googleapis.com/css?family=Be+Vietnam+Pro:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap',


    ];
    public $js = [
        'resources/bootstrap/js/bootstrap.bundle.min.js',
        'resources/parallax/jarallax.js',
        'resources/smoothscroll/smooth-scroll.js',
        'resources/ytplayer/index.js',
        // 'resources/smart-cart/minicart.js',
        // 'resources/smart-cart/minicart-customizer.js',
        'resources/dropdown/js/navbar-dropdown.js',
        'resources/embla/embla.min.js',
        'resources/embla/script.js',
        'resources/theme/js/script.js',
        'resources/javascripts/manual.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}
