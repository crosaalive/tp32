<?php
	return array(
	'DB_TYPE'             =>  'mysql',     // 数据库类型
	'DB_HOST'             =>  'localhost', // 服务器地址
	'DB_NAME'             =>  'tp5',          // 数据库名
	'DB_USER'             =>  'root',      // 用户名
	'DB_PWD'              =>  'cookie',          // 密码
	'DB_PORT'             =>  '3306',        // 端口
	'SHOW_PAGE_TRACE' 	  =>  true, 
	'DB_PREFIX'           =>  'z_',    // 数据库表前缀
	// 'DB_DEBUG'            =>  false, // 数据库调试模式 开启后可以记录SQL日志
	'DB_LITE'             =>  false,    // 使用数据库Lite模式
	'DB_FIELDS_CACHE'     =>  false,        // 启用字段缓存
	'DB_CHARSET'          =>  'utf8',      // 数据库编码默认采用utf8
	'TMPL_L_DELIM'        =>  '<{',
	'TMPL_R_DELIM'        =>  '}>',
	// "DEFAULT_AJAX_RETURN" =>  'JSON', //AJAX 数据返回格式 JSON XML …
	"DEFAULT_CHARSET"     =>  'utf-8', //默认页面输出编码
	'MODULE_ALLOW_LIST'  => array('Admin','Home','Index'),
	// 'TMPL_TEMPLATE_SUFFIX'  =>  '.html',   
	'DEFAULT_MODULE'        =>  'Admin',  // 默认模块
	// 'LAYOUT_ON'           =>  true,   //开启模板布局     默认是关闭状态 详见ThinkPHP手册的"模板"
	// 'LAYOUT_NAME'         =>  'Common/layout',

	'DB_PATH_NAME'=> 'db',        //备份目录名称,主要是为了创建备份目录；
	'DB_PATH'     => './db/',     //数据库备份路径必须以 / 结尾；
	'DB_PART'     => '20971520',  //该值用于限制压缩后的分卷最大长度。单位：B；建议设置20M
	'DB_COMPRESS' => '0',         //压缩备份文件需要PHP环境支持gzopen,gzwrite函数        0:不压缩 1:启用压缩
	'DB_LEVEL'    => '9',         //压缩级别   1:普通   4:一般   9:最高
);