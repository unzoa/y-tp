<?php

header("content-type:text/html;charset=utf-8");

//输出调试函数
function show_bug($msg){
	echo "<pre style='color:red'>";
	var_dump($msg);
	echo "</pre>";
}
//定义css，img，js路径常量;
define('SITE_URL', '/myHub/thinkphp-ueditor/');
//ueditor
define('U_', SITE_URL.'ueditor/');
//调试模式
define('APP_DEBUG',true);
//引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
?>