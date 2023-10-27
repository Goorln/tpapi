<?php

namespace app\controller;

class Error extends Base
{
  public function index()
  {
    return $this->create([], '资源不存在', 404);
  }
}
