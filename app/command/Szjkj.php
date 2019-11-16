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

use EasySwoole\EasySwoole\Command\CommandInterface  as EasySwooleCommandInterface;
use szjcomo\szjcore\Mysql 							as AppMysql;
use app\command\Fields 								as AppFields;
use app\command\Beans 								as AppBeans;

/**
 * 自定义命令的实现
 */
class Szjkj implements EasySwooleCommandInterface
{

	/**
	 * [commandName 命令名称]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @return     [type]     [description]
	 */
	public function commandName():string
	{
		return 'szjkj';
	}
	/**
	 * [exec 执行命令]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @param      array      $args [description]
	 * @return     [type]           [description]
	 */
	public function exec(array $args):?string
	{
		go(function() use (&$args){
			$this->parseCommandArgs($args);
		});
		exit;
		return '';
	}

	/**
	 * [parseCommandArgs 分析命令]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @param      array      $args [description]
	 * @return     [type]           [description]
	 */
	protected function parseCommandArgs(array $args)
	{
		foreach($args as $key=>$val){
			list($command,$param) = explode('=', $val);
			call_user_func([&$this,$command],$param);
		}
	}
	/**
	 * [service 执行service命令参数]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @param      string     $tableName [description]
	 * @return     [type]                [description]
	 */
	protected function service(string $tableName)
	{
		if(empty($tableName)) return '数据表名称不能为空';
		$sql = 'show columns from '.$tableName;
		$result = AppMysql::DB()->rawQuery($sql,[]);
		print_r($result);
		$this->setBeanClass($result);
		echo "\e[32m  service {$tableName} success \e[0m ".PHP_EOL;
	}
	/**
	 * [bean 执行bean命令参数]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @param      string     $tableName [description]
	 * @return     [type]                [description]
	 */
	protected function bean(string $tableName)
	{
		$sql = 'show columns from '.$tableName;
		$result = AppMysql::DB()->rawQuery($sql,[]);
		print_r($result);
		echo "\e[32m  service {$tableName} success \e[0m ".PHP_EOL;
	}

	/**
	 * [setBeanClass 生成model文件]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @param      array      $result [description]
	 */
	protected function setBeanClass(array $result)
	{
		$beanarr = [];
		foreach($result as $key=>$val){
			$fields = new AppFields($val);
			$beanarr[] = $fields->toBeanArray();
		}
		$beanObj = new AppBeans($beanarr);
		$template = $beanObj->addBeanFile();
		file_put_contents('bean.php', $template);
	}
	/**
	 * [help 帮助信息]
	 * @author 	   szjcomo
	 * @createTime 2019-11-16
	 * @param      array      $args [description]
	 * @return     [type]           [description]
	 */
	public function help(array $args):?string
	{
		return <<<HELP_START
\e[33mOperation:\e[0m
\e[31m  php easyswoole szjkj [arg1] [arg2]\e[0m
\e[33mIntro:\e[0m
\e[36m  Quickly generate services and beans required by the project \e[0m
\e[33mArg:\e[0m
\e[32m  service \e[0m              快速生成service数据库操作 示例用法:\e[31mservice=szj_admin(表名称)\e[0m
\e[32m  bean \e[0m                 快速生成数据表结构 示例用法:\e[31mbean=szj_admin(表名称)\e[0m
HELP_START;
	}
}