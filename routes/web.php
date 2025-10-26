<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\PesantrenController;
use App\Http\Controllers\ProvinsiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'index'])->name('home');
Route::get('/provinsi', [ProvinsiController::class, 'index'])->name('provinsi');
Route::get('/kabupaten/{id}', [KabupatenController::class, 'index'])->name('kabupaten');
Route::get('/pesantren/{id}', [PesantrenController::class, 'index'])->name('pesantren');
