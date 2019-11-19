<?php
/**
 * |-----------------------------------------------------------------------------------
 * @Copyright (c) 2014-2018, http://www.sizhijie.com. All Rights Reserved.
 * @Website: www.sizhijie.com
 * @Version: 思智捷信息科技有限公司
 * @Author : szjcomo 
 * |-----------------------------------------------------------------------------------
 */

include "./vendor/autoload.php";

/**
 * 数据包 pack处理
 * encode
 * @param $str
 * @return string
 * @author Tioncico
 * Time: 9:50
 */
function encode($str)
{
    return pack('N', strlen($str)) . $str;
}
function decode($str)
{
    $data = substr($str, '4');
    return $data;
}
go(function(){
    $client = new \Swoole\Client(SWOOLE_SOCK_TCP);
    $client->set(
        [
            'open_length_check'     => true,
            'package_max_length'    => 81920,
            'package_length_type'   => 'N',
            'package_length_offset' => 0,
            'package_body_offset'   => 4,
        ]
    );
    if (!$client->connect('127.0.0.1', 9504, 0.5)) {
        exit("connect failed. Error: {$client->errCode}\n");
    }
    $data = [
        'controller' => 'Index',
        'action'     => 'index',
        'content'    => [
            'name' => '仙士可'
        ],
    ];
    $str = json_encode($data);
    var_dump($str);
    $client->send(encode($str));
    $data = $client->recv();//服务器已经做了pack处理
    $data = decode($data);//需要自己剪切解析数据
    echo "服务端回复: $data \n";

    sleep(10);
});