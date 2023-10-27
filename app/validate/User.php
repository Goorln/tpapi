<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: Goorln
 * @Date: 2023-10-27 11:46:51
 * @LastEditors: Goorln
 * @LastEditTime: 2023-10-27 14:03:35
 */

declare(strict_types=1);

namespace app\validate;

use think\Validate;

class User extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名' =>  ['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule = [
        'username|用户名' => 'require|chsDash|unique:user',
        'password|密码' => 'require|min:6',
        'email|邮箱' => 'require|email|unique:user'
    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名' =>  '错误信息'
     *
     * @var array
     */
    protected $message = [];

    // 验证场景
    protected $scene = [
        'edit' => ['email']
    ];
}
