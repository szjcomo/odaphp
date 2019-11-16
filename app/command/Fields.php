<?php
/**
 * |-----------------------------------------------------------------------------------
 * @Copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.
 * @Website: www.sizhijie.com
 * @Version: 思智捷信息科技有限公司
 * @Author : szjcomo 
 * |-----------------------------------------------------------------------------------
 */

namespace app\command;

/**
 * 字段类
 */
class Fields
{

	private $rows = [];

	/**
	 * [__construct 单个字段分析]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @param      array      $rows [description]
	 */
	public function __construct(array $rows)
	{
		$this->rows = $rows;
	}
	/**
	 * [getField 获取字段名称]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @return     [type]     [description]
	 */
	public function getField()
	{
		return $this->rows['Field'];
	}
	/**
	 * [toArray 获取需要bean数组]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @return     [type]     [description]
	 */
	public function toBeanArray()
	{
		$str 		= '';
		$field 		= '$' . $this->rows['Field'];
		$arr = ['property'=>$field,'type'=>$this->getType()];
		return $arr;
	}

	/**
	 * [getType 获取字段类型]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @return     [type]     [description]
	 */
	public function getType()
	{
		return $this->rows['Type'];
	}
	/**
	 * [getNull 字段是否允许为空]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @return     [type]     [description]
	 */
	public function getNull()
	{
		return $this->rows['Null'];
	}
	/**
	 * [getKey 获取字段索引值]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @return     [type]     [description]
	 */
	public function getKey()
	{
		return $this->rows['Key'];
	}
	/**
	 * [getDefault 获取字段默认值]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @return     [type]     [description]
	 */
	public function getDefault()
	{
		$default = $this->rows['Default'];
		if(empty($default)) return '';
		if($default == 'CURRENT_TIMESTAMP') return 0;
		return $default;
	}
	/**
	 * [getExtra 获取字段扩展信息]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @return     [type]     [description]
	 */
	public function getExtra()
	{
		return $this->rows['Extra'];
	}
	/**
	 * [parseType 分析type类型]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @return     [type]     [description]
	 */
	public function parseType()
	{
		$type = $this->getType();
		if(stripos($type,'time')){
			return 0;
		}
		if(stripos($type,'int')){
			return 0;
		}
		if(stripos($type,'char')){
			return '';
		}
		return null;
	}
}
