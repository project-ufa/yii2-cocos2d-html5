Cocos2d-html extension
======================
Cocos2d-html estension for yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist project-ufa/yii2-cocos2d-html5 "*"
```

or add

```
"project-ufa/yii2-cocos2d-html5": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, add in your main configuration the next rues:

```php
            'rules' => [
                ...
                'project.json' => 'controller/action/to/generate/project.json',
                'main.js' => 'controller/action/to/generate/main.js',
                ...
            ],
```

