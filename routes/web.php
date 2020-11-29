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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/','Backend\HomeController@dashboard')->name('dashboard');
Route::get('/home','Backend\HomeController@index');
Route::get('/register','Backend\RegisterController@register')->name('register');
Route::get('/fview','Backend\FormviewController@fview')->name('fview');
Route::post('/store','Backend\StoreController@store')->name('store');

 