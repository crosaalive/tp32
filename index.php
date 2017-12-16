<?php
// 检测PHP环境

if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP < 5.3.0 !');

// 开启调试模式

define('APP_DEBUG', true);

define('ROOT_PATH', dirname(__FILE__)."/");

//项目路径，不可更改

define('APP_PATH', ROOT_PATH);

// define('BIND_MODULE','Home');

// 引入ThinkPHP入口文件

require './ThinkPHP/ThinkPHP.php';



