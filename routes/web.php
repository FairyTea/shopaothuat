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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex',
]);

Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp',
]);

Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChiTiet',
]);

Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=>'PageController@getGioiThieu',
]);

Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=>'PageController@getLienHe',
]);

Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart',
]);

Route::get('del-cart/{id}',[
	'as' => 'xoagiohang',
	'uses' => 'PageController@getDelItemCart',
]);

Route::get('dathang',[
	'as' => 'dathang',
	'uses' => 'PageController@getCheckOut',
]);

Route::post('dathang',[
	'as' => 'dathang',
	'use' =>'PageController@postCheckOut',
]);

Route::get('dang-ki',[
	'as' => 'signin',
	'uses' => 'PageController@getSignin',
]);

Route::post('dang-ki',[
	'as' => 'signin',
	'uses' => 'PageController@postSignin',
]);

Route::get('dang-nhap',[
	'as' => 'login',
	'uses' => 'PageController@getLogin',
]);

Route::get('dang-xuat',[
	'as' => 'logout',
	'uses' => 'PageController@getLogout',
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
