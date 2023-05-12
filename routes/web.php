<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\listSiswaController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'user']);
Route::get('/admin smandapura pembayaran', [admin::class, 'admin']);

// Route::resource('/adminpembayaranSPP/seluruhsiswa', siswaController::class);

//Route dengan resource

Route::get('/adminsmandapurapembayaran/seluruhsiswa', [siswaController::class, 'index']);