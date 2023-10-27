<?php

declare(strict_types=1);

namespace app\model;

use think\Model;

class User extends Model
{
    public function hobby()
    {
        return $this->hasMany(Hobby::class, 'user_id', 'id');
    }
}
