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

//  Route::get('/', function () {
// 	return view('home');
// });
// Admin
Route::get('/admin', 'AdminController@index')->name('home.index');
Route::get('/viewcontact', 'AdminController@viweContact')->name('viewcontact');
Route::get('/viewcontact/delete/{id}', 'AdminController@destroy')->name('viewcontact.delete')->where('id', '[0-9]+');
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
// Route::get('/recommended_menu', 'RecommendedmenuController@index')->name('foodmenu.recommended_menu');
// Route::get('/addrecommended_menu', 'RecommendedmenuController@create')->name('foodmenu.addrecommended_menu');
// Route::post('addrecommended_menu', 'RecommendedmenuController@store');
//reporttbooking
Route::get('/dining_table', 'DiningtableController@index')->name('diningtable.dining_table');
Route::get('/add_dining_table', 'DiningtableController@create')->name('diningtable.add_dining_table');
Route::post('add_dining_table', 'DiningtableController@store');
Route::post('/dining_table/update/{id}', 'DiningtableController@update')->name('diningtable.update_dining_table')->where('id', '[0-9]+');
Route::get('/dining_table/edit/{id}', 'DiningtableController@edit')->name('diningtable.edit_dining_table')->where('id', '[0-9]+');
Route::get('/dining_table/delete/{id}', 'DiningtableController@destroy')->name('diningtable.delete')->where('id', '[0-9]+');

//Promotion
Route::get('/promotion', 'PromotionController@index')->name('promotion.promotion');
Route::get('/addpromotion', 'PromotionController@create')->name('promotion.addpromotion');
Route::post('addpromotion', 'PromotionController@store');

//reservation
Route::get('/report_reservation', 'ReservationController@index')->name('reservations.report_reservation');
Route::post('reservation', 'ReservationController@store')->name('reservations');
Route::get('reservation/delete/{id}', 'ReservationController@destroy')->name('reservations.delete')->where('id', '[0-9]+');


//Counter staff
Route::get('/counter_staff', 'CounterstaffController@index')->name('counterstaff.index');
Route::post('counter_staff', 'CounterstaffController@search');
Route::post('reservation', 'CounterstaffController@store')->name('counterstaff.reservation');
Route::get('reservation_report/{id}', 'CounterstaffController@reservation_report')->name('reservation_report')->where('id', '[0-9]+');
Route::get('reservation_food/{id}', 'CounterstaffController@reservation_food')->name('reservation_food')->where('id', '[0-9]+');
Route::post('order_food', 'CounterstaffController@order_food')->name('order_food');
Route::post('confirm_payment', 'CounterstaffController@confirm_payment')->name('confirm_payment');



//Shopatmosphere
Route::get('/shop_atmosphere', 'ShopatmosphereController@index')->name('shopatmosphere.index');
Route::post('addshop_atmosphere', 'ShopatmosphereController@store')->name('addshopatmosphere');

Route::get('/food','FoodController@index');
Route::get('/status','StatusController@index')->name('status');
Route::get('/reser', 'ReserController@index');
Route::get('/image', 'ImageController@index');
//Contact
Route::get('/contact', 'ContactController@index');
Route::post('contact', 'ContactController@contact')->name('contact');


Route::get('/formdata', 'FormdataController@index');

//Book_tableController
Route::post('book_table', 'Book_tableController@store')->name('booktable');
Route::get('book_food/{id}', 'Book_tableController@book_food')->name('book_food')->where('id', '[0-9]+');;


//Home
Route::get('/', 'HomeController@index')->name('home');

//Route::get('/', 'HomeController@today')->name('today');

//Chef
Route::get('/chef', 'ChefController@index')->name('chef');
Route::get('/chef_update_is_cook/{id}', 'ChefController@edit')->name('chef_update_is_cook')->where('id', '[0-9]+');

//Customer
Route::post('order_food_customer', 'Book_tableController@order_food')->name('order_food_customer');
Route::get('customer_report/{id}', 'Book_tableController@customer_report')->name('customer_report')->where('id', '[0-9]+');
Auth::routes();
