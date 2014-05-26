<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

//set the flags to determine if it is production mode or not
//we will use ip address to determine the mode type
$machine_ip = filter_input(INPUT_SERVER, 'REMOTE_ADDR');

//Added IP filters to switch trace and log details based on the environment
//Assumes that localhost and 127.0.0.1 are development environments
if ($machine_ip != '127.0.0.1') {
    /* production mode */
} else {
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 1);
    defined('YII_DEBUG') or define('YII_DEBUG', true);
}

// remove the following line when in production mode
//defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();
