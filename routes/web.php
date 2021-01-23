<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Container\Container;
use Laravel\Ui\Presets\Vue;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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
Auth::routes();

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function () {
    return view('index');
});

Route::get('sign/{any?}', function () {
    return view('test');
})->where('any', '^(?!api\/)[\/\w\.-]*')->name('auth.login');



//Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware("verified");

//Route::view('/','index');

Route::view('landing','landing');

Route::view('business-board','business-board');
Route::view('account','account');

Route::view('add-offer','add-offer');
Route::view('villa','villa');

Route::view('villas','villas');

Route::view('profile-company','profile-company');


Route::view('review','review');


Route::view('b-dashboard','b-dashboard');


Route::get('/dashboard',function(){
    return 'not adult';
})->name('not.adult');
Route::view('password','password');

Route::post('/upload','UploadController@handle');


Route::get("/redirect/{service}","SocialController@redirct");
Route::get("/callback/{service}","SocialController@redirct");

Route::get('/home', 'HomeController@index')->name('home');

Route::get('fillable', 'CurdController@getOffers');

Route::get('bussines',function(){
    return view('bussines');
});


Route::post('rigesterBusiness','CurdController@rigesterBusiness')->name('rigesterBusiness');





    Route::group(['prefix' => 'offers'], function () {
    Route::get('create','CurdController@create');

    Route::post('store','CurdController@store') -> name('offers.store');


    Route::get('edit/{offer_id}','CurdController@editOffer');

    Route::post('update/{offer_id}','CurdController@UpdateOffer') -> name('offers.update');
    Route::get('delete/{offer_id}','CurdController@delete') -> name('offers.delete');

    Route::get('all','CurdController@getAllOffer')->name('offers.All');
});

Route::group(['namespace' => 'Auth','middleware' => 'checkAge'], function () {
    Route::get('adualt','CustomController@adualt')->name('adualt');
    });

    Route::get('/profile', 'HomeController@profile')->name('profile');
    //Route::resource('userprofile', 'UserprofileController');

    Route::group(['namespace' => 'Auth'], function () {
        Route::get('site','CustomController@site')->name('site');
        Route::get('admin','CustomController@admin')->name('admin')->middleware('auth:admin');
        Route::get('admin/login','CustomController@adminLogin')->name('admin.login');
        Route::post('admin/login','CustomController@checkAdminLogin')->name('save.admin.login');
        });

        Route::group(['namespace' => 'Auth'], function () {

            Route::get('bussinessLogin','CompnayController@bussinessLogin')->name('bussines.login');
            Route::post('bussinessLogin/login','CustomController@checkBussinessLogin')->name('save.bussines.login');
        });


Route::get('youtube','CurdController@getVideo');


Route::group(['prefix' => 'ajax-offer'], function () {
    Route::get('create','OfferController@create');
    Route::post('store','OfferController@store')->name('ajax.offer.store');
});

Route::get('has-one','relation\RealatioController@hasOne');
Route::get('has-one-reverse','relation\RealatioController@has_One');
Route::get('has-user-has-phone','relation\RealatioController@getUserHasPhone');
Route::get('has-user-no-has-phone','relation\RealatioController@getUserNoHasPhone');
Route::get('get-user-phone-condition','relation\RealatioController@getUserWhereHasPhoneWithCondition');

Route::get('hospital-has-many','relation\RealatioController@getHopitalDoctors');
Route::get('hospitals', 'relation\RealatioController@hospitals');
Route::get('doctors/{hospital_id}', 'relation\RealatioController@doctors');
Route::get('has-doctor', 'relation\RealatioController@HospitalsHasDoctors');
Route::get('has-male-doctor', 'relation\RealatioController@HospitalsHaMaleDoctors');
Route::get('HospitalsNoHasDoctors', 'relation\RealatioController@HospitalsNoHasDoctors');
Route::get('hospitals/{hospital_id}', 'relation\RealatioController@DeleteHospital')->name('hospital.delete');

Route::get('doctors-services', 'relation\RealatioController@getDoctorService');
Route::get('doctors/services/{doctor_id}', 'relation\RealatioController@getDoctorServicesById')->name('doctor.service');
Route::post('saveServices-to-doctor', 'relation\RealatioController@SaveServicesToDoctor')->name('save.doctor.service');


Route::get('service-doctor', 'relation\RealatioController@getServiceDoctor');

Route::get('test1',function(){
return view('test1');
});









////auth
