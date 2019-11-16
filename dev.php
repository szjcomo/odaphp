<?php
return [
    'SERVER_NAME' => "SZJSERVER",
    'MAIN_SERVER' => [
        'LISTEN_ADDRESS' => '0.0.0.0',
        'PORT' => 9503,
        //'SERVER_TYPE' => EASYSWOOLE_WEB_SERVER, //可选为 EASYSWOOLE_SERVER  EASYSWOOLE_WEB_SERVER EASYSWOOLE_WEB_SOCKET_SERVER,EASYSWOOLE_REDIS_SERVER
        'SERVER_TYPE' => EASYSWOOLE_WEB_SERVER, //可选为 EASYSWOOLE_SERVER  EASYSWOOLE_WEB_SERVER EASYSWOOLE_WEB_SOCKET_SERVER,EASYSWOOLE_REDIS_SERVER
        'SOCK_TYPE' => SWOOLE_TCP,
        'RUN_MODEL' => SWOOLE_PROCESS,
        'SETTING' => [
            /**
             * 设置启动的Worker进程数
             */
            'worker_num'                    => 8,
            /**
             * 设置异步重启开关。设置为true时，将启用异步安全重启特性，Worker进程会等待异步事件完成后再退出。
             */
            'reload_async'                  => true,
            /**
             * Worker进程收到停止服务通知后最大等待时间，默认为3秒
             */
            'max_wait_time'                 => 3,
            /**
             * 上传文件的临时目录
             */
            'upload_tmp_dir'                => EASYSWOOLE_ROOT.'/runtime/upload_tmp_dir',
            /**
             * 配置静态目录
             */
            'document_root'                 => EASYSWOOLE_ROOT.'/public',
            /**
             * 要实现静态文件处理必须为true
             */
            'enable_static_handler'         => true,
            /**
             * 设置最大数据包尺寸，单位为字节
             */
            'package_max_length'            => 2 * 1024 * 1024
        ],
        'TASK'=>[
            /**
             * 配置Task进程的数量，配置此参数后将会启用task功能
             */
            'workerNum'=>4,
            /**
             * 最大投递任务数
             */
            'maxRunningNum'=>128,
            /**
             * 任务超时时间控制
             */
            'timeout'=>15
        ]
    ],
    'TEMP_DIR' => EASYSWOOLE_ROOT .'/runtime/temp/',
    'LOG_DIR' => EASYSWOOLE_ROOT .'/runtime/logs/'
];
