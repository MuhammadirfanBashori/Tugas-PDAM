<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\bayarController;
use App\Http\Controllers\tagihanController;
use App\Http\Controllers\TugasController;

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



Route::get('/bayar-air', [TugasController::class, 'index'])->name('bayar-air.index');
Route::post('/bayar-air/bayar', [TugasController::class, 'bayar'])->name('bayar-air.bayar');
