<?php
/**
 * |-----------------------------------------------------------------------------------
 * @Copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.
 * @Website: www.sizhijie.com
 * @Version: 思智捷信息科技有限公司
 * @Author : szjcomo 
 * |-----------------------------------------------------------------------------------
 */

namespace EasySwoole\EasySwoole;

use EasySwoole\EasySwoole\Swoole\EventRegister;
use EasySwoole\EasySwoole\AbstractInterface\Event;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use EasySwoole\Component\Di;

class EasySwooleEvent implements Event
{

    public static function initialize()
    {
        date_default_timezone_set('Asia/Shanghai');
        \szjcomo\szjcore\register\Register::initialize_register();
        //http控制器对象池最大数量
        Di::getInstance()->set(SysConst::ERROR_HANDLER,function($errorCode, $description, $file = null, $line = null){
            echo $description.PHP_EOL;
        });
    }

    public static function mainServerCreate(EventRegister $register)
    {
        \szjcomo\szjcore\register\Register::server_create_register(null,$register);
    }

    public static function onRequest(Request $request, Response $response): bool
    {
        \szjcomo\szjcore\register\AppCross::register($response);
        return \szjcomo\szjcore\register\AppIplimit::register(false,$request);
    }

    public static function afterRequest(Request $request, Response $response): void
    {
    }
}