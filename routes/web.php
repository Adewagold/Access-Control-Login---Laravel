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

Route::get('/', [
    'uses'=>'UserController@index',
    'as'=>'index'
]);

Route::get('/login', [
'uses'=>'UserController@getLogin',
    'as'=>'users.signin',

]);

Route::get('/Register', [
    'uses'=>'UserController@getRegister',
    'as'=>'users.signup'
]);

Route::POST('/login', [
    'uses'=>'UserController@postLogin',
    'as'=>'users.signin'
]);

Route::POST('/Register', [
    'uses'=>'UserController@postRegister',
    'as'=>'users.signup'
]);

Route::post('/assign-role', [
    'uses'=>'UserController@postAssignRoles',
    'as'=>'index'
]);