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


Route::get('/','HomeController@home');








Route::post('userupdate/{id}','UserController@userupdate');

Route::post('organizationupdate/{id}','OrganizationController@organizationupdate');







Route::get('welcome','HomeController@welcome');

Route::get('organizationregister','OrganizationController@OrganizationRegister');
Route::post('organizationstore','OrganizationController@OrganizationStore');

Route::get('userregister','UserController@UserRegister');
Route::post('userstore','UserController@UserStore');

Route::get('login','HomeController@login');
Route::post('postlogin','HomeController@postlogin');

