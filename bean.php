<?php
/**
* |-----------------------------------------------------------------------------------
* copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.
* Website: www.sizhijie.com
* Version: 思智捷信息科技有限公司
* author : szjcomo 
* |-----------------------------------------------------------------------------------
*/

namespace app\models;

use EasySwoole\Spl\SplBean 	 as EasySwooleBean;

/**
* class models
* @property	$id            		smallint(5) unsigned
* @property	$username      		varchar(10)
* @property	$password      		char(40)
* @property	$role_id       		tinyint(3) unsigned
* @property	$status        		tinyint(1) unsigned
* @property	$login_count   		smallint(6)
* @property	$user_token    		char(100)
* @property	$login_time    		datetime
* @property	$admin_id      		smallint(6)
* @property	$update_time   		timestamp
* @property	$create_time   		datetime
*/

class models extends EasySwooleBean
{
	protected $id;
	protected $username;
	protected $password;
	protected $role_id;
	protected $status;
	protected $login_count;
	protected $user_token;
	protected $login_time;
	protected $admin_id;
	protected $update_time;
	protected $create_time;

	public function getId() 
	{
		return $this->id;
	}

	public function setId($id) 
	{
		$this->id = $id;
	}

	public function getUsername() 
	{
		return $this->username;
	}

	public function setUsername($username) 
	{
		$this->username = $username;
	}

	public function getPassword() 
	{
		return $this->password;
	}

	public function setPassword($password) 
	{
		$this->password = $password;
	}

	public function getRoleId() 
	{
		return $this->role_id;
	}

	public function setRoleId($role_id) 
	{
		$this->role_id = $role_id;
	}

	public function getStatus() 
	{
		return $this->status;
	}

	public function setStatus($status) 
	{
		$this->status = $status;
	}

	public function getLoginCount() 
	{
		return $this->login_count;
	}

	public function setLoginCount($login_count) 
	{
		$this->login_count = $login_count;
	}

	public function getUserToken() 
	{
		return $this->user_token;
	}

	public function setUserToken($user_token) 
	{
		$this->user_token = $user_token;
	}

	public function getLoginTime() 
	{
		return $this->login_time;
	}

	public function setLoginTime($login_time) 
	{
		$this->login_time = $login_time;
	}

	public function getAdminId() 
	{
		return $this->admin_id;
	}

	public function setAdminId($admin_id) 
	{
		$this->admin_id = $admin_id;
	}

	public function getUpdateTime() 
	{
		return $this->update_time;
	}

	public function setUpdateTime($update_time) 
	{
		$this->update_time = $update_time;
	}

	public function getCreateTime() 
	{
		return $this->create_time;
	}

	public function setCreateTime($create_time) 
	{
		$this->create_time = $create_time;
	}

}
