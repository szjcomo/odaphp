<?php
/**
 * |-----------------------------------------------------------------------------------
 * @Copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.
 * @Website: www.sizhijie.com
 * @Version: 思智捷信息科技有限公司
 * @Author : szjcomo 
 * |-----------------------------------------------------------------------------------
 */

namespace app\controllers\Admin;


/**
 * 不需要视图的继承
 */
class Index extends \szjcomo\szjcore\Controller
{

	public function index()
	{
		return $this->appJson($this->appResult('SUCCESS'));
	}

}