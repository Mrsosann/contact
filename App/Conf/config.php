<?php
return array(
	//'配置项'=>'配置值'
	//开启分组
	'APP_GROUP_LIST' => 'Index,Admin',
	//默认分组
	'DEFAULT_GROUP' => 'Index',
	/* 数据库设置 */
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'cz',        // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => '',          // 密码
    'DB_PREFIX'             => 'cz_',       // 数据库表前缀
    //点语法默认解析
    'TMPL_VAR_IDENTIFY' => 'array',
    //模版路径
    'TMPL_FILE_DEPR' => '_',
);
?>