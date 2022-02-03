<?php
$config = require __DIR__ . '/../vendor/yiisoft/yii2-app-basic/config/web.php';
$config['basePath'] = dirname(__DIR__);
$config['components']['request'] = require __DIR__ . '/../config/cookieValidationKey.local.php';
$config['controllerNamespace'] = 'huzhenghui\app_basic_wrap_index\controllers';
return $config;
