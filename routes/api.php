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

Route::get('/mahasiswa/tampil', 'APIController@tampil');

Route::post('/mahasiswa/createMhs', 'APIController@createMhs');

Route::post('/mahasiswa/updateMhs', 'APIController@updateMhs');

Route::post('/mahasiswa/readUpdateMhs/{id}', 'APIController@readUpdateMhs');

Route::delete('/mahasiswa/deleteMhs/{id}', 'APIController@deleteMhs');