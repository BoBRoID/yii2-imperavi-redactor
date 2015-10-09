<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace bobroid\imperavi;
use yii\web\AssetBundle;

/**
 * @author Alexander Yaremchuk <alwex10@gmail.com>
 * @since 1.4
 */
class TextdirectionImperaviRedactorPluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bobroid/imperavi/assets/plugins/textdirection';
    public $js = [
        'textdirection.js'
    ];
    public $css = [

    ];
    public $depends = [
        'bobroid\imperavi\ImperaviRedactorAsset'
    ];
}