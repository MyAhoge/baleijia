<?php 
	// 定义应用目录
	define('APP_PATH','./Admin/');
	// 定义运行时目录
	define('RUNTIME_PATH',APP_PATH . 'Runtime/');
	// 开启调试模式
	define('APP_DEBUG',True);
	// 更名框架目录名称，并载入框架入口文件
	require '../ThinkPHP/ThinkPHP.php';
?>