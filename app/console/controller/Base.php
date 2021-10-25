<?php

namespace app\console\controller;

use think\Request;

abstract class Base
{
    use Jump;

    protected $noNeedLogin = []; // 不需要登陆也不需要鉴权
    protected $noNeedAuth = []; // 不需要鉴权但需要登陆

    protected $application = [];

    public function __construct()
    {
        $this->initialize();
    }

    protected function initialize()
    {
        $this->application = [];
    }
}
