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

Route::get('/', function () {
    return view('welcome');
});

//遍历模块下所有文章
Route::get('tag/{id}', 'ArticleController@tag');
//显示特定文章
Route::get('article/{id}', 'ArticleController@article');

Route::get('project','ProjectController@index');