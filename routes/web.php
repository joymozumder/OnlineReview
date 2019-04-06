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
    return view('frontend.userprofile');
});
Route::get('test','HomeController@test');





//user
Route::get('dashboard','HomeController@dashboard');
Route::get('userregister','UserController@UserRegister');
Route::post('userstore','UserController@UserStore');
Route::get('userprofile/{id}','UserController@userprofile')->name('userprofile');
Route::post('userupdate/{id}','UserController@userupdate');








Route::post('organizationupdate/{id}','OrganizationController@organizationupdate');







Route::get('welcome','HomeController@welcome');

Route::get('organizationregister','OrganizationController@OrganizationRegister');
Route::post('organizationstore','OrganizationController@OrganizationStore');
Route::get('organizationprofile/{id}','OrganizationController@organizationprofile')->name('organizationprofile');




Route::get('login','HomeController@login');
Route::post('postlogin','HomeController@postlogin');
Route::get('list/{category}', 'HomeController@list')->name('list');




//Admin

Route::get('pending-requests','AdminController@approvallist');
Route::get('accept/{id}','AdminController@accept');
Route::get('reject/{id}','AdminController@reject');
Route::get('admindashboard','AdminController@dashboard');

