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

Route::get('/v1/generated-link', 'ShortlinkController@index')->name('generated-link');
Route::post('/v1/generate-link', 'ShortlinkController@store')->name('generate-link');

Route::get('/v1/{code}', 'ShortlinkController@shortenLink')->name('link');
