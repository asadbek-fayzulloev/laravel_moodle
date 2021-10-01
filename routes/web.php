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
    return redirect()->route('dashboard.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboarController::class, 'index'])->name('dashboard.index');
Route::get('/tables', [App\Http\Controllers\DashboarController::class, 'showTables'])->name('tables');
Route::get('/chart', [App\Http\Controllers\DashboarController::class, 'showChart'])->name('chart');

