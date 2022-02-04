<?php

namespace app\modules\basicsite\controllers;

use app\controllers\SiteController as AppSiteController;

class SiteController extends AppSiteController
{
    public function init()
    {
        parent::init();
        $layoutModule = \Yii::$app->getModule('basiclayout');
        $layoutViewPath = $layoutModule->getViewPath();
        $appAlias = \Yii::getAlias('@app');
        if (0 === strpos($layoutViewPath, $appAlias)) {
            $layout = '@app' . substr($layoutViewPath, strlen($appAlias)) . '/layouts/main';
        }
        $this->layout = $layout;
    }
}
