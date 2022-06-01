<?php

require dirname(__DIR__) . '/vendor/autoload.php';

// change the following paths if necessary
$yii = dirname(__DIR__) . '/vendor/yiisoft/yii/framework/yii.php';

$config = dirname(__DIR__) . '/protected/config/main.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);

Yii::createWebApplication($config)->run();
