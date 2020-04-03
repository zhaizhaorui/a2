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
use think\Route;
Route::get('api/:version/users','api/:version.User/getUsers');
Route::get('api/:version/user/:id','api/:version.User/getUser');
Route::post('api/:version/account','api/:version.User/createAccount');
Route::put('api/:version/account','api/:version.User/updateAccount');
Route::delete('api/:version/account/:id','api/:version.User/deleteAccount');



