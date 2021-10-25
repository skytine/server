<?php

namespace app\client\controller\account;

use app\client\controller\Base;
use app\client\model\Accounts;
use think\facade\Validate;
use think\Request;

class Login extends Base
{
    protected $noNeedLogin = ['index'];
    protected $noNeedAuth = [];

    public function index(Request $request)
    {
        $Accounts = new Accounts();
        $Sms = new Sms();

        $phone = $request->param('phone');
        $code = $request->param('code');

        $phone = '+86-' . $phone;

        if (!Validate::rule($phone, 'must')) {
            $this->result('', 1, lang('fail'), 'json');
        }

        if (!Validate::rule($code, 'must')) {
            $this->result('', 1, lang('fail'), 'json');
        }

        if (!$Sms->check($phone,$code)) {
            $this->result('', 1, lang('fail'), 'json');
        }

        $where[] = ['phone', '=', $phone];

        $account = $Accounts->where($where)->find();

        if(!$account){

        }

        $this->result('', 0, lang('success'), 'json');
    }
}