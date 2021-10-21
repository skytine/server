<?php
use think\facade\Route;

Route::group(function(){
    // 用户类
    Route::group('user', function(){

    });

    // 账号类
    Route::group('account', function(){
        Route::rule('send$', 'account.Send/index');
        Route::rule('login$', 'account.Login/index');
        Route::rule('logout$', 'account.Logout/index');
    });

    Route::rule('verify$', 'Verify/index');
    Route::rule('home$', 'Home/index');
    Route::rule('/$', 'Index/index');
})->allowCrossDomain([
    'Access-Control-Allow-Credentials' => 'true',
    'Access-Control-Allow-Headers' => '*',
    'Access-Control-Allow-Methods' => '*',
    'Access-Control-Allow-Origin' => '*'
]);
