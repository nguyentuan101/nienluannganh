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


Route::group(['prefix'=>'TrT/admin'],function(){
	Route::get('index', function () {
		return view('TrT.admin.index');
	});
	Route::group(['prefix'=>'sanpham'],function(){
		Route::get('hienthi','pagecontroller@gethienthisp');
		Route::get('them','pagecontroller@getthemsp');
		Route::post('them','pagecontroller@postthemsp');		
		Route::get('sua/{id}','pagecontroller@getsuasp');
		Route::post('sua/{id}','pagecontroller@postsuasp');
		Route:: get('xoa/{id}','pagecontroller@getxoasp');
	});
	Route::group(['prefix'=>'nhanvien'],function(){
		Route::get('hienthi','pagecontroller@gethienthinv');
		Route::get('them','pagecontroller@getthemnv');
		Route::post('them','pagecontroller@postthemnv');		
		Route::get('sua/{id}','pagecontroller@getsuanv');
		Route::post('sua/{id}','pagecontroller@postsuanv');
		Route:: get('xoa/{id}','pagecontroller@getxoanv');
		
	});
	Route::group(['prefix'=>'taikhoan'],function(){
		Route::get('hienthi','pagecontroller@gethienthitk');		
		Route::get('sua/{id}','pagecontroller@getsuatk');
		Route::post('sua/{id}','pagecontroller@postsuatk');
		Route:: get('xoa/{id}','pagecontroller@getxoatk');
		Route::get('themtk/{id}','pagecontroller@getthemtk');
		Route::post('themtk','pagecontroller@postthemtk');
		Route::get('hienthitkqt','pagecontroller@gethienthitkqt');
		Route::get('themtkqt','pagecontroller@getthemtkqt');
		Route::post('themtkqt','pagecontroller@postthemtkqt');
		Route:: get('xoatkqt/{id}','pagecontroller@getxoatkqt');
	});
});


Route::group(['prefix'=>'TrT'],function(){
	Route::get('sanpham/{id}','pagecontroller@getcartproduct');
	Route::get('hienthi','user@gethienthisp');	
	Route::get('index','user@getindex');
	Route::get('lienhe','user@getlienhe');
	Route::get('gioithieu','user@getgioithieu');
	Route::get('showcart','pagecontroller@getshowcart');
	
	Route::get('sua/{id}','pagecontroller@getsuatk');
	Route::post('sua/{id}','pagecontroller@postsuatk');
	Route:: get('xoa/{id}','pagecontroller@getxoatk');
	Route::get('themtk/{id}','pagecontroller@getthemtk');
	Route::post('themtk','pagecontroller@postthemtk');
	
	Route::get('hienthitkqt','pagecontroller@gethienthitkqt');
	Route::get('themtkqt','pagecontroller@getthemtkqt');
	Route::post('themtkqt','pagecontroller@postthemtkqt');


	Route::get('dangnhap',function(){
		return view('TrT.user.dangnhap');
	});
	Route::post('dangnhap','pagecontroller@postdangnhap');
//	Route::get('index','pagecontroller@getgiohang');
});

