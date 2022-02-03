<?php

namespace huzhenghui\app_basic_wrap_controller;

use Composer\Installer\LibraryInstaller;
use Composer\Script\Event;

use yii\composer\Installer as YiiComposerInstaller;

class Installer extends LibraryInstaller
{

    /**
     * @param Event $event
     */
    public static function postUpdate($event): void
    {
        YiiComposerInstaller::copyFiles(array(
            "./config/cookieValidationKey.dist.php" => "./config/cookieValidationKey.local.php",
            "./vendor/yiisoft/yii2-app-basic/yii" => "./yii",
            "./vendor/yiisoft/yii2-app-basic/web/index.php" => "./web/index.php",
            "./vendor/yiisoft/yii2-app-basic/views/site/index.php" => "./views/site/index.php",
            "./vendor/yiisoft/yii2-app-basic/views/layouts/main.php" => "./views/layouts/main.php",
            "./vendor/yiisoft/yii2-app-basic/assets/AppAsset.php" => "./assets/AppAsset.php",
            "./vendor/yiisoft/yii2-app-basic/web/assets/.gitignore" => "./web/assets/.gitignore",
            "./vendor/yiisoft/yii2-app-basic/widgets/Alert.php" => "./widgets/Alert.php"
        ));
    }
    /**
     * @param Event $event
     */
    public static function postInstall($event): void
    {
        YiiComposerInstaller::generateCookieValidationKey("config/cookieValidationKey.local.php");
    }
}
