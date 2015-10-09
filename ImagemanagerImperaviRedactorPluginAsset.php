<?php

namespace bobroid\imperavi;
use yii\web\AssetBundle;

class ImagemanagerImperaviRedactorPluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bobroid/imperavi/assets/plugins/imagemanager';
    public $js = [
        'imagemanager.js'
    ];
    public $css = [

    ];
    public $depends = [
        'bobroid\imperavi\ImperaviRedactorAsset'
    ];
}