<?php

require dirname(dirname(__DIR__)) . '/vendor/autoload.php';

// change the following paths if necessary
$yiit = dirname(dirname(__DIR__)) . '/vendor/yiisoft/yii/framework/yiit.php';

$config = dirname(__DIR__) . '/config/test.php';

require_once($yiit);

require_once(dirname(__FILE__) . '/WebTestCaseAbstract.php');
require_once(dirname(__FILE__) . '/WebTestCase.php');

Yii::createWebApplication($config);
