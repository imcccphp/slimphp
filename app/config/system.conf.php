<?php
return
    [
    // 系统
    'sys' => [
        'timezone' => 'Asia/Shanghai', //时区
        'charset' => 'utf-8', //编码
        'local' => 'zh', //语言
        'prefix' => 'na_', //前坠修饰符
    ],
    'env' => 'RUN_ENV',
    //安全相关，哪果call了未知或不存在的action ,执行下面的定义
    'safe' => [
        'unknown' => [
            "redirect" => false, //转向
            "url" => "/404.html", //地址
        ],
    ],
    // 调试模式
    'debug' => [
        'report' => false, //是否显示错误信息开关
    ],
    // 驱动
    'driver' => [
        'cache' => 'redis', // redis memcached file
        'storage' => 'cookie', // cookie session storage
        'sql' => 'mysql', // mysql mssql mongodb
    ],

];
