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
            "./vendor/yiisoft/yii2-app-basic/commands/HelloController.php" => "./commands/HelloController.php",
        ));
    }
}
