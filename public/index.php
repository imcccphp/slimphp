<?php
// 检测php版本,不低于7.1.0
if (version_compare(PHP_VERSION, '7.1.0', '<')) {
    die('PHP版本过低，必须大于等于7.1.0');
}

// Rename SEPARATOR
define("DS", DIRECTORY_SEPARATOR);
define("CS", '.');
define('SLIM_START_TIME', microtime(true));
define('SLIM_START_MEM', memory_get_usage());

//debug
define("DEBUG", true);

// define Path
define("SLIM_PATH", dirname(dirname(__FILE__)) . DS . "vendor" . DS . "imccc" . DS . "slim" . DS . "src" . DS); //框架目录
define("APP_PATH", dirname(dirname(__FILE__)) . DS . "App" . DS); //APP目录
define("RUN_PATH", dirname(APP_PATH) . DS . "runtime" . DS);

// define config dir
define("APP_CONFIG_PATH", dirname(APP_PATH) . DS . "config" . DS); // 配置文件目录

// include FrameWork file
include_once SLIM_PATH . "Boot.php";

new Imccc\Slim\Boot();
