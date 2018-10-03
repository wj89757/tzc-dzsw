<?php
return array(
	//'配置项'=>'配置值'
	//mysql全局定义
	
	//SAE下固定mysql配置
    'DB_TYPE'           =>  'mysql',     // 数据库类型
    'DB_HOST'           =>  'localhost', // 服务器地址
    'DB_NAME'           =>  'think_dzsw',        // 数据库名
    'DB_USER'           =>  'root',    // 用户名
    'DB_PWD'            =>  '',         // 密码
    'DB_PORT'           =>  '3306',        // 端口
    'DB_PREFIX'         =>  'think_',          // 数据库表前缀

    'URL_MODEL'=>2,
    'SHOW_PAGE_TRACE'       =>  true,              // 调式工具 
	'DEFAULT_V_LAYER'       =>  'View',            // 修改视图目录 
	'LAYOUT_ON'             => true,
	'LAYOUT_NAME'           => 'Public/layout',
	'MODULE_ALLOW_LIST'     => array('Home','Admin'),//设置可访问模块
	'URL_ROUTER_ON'         => true, 
	'URL_CASE_INSENSITIVE' =>true,//区分大小写
	'DEFAULT_FILTER' =>'htmlspecialchars',
);