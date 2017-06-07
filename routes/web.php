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

Route::get('testmodel', function(){
	$q = App\Post::all();
	$a = App\Produk::all();
	return $q.$a;
});
Route::get('testmodelproduk', function(){
	$a = App\Produk::all();
	return $a;
});
Route::get('testmodelpengguna', function(){
	$b = App\Pengguna::all();
	return $b;
});
Route::get('testmodelpengaturan', function(){
	$c = App\Pengaturan::all();
	return $c;
});