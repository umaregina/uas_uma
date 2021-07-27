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
Route::get('/Customers', 'CustomersController@index');
Route::get('/Customers/{customers}', 'CustomersController@show');
Route::post('/Customers', 'CustomersController@store');
Route::delete('/Customers/{customers}', 'CustomersController@destroy');
Route::post('/Customers/{customers}', 'CustomersController@update');

// Route::get('/Mahasiswa', 'MahasiswaController@index');
// Route::get('/Mahasiswa/{mahasiswa}', 'MahasiswaController@show');
// Route::post('/Mahasiswa', 'MahasiswaController@store');
// Route::delete('/Mahasiswa/{mahasiswa}', 'MahasiswaController@destroy');
// Route::post('/Mahasiswa/{mahasiswa}', 'MahasiswaController@update');
// Route::get('/Dosen', 'DosenController@index');
// Route::get('/Dosen/{dosen}', 'DosenController@show');
// Route::post('/Dosen', 'DosenController@store');
// Route::delete('/Dosen/{dosen}', 'DosenController@destroy');
// Route::post('/Dosen/{dosen}', 'DosenController@update');