<?php
/**
 * |-----------------------------------------------------------------------------------
 * @Copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.
 * @Website: www.sizhijie.com
 * @Version: 思智捷信息科技有限公司
 * @Author : szjcomo 
 * |-----------------------------------------------------------------------------------
 */

namespace app\service;

/**
 * 服务的基类
 */
abstract class Base
{
	/**
	 * [select 获取数据列表]
	 * @author 	   szjcomo
	 * @createTime 2019-11-18
	 * @param      array      $options [description]
	 * @return     [type]              [description]
	 */
	abstract public function select(array $options = []);
	/**
	 * [find 获取数据详情]
	 * @author 	   szjcomo
	 * @createTime 2019-11-18
	 * @param      array      $options [description]
	 * @return     [type]              [description]
	 */
	abstract public function find(array $options = []);
	/**
	 * [appResult 全局统一返回函数]
	 * @author 	   szjcomo
	 * @createTime 2019-11-18
	 * @param      string       $info [description]
	 * @param      [type]       $data [description]
	 * @param      bool|boolean $err  [description]
	 * @param      int|integer  $code [description]
	 * @return     [type]             [description]
	 */
	public function appResult(string $info,$data = null,bool $err = true,int $code = 0)
	{
		return ['info'=>$info,'data'=>$data,'err'=>$err,'code'=>$code];
	}
	/**
	 * [__callStatic 调用静态方法获取实例]
	 * @author 	   szjcomo
	 * @createTime 2019-11-21
	 * @param      [type]     $method [description]
	 * @param      [type]     $args   [description]
	 * @return     [type]             [description]
	 */
	public static function __callStatic($method,$args)
	{
    	switch($method) {
    		case 'getInstance':
    			return self::callGetInstance($args);
    			break;
    	}
        return null;
	}
	/**
	 * [callGetInstance 获取调用的静态实例]
	 * @author 	   szjcomo
	 * @createTime 2019-11-21
	 * @param      [type]     $args [description]
	 * @return     [type]           [description]
	 */
	public static function callGetInstance($args = null)
	{
		if(empty($args)) return new static;
		return new static($args);
	}
}