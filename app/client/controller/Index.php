<?php
namespace app\client\controller;

class Index
{
    protected $noNeedLogin = ['index'];
    protected $noNeedAuth = [];

    public function index()
    {
        return 'client/Index/index';
    }
}