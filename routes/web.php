<?php

use App\CompanyFile;
use App\CompanyFiles;
use App\models\companies;
use App\User;
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

Route::middleware('auth')->post('test','OfferController@test');
Route::middleware('auth:sanctum')->get('/token', function (Request $request) {
    $id =  $request->user()->id;
    $user = User::find($id);
    $token= $user->createToken('my-app-web');
    return response()->json($token);





});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    $id =  $request->user()->id;



    $user = User::with('roles','company','companyfile','achivementFile')->find($id);
            $user->makeVisible(['user_id']);
            $token= $user->createToken('my-app-web');

            return response()->json($user);

    });

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/getUnreadNotificatons',"UserController@getUnreadNotificatons");
        Route::get('getAllNotificatons',"UserController@getAllNotificatons");
        Route::get('getLastTenNotifications',"UserController@getLastTenNotifications");
        Route::put('NotificatonsMarkAsRead',"UserController@NotificatonsMarkAsRead");


    });

Route::post('/bregister','BRegisterController@bcreate');
Route::get('/partner',function(){
    return view('partner');
})->name('partner');

Route::get('/company/complete',function(Request $request){
    $userid = $request->user()->id;
    return $userid;
    $available = companies::all()->where('user_id', '=', $userid);

    return response()->json($available);
});
Route::get('/company/Files',function(Request $request){

    $available = CompanyFile::all();
    return response()->json($available);
});


Route::post('complete','CompleteContoller@complete');








Route::group(['middleware' => 'admins'], function () {

    Route::get('/consulte', function (Request $request) {
        return view('consulte');
    })->name('consulte');
 });




Route::post('co/login','auth\CompnayController@checkAdminLogin');


Route::get('/', function () {
    return view('index');
});


/*Route::get('home/{any?}', function () {
    return view('test');
})->where('any', '^(?!api\/)[\/\w\.-]*');
*/

//Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home');

//Route::view('/','index');

//constructionController
Route::post('tconstr','constructionController@tender');
Route::get('/AllTenderConsr' ,'constructionController@AllTenderConsr')->middleware('consr');
Route::post('/insertOffer' ,'constructionController@insertOffer')->middleware('consr');
Route::get('showConsrTender/{id}','constructionController@showTenders');
Route::post('UpdateTenderConstruction','constructionController@UpdateTenderConstruction');




Route::view('landing','landing');

Route::view('business-board','business-board');
Route::view('account','account');

Route::view('add-offer','add-offer');
Route::view('villa','villa');

Route::view('villas','villas');

Route::view('profile-company','profile-company');


Route::view('review','review');


Route::view('b-dashboard','b-dashboard');


/*/Route::get('/dashboard',function(){
    return 'not adult';
})->name('not.adult');*/
Route::view('password','password');

Route::post('/upload','UploadController@handle');

Route::post('/licencefile','FUploadController@LicenceUpload');
Route::post('/Achivementfile','FUploadController@AchivementUpload');




Route::post('tenders' ,'TenderController@insert_consl');
Route::get('/AllMyTenders' ,'TenderController@AllMyCtender');

Route::get('/AllTenderConsulte' ,'TenderController@AllTenderConsulte')->middleware('consulte');
Route::get('/CountCtender' ,'TenderController@CountCtender');
Route::get('mytenders/ConslTender/{id}' ,'TenderController@ctender');
Route::get('mytenders/commentTender/{id}' ,'TenderController@commentctender');
Route::get('mytenders/CountcComment/{id}' ,'TenderController@CountcComment');
Route::get('mytenders/MyofferIsset/{id}' ,'TenderController@MyofferIsset');
Route::get('send' ,'TenderController@send');


Route::get('/mytenders/MyOffer/{id}' ,'OfferController@myoffer');


Route::post('/offer_consulte','OfferController@cons_offer');






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






Route::get('test1',function(){
return view('test1');
});



///admin.php


Route::get('countAll','adminController@countAll');
Route::get('admin/detailsTenderConsulte','adminController@detailsTenderConsulte');
Route::get('admin/detailsTenderConsr','adminController@detailsTenderConsr');
Route::get('admin/ConsrTenders/{id}','adminController@ConsrTender');
Route::get('admin/ConslTender/{id}','adminController@ConslTender');
Route::get('admin/accept/{id}','adminController@acceptTender');

////auth

// company Files


Route::get('gatdatacompany','CompnayController@getData');
Route::post('savedatacompany','CompnayController@savedatacompany');



//payment methods

Route::post('paymentOffer','PaymentController@paymentOffer');
