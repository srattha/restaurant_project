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
});
// Admin
Route::get('/admin', 'AdminController@index')->name('home.index');
// User
Route::get('/adduser', 'AdduserController@index')->name('home.adduser');
Route::post('adduser', 'AdduserController@store');
Route::get('/user/edit/{id}', 'AdduserController@edit')->name('home.edituser')->where('id', '[0-9]+');
Route::post('/user/update/{id}', 'AdduserController@update')->name('home.update')->where('id', '[0-9]+');
Route::get('/user/delete/{id}', 'AdduserController@destroy')->name('home.delete')->where('id', '[0-9]+');

// Foodmenu
Route::get('/all_menu', 'FoodmenuController@index')->name('foodmenu.all_foodmanu');
Route::get('/addmenu', 'FoodmenuController@create')->name('foodmenu.add_menu');
Route::post('addmenu', 'FoodmenuController@store');
Route::get('/menu/edit/{id}', 'FoodmenuController@edit')->name('foodmenu.editmanu')->where('id', '[0-9]+');
Route::post('/menu/update/{id}', 'FoodmenuController@update')->name('foodmenu.update')->where('id', '[0-9]+');
Route::get('/menu/delete/{id}', 'FoodmenuController@destroy')->name('foodmenu.delete')->where('id', '[0-9]+');

// Recommendedmenu
Route::get('/recommended_menu', 'RecommendedmenuController@index')->name('foodmenu.recommended_menu');
Route::get('/addrecommended_menu', 'RecommendedmenuController@create')->name('foodmenu.addrecommended_menu');
Route::post('addrecommended_menu', 'RecommendedmenuController@store');
//reporttbooking
Route::get('/tablereservation', 'TablereservationController@index')->name('reportbooking.table_reservation');




Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
