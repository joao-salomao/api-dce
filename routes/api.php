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

Route::resource('users', 'UsersController');
Route::resource('records', 'RecordsController');
Route::post('/records/delete', 'RecordsController@deleteRecords');
Route::middleware('auth:api')->get('/user', function (Request $request) {
});
