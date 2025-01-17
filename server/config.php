<?php
//配置信息
function info_server($aim): string//后端
{
    $data = [

        //域名
        "domain_main" => "http://edusync.yiyu14.top/",//主域名
        "domain_sub" => "http://edusync.yiyu14.top/",//运行目录

        //代码级权限用户
        "admin_uid" => "xiaoyi",
        "admin_password" => "xiaoyi..",

        //数据库
        "database_servername" => "localhost",
        "database_username" => "edusync",
        "database_password" => "xiaoyi..",
        "database_dbname" => "edusync",

        //输出
        "result_success_get" => "获取成功",
        "result_failure_if_adminUser" => "最高权限用户信息错误",
        "result_success_add_token" => "申请token成功",
        "result_failure_add_token" => "申请token失败",
        "result_failure_read_token" => "读取token失败",
        "result_success_read_token" => "读取token成功",
        "result_failure_upload_device" => "上传设备信息失败",
        "result_success_upload_device" => "上传设备信息成功",
        "result_failure_read_device" => "读取设备信息失败",
        "result_success_read_device" => "读取设备信息成功",
        "result_success_get_command" => "读取指令成功",
        "result_failure_get_command" => "读取指令失败",
        "result_success_create_command" => "创建指令成功",
        "result_failure_create_command" => "创建指令失败",
        "result_success_login_admin_user" => "登录管理员成功",
        "result_failure_login_admin_user" => "登录管理员失败",
        "result_success_read_admin_key" => "读取key成功",
        "result_failure_read_admin_key" => "读取key失败",
    ];
    return $data[$aim];
}
function info_software($aim): string//软件
{
    $data = [

        //系统信息
        "system_codeBook" => "Edusync619!",//密码本

        //token or key
        "user_token_effectiveDuration" => 180,//3 min
        "admin_key_etffectiveDuraion" => 600,//10 min

    ];
    return $data[$aim];
}