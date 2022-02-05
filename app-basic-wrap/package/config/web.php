<?php
$config = require __DIR__ . '/../vendor/yiisoft/yii2-app-basic/config/web.php';
$config['basePath'] = dirname(__DIR__);
$config['components']['request']['cookieValidationKey'] = (require __DIR__ . '/../config/cookieValidationKey.local.php')['cookieValidationKey'];
$config['modules']['basiclayout']['class'] = 'huzhenghui\yii2\app_basic\layout\Module';
$config['modules']['basicsite']['class'] = 'huzhenghui\yii2\app_basic\site\Module';
$config['defaultRoute'] = 'basicsite/site/index';
$config['components']['user']['identityClass'] = 'huzhenghui\yii2\app_basic\site\models\User';
$config['components']['errorHandler']['errorAction'] = 'basicsite/site/error';
return $config;
