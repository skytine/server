<?php
namespace app\console\controller;

use app\console\controller\Base;

class Index extends Base
{
    protected $noNeedLogin = ['index'];
    protected $noNeedAuth = [];

    public function index()
    {
        return 'index/Index/index';
    }
}