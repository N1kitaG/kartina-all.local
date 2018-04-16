<?php
/**
 * Created by PhpStorm.
 * User: upside
 * Date: 02.12.2016
 * Time: 15:53
 */

namespace frontend\themes\pink\assets;


use yii\web\AssetBundle;

class PinkAsset extends AssetBundle
{

    public $sourcePath = '@app/themes/pink/assets/src';
    //public $basePath = '@webroot/test/bla';
    //public $baseUrl = '@web/test/bla';
    public $css = [
        'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=cyrillic',
        //'css/normalize.min.css',
        'css/jquery.bxslider.css',
        'css/main.css?v=2',
    ];
    public $js = [
        'js/plugins.js?v=2',
        'js/vendor/jquery.bxslider.js',
        'js/main.js?v=2',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
    public $publishOptions = [
        'theme' => 'pink'
    ];
}