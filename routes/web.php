<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/article', [WebController::class, 'index']);
Route::get('anggota', [AnggotaController::class, 'index']);
