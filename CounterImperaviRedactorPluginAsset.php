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
 * @since 1.5
 */
class CounterImperaviRedactorPluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bobroid/imperavi/assets/plugins/counter';
    public $js = [
        'counter.js',
    ];
    public $css = [

    ];
    public $depends = [
        'bobroid\imperavi\ImperaviRedactorAsset'
    ];
}