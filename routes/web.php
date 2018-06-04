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

Route::get('/', function () {
    return view('welcome');
})->name('/');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users', 'HomeController@getAllUsers')->name('users');

Route::get('myuser_delete/{id}','HomeController@deleteUser')->name('myuser_delete');

Route::get('myuser2_delete/{id}','HomeController@deleteUser2')->name('myuser2_delete');

Route::get('/query', function(){
	return view('query');	
})->name('query');

Route::get('users2', 'HomeController@getAllUsers2')->name('users2');

Route::get('/child', function(){
	return view('child');	
})->name('child');

Route::get('phones','PhoneController@getAllPhones')->name('phones');

Route::get('phone_delete/{id}','PhoneController@deletePhone')->name('phone_delete');

Route::get('/phone_add', function () {
    return view('phone_add');
})->name('phone_add');

Route::post('phone_create','PhoneController@createPhone')->name('phone_create');

Route::get('phone_edit/{id}','PhoneController@editPhone')->name('phone_edit');

Route::post('phone_update/{id}','PhoneController@updatePhone')->name('phone_update');

Route::get('/project', function(){
	return view('project');	
})->name('project');

Route::get('klients','KlientsController@getAllKlients')->name('klients');

Route::get('klient_delete/{id}','KlientsController@deleteKlient')->name('klient_delete');

Route::get('/klient_add', function () {
    return view('klient_add');
})->name('klient_add');

Route::post('klient_create','KlientsController@createKlient')->name('klient_create');

Route::get('klient_edit/{id}','KlientsController@editKlient')->name('klient_edit');

Route::post('klient_update/{id}','KlientsController@updateKlient')->name('klient_update');

Route::get('orders','PhoneController@showOrderPhone')->name('orders');

Route::get('sum','KlientsController@sum')->name('sum');

Route::put('/phone-order/{phone}', 'PhoneController@orderPhone')->name('phone.order');

Route::patch('/phone-back/{phone}', 'PhoneController@backOrderPhone')->name('phone.back');