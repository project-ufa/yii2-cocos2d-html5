<?php

namespace projectufa\cocos2dhtml5;

use yii\web\AssetBundle;

class Cocos2dHtml5Asset extends AssetBundle
{

    public $sourcePath = '@bower/cocos2d-html5';

    public $js = [
        'CCBoot.js',
    ];

    public $jsOptions = [
        'position' => \yii\base\View::POS_END,
    ];
}
