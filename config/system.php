<?php
/**
 * |-----------------------------------------------------------------------------------
 * @Copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.
 * @Website: www.sizhijie.com
 * @Version: 思智捷信息科技有限公司
 * @Author : szjcomo 
 * |-----------------------------------------------------------------------------------
 */

return [
	/*============================HTTP服务器配置项======================*/
	/**
	 * 项目命名空间
	 */
	'APP_HTTP_NAMESPACE'			=> 'app\\controllers\\',
	/**
	 * 每个控制器注册最大的链接数
	 */
	'HTTP_CONTROLLER_POOL_MAX_NUM' 	=> 600,
	/**
	 * 是否开启跨域处理请求
	 */
	'APP_CROSS_DOMAIN'				=> false,
	/**
	 * 是否开启IP限流策略
	 */
	'APP_IPLIMIT_OPEN' 				=> true,
	/**
	 * 开启IP限流时每秒最大请求次数
	 */
	'APP_IPLIMIT_MAX_NUMBER' 		=> 50,
	/**
	 * 只有在继承了Views.php控制器才有效
	 */
	'APP_TEMPLATE_CONFIG' 			=> [
		/**
		 * 模版文件路径
		 */
		'view_path'					=> EASYSWOOLE_ROOT . '/views/',
		/**
		 * 是否开启模板编译缓存,设为false则每次都会重新编译 开发阶段建议false
		 */
		'tpl_cache'					=> false,
		/**
		 * 模版编译后缓存目录
		 */
		'cache_path'				=> EASYSWOOLE_ROOT . '/runtime/view_cache/',
		/**
		 * 更多需要的配置请自行添加
		 */
	],
	/*============================公共服务器配置项======================*/
	/**
	 * 产品上线后错误信息提示, 如果为false 直接程序抛出JSON格式异常详细数据 如果为字符串 或其它 那么直接抛出自定义的格式
	 */
	'APP_PRODUCE_ERROR_MESSAGE' 	=> ' ~ 页面重试,请稍候重试',

	/******************热重载配置项************/
	/**
	 * 是否开启热重载 在项目开发时建议开启
	 */
	'APP_HOT_RELOAD_START'			=> true,
	/**
	 * 热重载配置项  只有在开启热重载时才有用
	 */
	'APP_HOT_RELOAD_CONFIG' 		=> [
		//是否禁用inotity扩展 （如果没有安扩展 建议为true  如果安装了扩展 建议为false）
		'disableInotify'			=> true,
		//需要监控的目录
		'monitorDir' 				=> EASYSWOOLE_ROOT . '/app',
		//需要监控的后缀
		'monitorExt' 				=> ['php']
	],

	/******************内置缓存配置项************/
	/**
	 * 是否开启内置缓存
	 */
	'APP_FAST_CACHE_OPEN'			=> true,
	/**
	 * 内置缓存配置项
	 */
	'APP_FAST_CACHE_CONFIG'			=> [
		/**
		 * 设置内置缓存目录
		 */
		'WRITE_CACHE_PATH' 			=> EASYSWOOLE_ROOT.'/runtime/cache/',
		/**
		 * 数据写入频率 默认每间隔5秒检查写入一次 
		 */
		'WRITE_TIME_RACE'			=> 5
	],
	/******************注册管理器配置项************/
	/**
	 * 项目初始化注册器
	 */
	'APP_INITIALIZE_REGISTER' 		=> [
		/**
		 * 自定义常量设置注册器
		 */
		'\szjcomo\szjcore\register\AppExtend',
		/**
		 * mysql 注册器
		 */
		'\szjcomo\szjcore\register\AppMysql',
		/**
		 * redis 注册器
		 */
		'\szjcomo\szjcore\register\AppRedis'
	],
	/**
	 * 服务创建时注册器
	 */
	'APP_SERVER_CREATE_REGISTER' 	=> [
		/**
		 * 内置轻量级缓存注册器
		 */
		'\szjcomo\szjcore\register\AppFastCache',
		/**
		 * 开发时热重载注册器
		 */
		'\szjcomo\szjcore\register\AppHotload',
		/**
		 * IP限制控制注册器,如果需要参数，第一个为注册器所在命名空间,第二个参数
		 */
		['\szjcomo\szjcore\register\AppIplimit',true],
		/**
		 * 注册websocket服务
		 */
		//['\app\register\WebSocket','register'],
		/**
		 * Tcp服务器注册
		 */
		//'\app\register\TcpSocket'
	],
	/*=========WEBSOCKET服务器配置项,须配置注册器与环境一起使用才有效========*/
	/**
	 * websocket 服务器注册命名空间
	 */
	'APP_WEBSOCKET_NAMESPACE' 		=> 'app\\websocket\\',
	/**
	 * websocket 消息的解析器类 须实现decode和encode
	 */
	'APP_WEBSOCKET_MESSAGE_PARSER' 	=> '\szjcomo\szjcore\WebSocketParser',
	/**
	 * websocket 当有新客户端连接上来的回调类 必须实现connect 函数才能调用
	 */
	'APP_WEBSOCKET_ON_CONNECT'		=> '\app\websocket\Index',
	/**
	 * websocket 当客户端断开连接时回调类 必须实现close 函数才能调用
	 */
	'APP_WEBSOCKET_ON_CLOSE'		=> 'app\websocket\Index',

	/*============================TCP服务器配置项======================*/
	/**
	 * 是否开启tcp服务器
	 */
	'APP_TCPSOCKET_OPEN'			=> false,
	/**
	 * TCP服务器开启端口
	 */
	'APP_TCPSOCKET_PORT'			=> 9504,
	/**
	 * tcpsocket 服务器注册命名空间
	 */
	'APP_TCPSOCKET_NAMESPACE' 		=> 'app\\tcpsocket\\',
	/**
	 * tcpsocket 消息的解析器类 须实现decode和encode
	 */
	'APP_TCPSOCKET_MESSAGE_PARSER' 	=> '\szjcomo\szjcore\TcpSocketParser',
	/**
	 * 当有客户端进行连接时须注册的回调类 回调类必须实现connect方法  参数为false时不进行任何处理
	 */
	'APP_TCPSOCKET_ON_CONNECT' 		=> '\app\tcpsocket\Index',
	/**
	 * 当前客户端断开后注册的回调类 回调类必须实现close方法         参数为false时不进行任何处理
	 */
	'APP_TCPSOCKET_ON_CLOSE' 		=> '\app\tcpsocket\Index'
];