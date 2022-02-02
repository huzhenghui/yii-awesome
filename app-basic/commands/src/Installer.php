<?php

namespace huzhenghui\yii\composer\installer;

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
            "./vendor/yiisoft/yii2-app-basic/yii" => "./yii",
            "./vendor/yiisoft/yii2-app-basic/config/console.php" => "./config/console.php",
            "./vendor/yiisoft/yii2-app-basic/config/db.php" => "./config/db.php",
            "./vendor/yiisoft/yii2-app-basic/config/params.php" => "./config/params.php",
            "./vendor/yiisoft/yii2-app-basic/commands/HelloController.php" => "./commands/HelloController.php",
        ));
    }
}
