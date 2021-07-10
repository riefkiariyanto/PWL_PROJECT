<?php

use Illuminate\Support\Facades\Route;

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

Route::get('admin-page', function() {
    return redirect('/add_product');
})->middleware('role:admin')->name('admin.page');

Route::get('user-page', function() {
    return redirect('/main');
})->middleware('role:user')->name('user.page');
Route::get('/', 'BaseController@index');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/main', 'BaseController@main');
Route::get('/order', 'BaseController@list_order');
Route::get('/service', 'BaseController@service');
Route::get('/order_service', 'BaseController@form_service');
Route::post('/input_order_service', 'BaseController@input_order');
Route::get('/add_product', 'BaseController@form_product');
Route::post('/input_product', 'BaseController@store');
Route::get('/list', 'BaseController@admin_order');
Route::get('/detail', 'BaseController@detail');
Route::get('/delete', 'BaseController@delete');
Route::get('/buy_sparepart', 'BaseController@sparepart');
Route::post('/input_sparepart', 'BaseController@buy_sparepart');
Route::get('/buying', 'BaseController@buying');
Route::get('/details', 'BaseController@details');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
