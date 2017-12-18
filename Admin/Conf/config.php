<?php
return array(
	// 'SHOW_PAGE_TRACE'	  =>  true, 	// 显示页面Trace信息
	'DB_FIELDS_CACHE'       =>  false,        // 启用字段缓存
	// 'HTML_CACHE_ON'       =>  false, 		// 开启静态缓存
	// 'TMPL_CACHE_ON'       =>  false,       // 是否开启模板编译缓存,
	"DEFAULT_CHARSET"     =>  'utf-8', 		//默认页面输出编码
 	'TMPL_DETECT_THEME'     => false,       // 自动侦测模板主题
 	'TMPL_TEMPLATE_SUFFIX'  => '.html',     // 默认模板文件后缀
	'LAYOUT_ON'           =>  true,   //开启模板布局     默认是关闭状态 详见ThinkPHP手册的"模板"
	'LAYOUT_NAME'         =>  '/Layout/layout',//后台模板
	// auth 配置 此配置会覆盖auth类的默认配置
	'AUTH_CONFIG' => array(
	    'AUTH_ON' => true, //认证开关
	    'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
	    'AUTH_GROUP' => 'z_auth_group', //用户组数据表名
	    'AUTH_GROUP_ACCESS' => 'z_auth_group_access', //用户组明细表
	    'AUTH_RULE' => 'z_auth_rule', //权限规则表
	    'AUTH_USER' => 'z_user',//用户信息表,根据自己的填写
	    ),

	'THUMB_CONFIG' => array(
		    'maxSize'    =>    3145728,//图片大小
		    'rootPath'   =>    './Public/thumb/',//保存路径
		    'savePath'   =>    '',
		    'saveName'   =>    array('uniqid',''),
		    'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
		    'autoSub'    =>    true,//子目录保存
		    'subName'    =>    array('date','Ymd'),//子目录保存格式
		),
	//模板字符串解析
	'TMPL_PARSE_STRING'  =>array(
     '__LAYUI__' => __ROOT__.'/Public/layui', // 增加layui路径规则
     '__JQ__' => __ROOT__.'/Public/js', // 增加layui路径规则
)
);