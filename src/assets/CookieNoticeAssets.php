<?php

namespace Cronox\Yii\CookieWidget\assets;

use yii\web\AssetBundle;

class CookieNoticeAssets extends AssetBundle
{
    public $css = [
        'css/style.css',
    ];

    public $js = [
        'js/main.js',
    ];

    public $depends = [
        \yii\web\YiiAsset::class,
    ];

    public $jsOptions = ['position' => \yii\web\View::POS_END];

    public function init()
    {
        $this->sourcePath = realpath(__DIR__.'/../resources');
        parent::init();
    }

    public function getFileUrl($relativePath)
    {
        return $this->baseUrl.$relativePath;
    }
}
