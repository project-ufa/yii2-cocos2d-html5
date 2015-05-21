<?php

namespace projectufa\cocos2dhtml5;

use yii\web\AssetBundle;
use yii\base\View;

class Cocos2dHtml5Asset extends AssetBundle
{

    public $sourcePath = '@bower/cocos2d-html5';

    public $js = [
        'CCBoot.js',
    ];

    public $jsOptions = [
        'position' => View::POS_END,
    ];
}
