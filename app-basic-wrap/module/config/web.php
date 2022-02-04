<?php
$config = require __DIR__ . '/../vendor/yiisoft/yii2-app-basic/config/web.php';
$config['basePath'] = dirname(__DIR__);
$config['components']['request']['cookieValidationKey'] = (require __DIR__ . '/../config/cookieValidationKey.local.php')['cookieValidationKey'];
$config['modules']['basiclayout']['class'] = 'app\modules\basiclayout\Module';
$config['modules']['basicsite']['class'] = 'app\modules\basicsite\Module';
$config['defaultRoute'] = 'basicsite/site/index';
return $config;
