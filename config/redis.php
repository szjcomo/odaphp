<?php
/**
 * |-----------------------------------------------------------------------------------
 * @Copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.
 * @Website: www.sizhijie.com
 * @Version: 思智捷信息科技有限公司
 * @Author : szjcomo 
 * |-----------------------------------------------------------------------------------
 */
/**
 * 项目redis配置
 */
return [
	/**
	 * redis配置项
	 */
	'REDIS'	=> [
		//是否注册redis
		'register_redis'		   => true,	
		//连接池回收时间 这里并不一定是进行垃圾回收 具体信息可查看 easyswoole 官方说明
		'maxIdleTime' 			   => 15,
		//最大创建连接池对象
		'maxObjectNum'			   => 20,
		//最小创建连接池对象
		'minObjectNum'			   => 5,
		//是否集群
		'isClusters'			   => false,
		//具体连接配置项
		'connecConfigs' 		   => [
			/**
			 * 默认配置项
			 */
			'default'=>[
				//连接地址  单例配置
			    'host'=> '127.0.0.1',
			    //连接端口
			    'port'=> 6379,
			    //授权码
			    'auth'=> 'szjcomo',
			    //连接超时时间
			    'timeout'=> 3.0,
			    //重连次数
			    'reconnectTimes'=>3,
			    //选择库 为null是redis自己选择 这里也可以手动设置为0
			    'db'=> 0
			]
		]
	]
];