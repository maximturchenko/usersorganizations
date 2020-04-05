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




// API ROUTES ==================================  
Route::group(array('prefix' => 'api'), function() {

    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there
    Route::resource('comments', 'CommentController', 
        array('only' => array('index', 'store', 'destroy')));

});

