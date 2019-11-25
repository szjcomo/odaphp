<?php
/**
 * |-----------------------------------------------------------------------------------
 * @Copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.
 * @Website: www.sizhijie.com
 * @Version: 思智捷信息科技有限公司
 * @Author : szjcomo 
 * |-----------------------------------------------------------------------------------
 */

namespace app\controllers;

use szjcomo\szjcore\Router 		as BaseRouter;
use app\routers\Home\Index		as HomeIndexRouter;

/**
 * 路由注册功能
 */
class Router extends BaseRouter
{
	/**
	 * [registerRouter 注册路由]
	 * @author 	   szjcomo
	 * @createTime 2019-11-14
	 * @param      [type]     $router [description]
	 * @return     [type]             [description]
	 */
	public function registerRouter($router)
	{
		//首页路由
		HomeIndexRouter::register($router);
	}

}