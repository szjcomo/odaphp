<?php
/**
 * |-----------------------------------------------------------------------------------
 * @Copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.
 * @Website: www.sizhijie.com
 * @Version: 思智捷信息科技有限公司
 * @Author : szjcomo 
 * |-----------------------------------------------------------------------------------
 */

namespace app\websocket;

use szjcomo\szjcore\SocketController as AppSocketController;

/**
 * websocket 首页控制器
 */
class Index extends AppSocketController
{

	/**
	 * [index 首页访问]
	 * @author 	   szjcomo
	 * @createTime 2019-11-15
	 * @return     [type]     [description]
	 */
	public function index()
	{
		$data = \szjcomo\szjcore\Mysql::name('tags')->select();
		return $this->appJson($this->appResult('SUCCESS',$data,false,0));
	}
}