<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tour/data','TourController@getAllData')->name('tour.data');
Route::get('/tour/{id}/itenerary','TourController@getItenerary')->name('tour.itenerary');
Route::post('/tour/{id}/itenerary','TourController@storeItenerary')->name('tour.itenerary.store');
Route::get('/tour/{id}/include','TourController@getInclude')->name('tour.include');
Route::post('/tour/{id}/include','TourController@storeInclude')->name('tour.include.store');
Route::get('/tour/{id}/image','TourController@getImages')->name('tour.image');
Route::post('/tour/{id}/image','TourController@storeImage')->name('tour.image.store');

Route::resource('/tour','TourController');

Route::get('/clothing/data','ClothingController@getAllData')->name('kaos.data');

Route::resource('/clothing','ClothingController');
Route::resource('/gallery','GalleryController');

// data master
Route::group(['prefix'=>'master'], function(){

});



// data master
