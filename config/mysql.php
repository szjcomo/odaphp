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
	/**
	 * mysql配置文件
	 */
	'MYSQL'=>[
		//是否注册mysql作为默认数据库
		'register_mysql'		   =>true,	
		//连接池回收时间 这里并不一定是进行垃圾回收 具体信息可查看 easyswoole 官方说明
		'maxIdleTime' 			   => 7200,
		//最大创建连接池对象  这是并不是真正的mysql连池数,只是对象的连接数
		'maxObjectNum'			   => 20,
		//最小创建连接池对象  同上一样的道理
		'minObjectNum'			   => 5,
		//数据库连接配置项
		'connecConfigs'			   => [
			/**
			 * 默认连接名配置
			 */
			'default'=>[
				//数据库地址
				'host'                 => '192.168.1.107',
				//数据库端口号
				'port'                 => 3306,
				//数据库用户名
				'user'                 => 'szjkj',
				//数据库密码
				'password'             => 'szjkj2019',
				//数据库名称
				'database'             => 'szjkj',
				//数据库前缀
				'prefix'			   => 'szj_',
				//mysql链接超时时间
				'timeout'              => 10,
				//开启调式模式 会直接输出sql语句在控制台中
				'debug'                => false,
				//设置字符集
				'charset'              => 'utf8',
				//断线重链次数,并不是越大越好 适中为好
				'maxReconnectTimes'	   => 3,
			]
		]
	],
];