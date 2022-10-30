<?php

use Illuminate\Http\Request;

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
Route::get('first', 'showcontroller@showdaata')->name('first');
Route::get('show','showcontroller@showdfile')->name('showdata');
Route::post('sucess','showcontroller@postkrdo')->name('sucess');
Route::get('upload','uploadcontroller@uploadform')->name('see');
Route::get('seeimage','showcontroller@showimage');
