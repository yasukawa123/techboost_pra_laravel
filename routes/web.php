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

// Laravel 09
// prefix = URIのPrefix（接頭辞）をグループ化して設定できるメソッド
// URI = 名前または場所を識別する書き方のルールの総称（親玉）。URLやURNはURIで定められたルールに従って書かれたり使われたりする。
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::get('profile/create', 'Admin\ProfileController@add');    //Laravel 09 課題4:応用
    Route::get('profile/edit', 'Admin\ProfileController@edit');    //Laravel 09 課題4:応用
});

// Laravel 09 課題
Route::get('bbb', 'XXX\AAAController@bbb');