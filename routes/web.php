<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajeController;
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

/*Route::get('/mensaje', function () {
    return view('mensaje.index');
});

Route::get('/mensaje/create',[MensajeController::class,'create']);*/

Route::resource('mensaje', MensajeController::class);