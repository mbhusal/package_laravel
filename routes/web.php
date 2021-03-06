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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/home', 'AdminController@index');

Route::get('/admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Admin\LoginController@login');
Route::post('/admin_password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin_password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin_password/reset', 'Admin\ResetPasswordController@reset');


Route::get('/admin/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('/admin/register', 'Admin\RegisterController@register');
