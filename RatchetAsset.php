<?php

namespace xj\ratchet;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class RatchetAsset extends AssetBundle
{
    public $sourcePath = '@bower/ratchet/dist';
    public $basePath = '@webroot/assets';
    public $js = [
        'js/ratchet.js',
    ];
    public $css = [
        'css/ratchet.css',
    ];
}
