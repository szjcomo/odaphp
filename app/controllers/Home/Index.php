<?php
/**
 * |-----------------------------------------------------------------------------------
 * @Copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.
 * @Website: www.sizhijie.com
 * @Version: 思智捷信息科技有限公司
 * @Author : szjcomo 
 * |-----------------------------------------------------------------------------------
 */

namespace app\controllers\Home;

use app\controllers\Home            as HomeController;
use szjcomo\szjcore\Cache           as AppCache;

/**
 * 需要视图的继承关系
 */
class Index extends HomeController
{

    public function index()
    {
        $result = AppCache::get('admin_user');
        if(empty($result)){          
           $result = \szjcomo\szjcore\Mysql::name('admin_user')->select();
           AppCache::set('admin_user',$result);
        }
        //$this->assign('userlist',$result);
        //return $this->fetch('index');
        return $this->appJson($this->appResult('SUCCESS',$result,false,0));
    }
    /**
     * [upload 上传测试]
     * @author        szjcomo
     * @createTime 2019-11-13
     * @return     [type]     [description]
     */
    public function upload(){
        $data = $this->context->uploads(null,['fileType'=>['image/bmp']]);
        return $this->appJson($this->appResult('SUCCESS',$data,false));
    }
}