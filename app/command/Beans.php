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
 * 生成一个bean
 */
class Beans
{
	protected $fields = [];
	protected $beanName = 'models';

	/**
	 * [__construct description]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @param      [type]     $fields [description]
	 */
	public function __construct(array $fields = [],$beanName = 'models')
	{
		$this->fields = $fields;
		$this->beanName = $beanName;
	}
	/**
	 * [addBeanFileHead 生成文件头]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 */
	public function addBeanFile()
	{
		$template 	= '';
		$template  .= $this->addBeanFileHeadReamk();
		$template  .= $this->addBeanClassHeadReamk();
		$template  .= $this->addClassNameHead();
		$template  .= $this->addBeanFieldsProperty();
		$template  .= $this->addBeanClassFunction();
		return $template."}"."\r\n";
	}
	/**
	 * [addClassNameHead 创建类的头部信息]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @return     [type]     [description]
	 */
	protected function addClassNameHead()
	{
		$str = 'class '.$this->beanName.' extends EasySwooleBean'."\r\n";
		$str .= "{"."\r\n";
		return $str;
	}
	/**
	 * [addBeanFileHeadReamk 生成头部类说明]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 */
	protected function addBeanClassHeadReamk()
	{
		$str  = '/**'."\r\n";
		$str .= '* class ' . $this->beanName . "\r\n";
		foreach($this->fields as $key=>$val){
			$str .= '* @property'."\t". $val['property']. str_repeat(' ',15 - strlen($val['property'])) . "\t\t" . $val['type'] . "\r\n";
		}
		return $str .'*/'. "\r\n". "\r\n";
	}
	/**
	 * [addBeanFileHeadReamk 生成类文件头部说明]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 */
	protected function addBeanFileHeadReamk()
	{
		$str  = '<?php'."\r\n";
		$str .= '/**'."\r\n";
		$str .= '* |-----------------------------------------------------------------------------------'."\r\n";
		$str .= '* copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.'."\r\n";
		$str .= '* Website: www.sizhijie.com'."\r\n";
		$str .= '* Version: 思智捷信息科技有限公司'."\r\n";
		$str .= '* author : szjcomo '."\r\n";
		$str .= '* |-----------------------------------------------------------------------------------'."\r\n";
		$str .= '*/'."\r\n"."\r\n";
		$str .= 'namespace app\models;'."\r\n"."\r\n";
		$str .= 'use EasySwoole\Spl\SplBean '."\t".' as EasySwooleBean;'."\r\n"."\r\n";
		return $str;
	}
	/**
	 * [addBeanFieldsProperty 生成字段属性]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 */
	protected function addBeanFieldsProperty()
	{
		$str = '';
		foreach($this->fields as $key=>$val){
			$str .= "\t".'protected '.$val['property'].';'."\r\n";
		}
		return $str."\r\n";
	}
	/**
	 * [addBeanClassFunction 给class添加方法]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 */
	protected function addBeanClassFunction()
	{
		$str = '';
		foreach($this->fields as $key=>$val){
			$tmp = explode('_',str_replace('$', '', $val['property']));
			$str .= $this->getFieldHandler($tmp);
			$str .= $this->setFieldHandler($tmp);
		}
		return $str;
	}
	/**
	 * [getFieldHandler 处理类的get方法]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @param      array      $arr [description]
	 * @return     [type]          [description]
	 */
	protected function getFieldHandler(array $arr)
	{
		$getstr = "\t".'public function get';
		foreach($arr as $key=>$val){
			$getstr .= ucwords($val);
		}
		$getstr .= '() '."\r\n"."\t".'{' . "\r\n";
		$getstr .= "\t"."\t".'return $this->'.implode('_', $arr) . ';'. "\r\n";
		$getstr .= "\t".'}' . "\r\n" . "\r\n";
		return $getstr;
	}
	/**
	 * [setFieldHandler 处理类的set方法]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @param      array      $arr [description]
	 */
	protected function setFieldHandler(array $arr)
	{
		$setstr = "\t".'public function set';
		foreach ($arr as $key => $value) {
			$setstr .= ucwords($value);
		}
		$field = implode('_',$arr);
		$setstr .= '($'.$field.') '."\r\n"."\t"."{" . "\r\n";
		$setstr .= "\t"."\t".'$this->'.$field.' = $'.$field.';'."\r\n";
		$setstr .= "\t".'}' . "\r\n" . "\r\n";
		return $setstr;
	}


}