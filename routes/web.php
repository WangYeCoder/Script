<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// gsx查询

$router->get('/haha', "ChangController@haha");

$router->post('/heihei', "UniversityController@doReserve");

$router->post('/userinfo', "GsxController@receiveuserinfo");

$router->post('/getqrcode', "GsxController@getqrcode");

$router->post('/getorderstatus', "GsxController@getorderstatus");

$router->post('/schedule', "GsxController@searchschedule");

$router->get('/getpush', "GsxController@getpush");

// 云盘雷达

$router->post('/getcookie', "YunPanController@refreshCookie");

$router->post('/refreshcookie', "YunPanController@getCookie");
