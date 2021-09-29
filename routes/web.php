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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'App\Http\Controllers\kecamatanController@index');

// Route::get('/', 'App\Http\Controllers\kelurahanController@index');

// Route::get('/', 'App\Http\Controllers\posyanduController@index');

// Route::get('/', 'App\Http\Controllers\balitaController@index');

// Route::get('/', 'App\Http\Controllers\historyPosyanduController@index');

// Route::get('/', 'App\Http\Controllers\userController@index');

// Route::get('/', 'App\Http\Controllers\userRoleController@index');

// Route::get('/', 'App\Http\Controllers\roleController@index');
