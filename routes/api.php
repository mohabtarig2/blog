<?php

use App\Bookable;
use App\Villa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('bookables','Api\BookableController')->only('index','show');
//Route::apiResource('Ads','Api\AdsController')->only('index','show');
Route::get('Ads', function()
{
    return Villa::All()->where('confirmed',1)->where('c_id',1);
});
//Route::post('/login','UserController@index');
Route::post('Ads/new', 'Api\AdsController@store');
Route::post('Ads/NewVillaCoast', 'Api\VillaCoastContoller@store');
Route::get('Ads/{id}', 'Api\AdsController@delete');






Route::get('bookables/{bookable}/availabilty','Api\BookableAviailabilityController')->name('bookables.availability.show');

