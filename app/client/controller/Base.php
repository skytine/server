<?php

namespace app\client\controller;

use think\Request;

abstract class Base
{
    use Jump;

    protected $noNeedLogin = []; // 不需要登陆也不需要鉴权
    protected $noNeedAuth = []; // 不需要鉴权但需要登陆

    public function __construct()
    {
        //var_dump($this->noNeedAuth);
        //var_dump($this->noNeedLogin);
    }
}
