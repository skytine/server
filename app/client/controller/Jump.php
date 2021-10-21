<?php

namespace app\client\controller;

use think\exception\HttpResponseException;
use think\Response;

trait Jump
{
    public function result($data, $code = 1, $msg = '', $type = 'json', $status = 200, $header = [])
    {
        $result = [
            'code' => $code,
            'msg' => $msg,
            'time' => time(),
            'data' => $data,
        ];

        $response = Response::create($type == 'html' ? $data : $result, $type, 200)->header($header);

        throw new HttpResponseException($response);
    }
}