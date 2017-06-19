<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL'        =>  1,
	'URL_CASE_INSENSITIVE'  =>  false,//不区分大小写
    // 'SHOW_PAGE_TRACE'   => true,

	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'my_db',  // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',      // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    //以下调试模式不作用
    //false 不作用
    //开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      //
);