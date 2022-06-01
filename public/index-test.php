<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */
require dirname(__DIR__) . '/vendor/autoload.php';

// change the following paths if necessary
$yii = dirname(dirname(__FILE__)) . '/vendor/yiisoft/yii/framework/yii.php';

$config = dirname(dirname(__FILE__)) . '/protected/config/test.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);

Yii::createWebApplication($config)->run();
