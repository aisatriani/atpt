<?php

use Illuminate\Http\Request;

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

Route::group(['prefix'=>'v1'], function(){
    Route::post('/login',"LoginRegisterApiController@login");
    Route::post('/register',"LoginRegisterApiController@register");
});


Route::group(['middleware'=>'auth:api','prefix'=>'v1'], function (){
    Route::resource('/user','UserController');
});


Route::group(['prefix'=>'v1'], function(){
    Route::get('tour',"TourController@getAllTour");
    Route::get('clothing',"ClothingController@getAllKaos");

    Route::get('booking/{id}/user',"BookingController@getByUserId");
    Route::resource('booking','BookingController');

    Route::get('user/{id}/contact','UserController@show');
    Route::post('contact','UserController@storeContact');

    Route::resource('bookingkonfirmasi', 'BookingKonfirmasiController');

    Route::get('order/{id}/user','OrderController@getByUserId');
    Route::resource('order','OrderController');

    Route::resource('orderkonfirmasi','OrderKonfirmasiController');

    Route::get('gallery','GalleryController@getGallery');
});

