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

Route::get('siswa', 'SiswaController@index');
Route::post('siswa', 'SiswaController@create');
Route::get('/siswa/{id}', 'SiswaController@detail');
Route::put('/siswa/{id}', 'SiswaController@update');
Route::delete('/siswa/{id}', 'SiswaController@delete');

Route::get('dosen', 'DosenController@index');
Route::post('dosen', 'DosenController@create');
Route::get('/dosen/{lid}', 'DosenController@detail');
Route::put('/dosen/{lid}', 'DosenController@update');
Route::delete('/dosen/{lid}', 'DosenController@delete');

Route::get('mkuliah', 'MkuliahController@index');
Route::post('mkuliah', 'MkuliahController@create');
Route::get('/mkuliah/{mid}', 'MkuliahController@detail');
Route::put('/mkuliah/{mid}', 'MkuliahController@update');
Route::delete('/mkuliah/{mid}', 'MkuliahController@delete');
