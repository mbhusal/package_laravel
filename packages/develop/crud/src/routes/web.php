<?php
/**
 * Created by PhpStorm.
 * User: ncs3
 * Date: 4/5/18
 * Time: 11:39 AM
 */
$namespace = 'develop\crud\Http\Controllers';
Route::group([
    "namespace" => $namespace,
    "prefix"=> 'audit',
    "middleware"=> 'web'
    ], function (){

    //Routes for CRUD Operation
    Route::get('/', 'CrudController@create')->name('create_data');
    Route::get('list', 'CrudController@index')->name('data_list');
    Route::post('store', 'CrudController@store')-> name('store_data');
    Route::get('remove/{audit}', 'CrudController@remove')-> name('remove_data');
    Route::get('view/{audit}', 'CrudController@show')-> name('view_dataitem');
    Route::get('edit/{audit}', 'CrudController@edit')-> name('edit_data');
    Route::post('update/{id}', 'CrudController@update')-> name('update_data');


    //Routes for User Auth
    Route::get('/auth/home', 'HomeController@index');
    Route::get('/auth/login', 'Auth\LoginController@index')->name('login_auth');
    Route::post('/auth/login', 'Auth\LoginController@login')->name('auth_login_post');
    Route::get('/auth/register', 'Auth\RegisterController@showRegistrationForm')->name('auth_register');
    Route::post('/auth/register', 'Auth\RegisterController@register')->name('auth_post_register');


    //Routes for Admin Admin
    Route::get('admin/home', 'AdminController@index');
    Route::get('/admin/login', 'Admin\LoginController@showLoginForm')->name('admin_login');
    Route::post('/admin/login', 'Admin\LoginController@login');
    Route::get('/admin/register', 'Admin\RegisterController@showRegistrationForm')->name('admin_register');
    Route::post('/admin/register', 'Admin\RegisterController@register');


    //Routes for Logout
    Route::post('/logout_user', 'Auth\LoginController@logout')->name('user_logout');
    Route::post('/logout_admin', 'Admin\LoginController@logout')->name('admin_logout');
});
