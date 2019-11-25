<?php
/**
 * |-----------------------------------------------------------------------------------
 * @Copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.
 * @Website: www.sizhijie.com
 * @Version: 思智捷信息科技有限公司
 * @Author : szjcomo 
 * |-----------------------------------------------------------------------------------
 */


namespace app\routers\Home;

/**
 * 首页路由
 */
class Index
{
	/**
	 * [register 实现路由注册]
	 * @author 	   szjcomo
	 * @createTime 2019-11-14
	 * @param      [type]     $router [description]
	 * @return     [type]             [description]
	 */
	public static function register($router)
	{
		//首页访问路由
		$router->addRoute('GET','/','/Home/Index/index');
	}

}