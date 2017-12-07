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

Route::get('/', 'PagesController@getIndex');

Route::get('contact', 'PagesController@getContact');

Route::post('contact', 'PagesController@postContact');

Route::get('occasions', 'PagesController@getOccasions');

Route::get('financiering', 'PagesController@getFinanciering');

Route::get('bedrijfswagens', 'PagesController@getBedrijfswagens');

Auth::routes();

Route::get('login', ['as' => 'login', 'uses' => 'PagesController@login']);

Route::post('user/do-login', 'Auth\LoginController@doLogin');


Route::get('user/logout', function(){
  Auth::logout();
  return redirect('/');
});


Route::get('gallery/list', 'GalleryController@viewGalleryList');
Route::post('gallery/save', 'GalleryController@saveGallery');
Route::get('gallery/delete/{id}', 'GalleryController@deleteGallery');
Route::get('gallery/view/{id}', 'GalleryController@viewGalleryPics');
Route::get('photos/{id}', 'PagesController@photo');
Route::post('image/do-upload', 'GalleryController@doImageUpload');
Route::get('albums', 'PagesController@album');
Route::get('autovdweek', 'GalleryController@AutovdWeek');
Route::get('onsteam', 'PagesController@team');
Route::post('autosupload', function() {

  $file = request()->file('auto');

  $file->storeAs('autos/', "autovdweek.jpeg");

  return redirect('/');
});
