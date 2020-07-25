<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('createDorm', 'DormController@createDorm');
Route::get('showDorm/{id}', 'DormController@showDorm');
Route::get('listDorm', 'DormController@listDorm');
Route::put('updateDorm/{id}', 'DormController@updateDorm');
Route::put('addDorm/{id}/{dorm_id}', 'DormController@addDorm');
Route::put('removeDorm/{id}/{dorm_id}', 'DormController@removeDorm');
Route::delete('deleteDorm/{id}', 'DormController@deleteDorm');


Route::post('createUser', 'UserController@createUser');
Route::get('showUser/{id}', 'UserController@showUser');
Route::get('listUser', 'UserController@listUser');
Route::put('updateUser/{id}', 'UserController@updateUser');
Route::delete('deleteUser/{id}', 'UserController@deleteUser');