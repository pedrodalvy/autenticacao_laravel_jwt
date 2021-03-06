<?php

use App\User;
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


Route::post('login', 'Api\AuthController@login')->name('api.login');

Route::post('refresh', 'Api\AuthController@refresh');

Route::group(['middleware' => ['auth:api', 'jwt.refresh']], function () {
    Route::get('users', function () {
        return User::all()->toJson();
    });

    Route::post('logout', 'Api\AuthController@logout');
});