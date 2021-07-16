<?php

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
    return view('welcome');
});

Route::get('/huurautos', function () {
    $data = DB::table('huurautos')
            ->select('automerk', 'autotype', 'autobouwjaar')  
            ->whereIn('autobouwjaar', [2001, 2003, 2006])  
            ->orderBy('automerk', 'asc')
            ->orderBy('autotype', 'asc')
            ->get();
    // dd($data);
    return view('huurautos.index',['data'=>$data]);
});