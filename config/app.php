<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: Goorln
 * @Date: 2023-10-27 09:30:39
 */
// +----------------------------------------------------------------------
// | 应用设置
// +----------------------------------------------------------------------

return [
    // 应用地址
    'app_host'         => env('app.host', ''),
    // 应用的命名空间
    'app_namespace'    => '',
    // 是否启用路由
    'with_route'       => true,
    // 默认应用
    'default_app'      => 'index',
    // 默认时区
    'default_timezone' => 'Asia/Shanghai',

    // 应用映射（自动多应用模式有效）
    'app_map'          => [
        'think' => 'admin'
    ],
    // 域名绑定（自动多应用模式有效）
    'domain_bind'      => [
        'api' => 'api'
    ],
    // 禁止URL访问的应用列表（自动多应用模式有效）
    'deny_app_list'    => [],

    // 异常页面的模板文件
    // 'exception_tmpl'   => app()->getThinkPath() . 'tpl/think_exception.tpl',
    'exception_tmpl'   => \think\facade\App::getAppPath() . '404.json',

    'http_exception_template'    =>  [
        // 定义404错误的模板文件地址
        404 =>  \think\facade\App::getAppPath() . '404.json',
        // 还可以定义其它的HTTP status
        // 401 =>  \think\facade\App::getAppPath() . '401.html',
    ],

    // 错误显示信息,非调试模式有效
    'error_message'    => '页面错误！请稍后再试～',
    // 显示错误信息
    'show_error_msg'   => true,

    /*******************/

    // 分页条数
    'page_size' => 5
];
