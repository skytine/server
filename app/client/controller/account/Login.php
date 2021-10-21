<?php
namespace app\client\controller\account;

use app\client\controller\Base;

class Login extends Base
{
    protected $noNeedLogin = ['index'];
    protected $noNeedAuth = [];

    public function index()
    {
        return 'client/account/index';
    }
}