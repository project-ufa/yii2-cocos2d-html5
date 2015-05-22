<?php

namespace projectufa\cocos2dhtml5;

use yii\web\AssetBundle;
use yii;
use yii\helpers\FileHelper;
use yii\helpers\Json;


class Cocos2dHtml5Asset extends AssetBundle
{

    public $sourcePath = '@bower/cocos2d-html5';

    public static $staticSourcePath = '@bower/cocos2d-html5';

    public $js = [
        'CCBoot.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];

    public static function getPublishedDir()
    {
        return static::$staticSourcePath;
    }
}
