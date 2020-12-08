<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Container\Container;


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


auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware("verified");

Route::view('/','index');
Route::view('landing','landing');
Route::view('bussines','bussines');
Route::view('business-board','business-board');
Route::view('account','account');

Route::view('add-offer','add-offer');
Route::view('villa','villa');

Route::view('villas','villas');

Route::view('profile-company','profile-company');


Route::view('review','review');


Route::view('b-dashboard','b-dashboard');


Route::get('/dashboard',function(){
    return 'dashboard';
});
Route::view('password','password');


Route::get("/redirect/{service}","SocialController@redirct");
Route::get("/callback/{service}","SocialController@redirct");

Route::get('/home', 'HomeController@index')->name('home');
