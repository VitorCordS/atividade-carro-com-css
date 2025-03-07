<?php

use App\Http\Controllers\CarroController;
use Illuminate\Support\Facades\Route;

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
    return view('main');
});

Route::get('/media', function () {
    return view('media_consumo');
});
Route::get('/alcoolougasolina', function () {
    return view('alcool_x_gasolina');
});
Route::get('/gastoviagem', function () {
    return view('media');
});

Route::post('/media', [CarroController::class,'media_consumo']) ;
Route::post('/gastoviagem', [CarroController::class,'gastoViagem']) ;
Route::post('/alcoolougasolina', [CarroController::class,'alcoolOuGasolina']) ;
