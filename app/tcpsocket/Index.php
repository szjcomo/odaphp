<?php
/**
 * |-----------------------------------------------------------------------------------
 * @Copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.
 * @Website: www.sizhijie.com
 * @Version: 思智捷信息科技有限公司
 * @Author : szjcomo 
 * |-----------------------------------------------------------------------------------
 */

namespace app\tcpsocket;

use szjcomo\szjcore\SocketController 			as AppSocketController;

/**
 * 项目首页
 */
class Index extends AppSocketController
{
	/**
	 * [index 首页参数]
	 * @author 	   szjcomo
	 * @createTime 2019-11-15
	 * @return     [type]     [description]
	 */
	public function index()
	{
		$data = $this->param();
		$this->push($data,false,'tcp');
		return $this->appJson($this->appResult('hello world',$data));
	}
}