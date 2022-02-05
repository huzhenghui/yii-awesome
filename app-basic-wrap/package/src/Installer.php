<?php

namespace huzhenghui\app_basic_wrap_package;

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
            "./vendor/huzhenghui/yii2-app-basic-files/yii" => "./yii",
            "./vendor/huzhenghui/yii2-app-basic-files/web/index.php" => "./web/index.php",
            "./vendor/huzhenghui/yii2-app-basic-files/web/assets/.gitignore" => "./web/assets/.gitignore",
        ));
    }
    /**
     * @param Event $event
     */
    public static function postInstall($event): void
    {
        YiiComposerInstaller::generateCookieValidationKey("./config/cookieValidationKey.local.php");
    }
}
