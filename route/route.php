<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

Route::get('login', 'admin/Login/index');

Route::get('', 'admin/Index/index');
Route::get('day', 'admin/Index/day');
Route::get('week', 'admin/Index/week');
Route::get('month', 'admin/Index/month');
Route::get('source', 'admin/Index/source');

Route::get('users', 'admin/Users/manage');

Route::get('user/:id', 'admin/Users/one');
Route::post('admin/login/check', 'admin/Login/check');

return [
];
