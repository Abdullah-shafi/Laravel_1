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
//Home
Route::get('/customer_home', 'customer_homeController@index');
//about
Route::get('/about-us', 'customer_homeController@about');
//r_home
Route::get('/r_customer_home', 'r_customer_homeController@index');
//details
//Route::post('/customer_property_details/{id}', 'r_customer_homeController@details');
Route::get('/customer_property_details/{id}', 'r_customer_homeController@details');
//all_property
Route::get('/customer_all_property', 'r_customer_homeController@customer_all_property');
//contact_us
Route::get('/customer_contact', 'r_customer_homeController@customer_contact');
//about_me
Route::get('/customer_about_me', 'r_customer_homeController@customer_about_me');
//change_password
Route::get('/customer_change_password', 'r_customer_homeController@customer_change_password');
//customer_delete_profile
Route::get('/customer_delete_profile', 'r_customer_homeController@customer_delete_profile');
//customer_edit_profile
Route::get('/customer_edit_profile', 'r_customer_homeController@customer_edit_profile');

