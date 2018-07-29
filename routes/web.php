<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function (){
    return view('home');
});

Route::get('home', [
    'uses' => 'TestController@home',
    'as' => 'home'
]);

Route::get('about', [
    'uses' => 'TestController@about',
    'as' => 'about'
]);

Route::get('serv1', [
    'uses' => 'TestController@serv1',
    'as' => 'serv1'
]);

Route::get('serv2', [
    'uses' => 'TestController@serv2',
    'as' => 'serv2'
]);

Route::get('serv3', [
    'uses' => 'TestController@serv3',
    'as' => 'serv3'
]);

Route::get('serv4', [
    'uses' => 'TestController@serv4',
    'as' => 'serv4'
]);

Route::get('contact', [
    'uses' => 'TestController@contact',
    'as' => 'contact'
]);

Route::get('portofolio', [
    'uses' => 'TestController@portofolio',
    'as' => 'portofolio'
]);

Route::get('blog', [
    'uses' => 'TestController@blog',
    'as' => 'blog'
]);

//Admin

Route::get('admin', [
    'uses' => 'TestController@login',
    'as' => 'login.admin'
]);

Route::get('reg', [
    'uses' => 'TestController@reg',
    'as' => 'reg.admin'
]);

Route::get('fgtpwd', [
    'uses' => 'TestController@forgot',
    'as' => 'forgot.admin'
]);

Route::get('dasbor', [
    'uses' => 'TestController@dasbor',
    'as' => 'dasbor.admin'
]);

Auth::routes();


