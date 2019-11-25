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

use app\validate\Validator 			as AppValidator;
use EasySwoole\Spl\SplBean 	 		as EasySwooleBean;

/**
 * 后台管理员基类控制器
 */
class Admin extends Base
{

	/**
	 * [initialize 可作为权限控制拦截器]
	 * @author 	   szjcomo
	 * @createTime 2019-11-19
	 * @return     [type]     [description]
	 */
	public function initialize()
	{
		return true;
	}
	/**
	 * [getAdminUserId 获取当前管理员ID]
	 * @author 	   szjcomo
	 * @createTime 2019-11-20
	 * @return     [type]     [description]
	 */
	public function getAdminUserId()
	{
		return 1;
	}
	/**
	 * [getParamsId 获取传过来的参数ID]
	 * @author 	   szjcomo
	 * @createTime 2019-11-21
	 * @param      string     $field [description]
	 * @return     [type]            [description]
	 */
	public function getParamsId(string $field = '',string $alertTitle = '',$get = true)
	{
		if(empty($field)) throw new \Exception('请传入需要字段的字段名称');
		if($get) {
			$id = $this->context->get($field,0,'intval');
		} else{
			$id = $this->context->post($field,0,'intval');
		}
		if(empty($id)) throw new \Exception($alertTitle . '不能为空');
		return $id;
	}
	/**
	 * [addValidate 全局通用验证器]
	 * @author 	   szjcomo
	 * @createTime 2019-11-21
	 * @param      EasySwooleBean $model [description]
	 * @param      array          $rules [description]
	 */
	public function addValidate(EasySwooleBean $model,array $rules = [])
	{
		$validate = new AppValidator($rules);
		if(empty($validate->validate($model->toArray()))) {
			throw new \Exception($validate->getError());
		}
		return true;
	}


}