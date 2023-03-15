<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimesController;

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
    return view('welcome');
});

// Route::get('/times', [TimesController::class, 'index']);
// Route::get('/informacao-time/{id}', [TimesController::class, 'show']);
// Route::get('/cadastrar-time', 'App\Http\Controllers\TimesController@create');
// Route::post('/cadastrar-time', 'App\Http\Controllers\TimesController@store');

Route::resource('times', TimesController::class);
