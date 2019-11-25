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
	 * 配置session 无锁session 文件驱动session 理论是回收的概率值为1/100 很有可能不回收
	 */
	'SESSION'=>[
		/**
		 * 保存路径
		 */
		'savePath' => EASYSWOOLE_ROOT.'/session',
		/**
		 * session前缀
		 */
		'sessionName'=>'SZJKJSESSION',
		/**
		 * session过期时间 单位秒
		 */
		'gcMaxLifetime'=>1440,
		/**
		 * session 回收概率
		 */
		'gcProbability'=>1,
		/**
		 * session 处理程序
		 */
		'sessionHandler'=>'\EasySwoole\Session\FileSessionHandler'
	]
];