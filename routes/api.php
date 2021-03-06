<?php

use Illuminate\Http\Request;
Use App\Films;

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

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

Route::get('films', 'FilmsController@index');
Route::get('films/{film}', 'FilmsController@show');
Route::post('films', 'FilmsController@store');
Route::put('films/{film}', 'FilmsController@update');
Route::delete('films/{film}', 'FilmsController@delete');
Route::middleware('auth:api')->post('comment', 'CommentsController@store');