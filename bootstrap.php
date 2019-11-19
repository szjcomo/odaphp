<?php
/**
 * |-----------------------------------------------------------------------------------
 * @Copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.
 * @Website: www.sizhijie.com
 * @Version: 思智捷信息科技有限公司
 * @Author : szjcomo 
 * |-----------------------------------------------------------------------------------
 */

if(class_exists('\szjcomo\odaHelp\Szjkj')){
	\EasySwoole\EasySwoole\Command\CommandContainer::getInstance()->set(new \szjcomo\odaHelp\Szjkj());	
}