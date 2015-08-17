<?php

namespace xj\ratchet;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class RatchetAndroidAsset extends AssetBundle
{
    public $sourcePath = '@bower/ratchet/dist';
    public $basePath = '@webroot/assets';
    public $css = [
        'css/ratchet-theme-android.css',
    ];
    public $depends = [
        'xj\ratchet\RatchetAsset',
    ];
}
