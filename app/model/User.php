<?php

declare(strict_types=1);

namespace app\model;

use think\Model;
use think\Request;

/**
 * @mixin \think\Model
 */
class User extends Model
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
    }
}
