<?php

use Illuminate\Support\Facades\Route;

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
 
Route::get('/', 'UserController@index');
 
Route::get('user/add', 'UserController@create');

Route::post('users', 'UserController@store');


Route::get('user/{user}', 'UserController@show');

Route::get('user/{user}/edit', 'UserController@edit');

Route::get('user/{user}/delete', 'UserController@delete');


Route::put('user/{user}', 'UserController@update');

Route::delete('/user/{user}', "UserController@destroy");
 
/*
    GET /users
    GET /users/create
    POST /users
    GET /users/{id}/edit
    PATCH /users/{id}
    DELETE /users/{id}

*/
