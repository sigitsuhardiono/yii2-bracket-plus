<?php

namespace akupeduli\bracket\assets\plugins;

use yii\web\AssetBundle;

/**
 * Class MomentAsset
 *
 * @author  L Shaf <shafry2008@gmail.com>
 * @package akupeduli\bracket\assets\plugins
 */
class MomentAsset extends AssetBundle
{
    public $sourcePath = "@bower/moment/min";
    public $js = [
        "moment.min.js",
    ];
}
