<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/','LoginController@funHome')->name('home');
Route::post('login', 'LoginController@funLogin')->name('login');
Route::get('/register', 'LoginController@funRegister')->name('register');
Route::post('regstore', 'LoginController@store')->name('store');