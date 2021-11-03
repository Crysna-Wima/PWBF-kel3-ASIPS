<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kecamatanController;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});




// Route::get('/', 'App\Http\Controllers\historyPosyanduController@index');

// Route::get('/', 'App\Http\Controllers\userController@index');

// Route::get('/role', 'App\Http\Controllers\userRoleController@index');


Route::get('/kecamatan', 'App\Http\Controllers\kecamatanController@index');
Route::post('/kecamatan/store','App\Http\Controllers\kecamatanController@store');
Route::get('/kecamatan/edit/{id}','App\Http\Controllers\kecamatanController@edit');
Route::post('/kecamatan/update','App\Http\Controllers\kecamatanController@update');
Route::get('/kecamatan/hapus/{id}', 'App\Http\Controllers\kecamatanController@hapus');

Route::get('/kelurahan', 'App\Http\Controllers\kelurahanController@index');
Route::post('/kelurahan/store','App\Http\Controllers\kelurahanController@store');
Route::get('/kelurahan/edit/{id}','App\Http\Controllers\kelurahanController@edit');
Route::post('/kelurahan/update','App\Http\Controllers\kelurahanController@update');
Route::get('/kelurahan/hapus/{id}', 'App\Http\Controllers\kelurahanController@hapus');

Route::get('/role', 'App\Http\Controllers\roleController@index');
Route::post('/role/store','App\Http\Controllers\roleController@store');
Route::get('/role/edit/{id}','App\Http\Controllers\roleController@edit');
Route::post('/role/update','App\Http\Controllers\roleController@update');
Route::get('/role/hapus/{id}', 'App\Http\Controllers\roleController@hapus');

Route::get('/posyandu', 'App\Http\Controllers\posyanduController@index');
Route::post('/posyandu/store','App\Http\Controllers\posyanduController@store');
Route::get('/posyandu/edit/{id}','App\Http\Controllers\posyanduController@edit');
Route::post('/posyandu/update','App\Http\Controllers\posyanduController@update');
Route::get('/posyandu/hapus/{id}', 'App\Http\Controllers\posyanduController@hapus');

Route::get('/balita', 'App\Http\Controllers\balitaController@index');
Route::post('/balita/store','App\Http\Controllers\balitaController@store');
Route::get('/balita/edit/{id}','App\Http\Controllers\balitaController@edit');
Route::post('/balita/update','App\Http\Controllers\balitaController@update');
Route::get('/balita/hapus/{id}', 'App\Http\Controllers\balitaController@hapus');
