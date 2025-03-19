<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HuurautosController;

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

Route::get('/huurautos', [HuurautosController::class, 'index'])->name('index');
Route::get('/huurautos/create', [HuurautosController::class, 'create'])->name('create');
Route::post('/huurautos', [HuurautosController::class, 'store'])->name('store');