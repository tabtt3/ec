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

Auth::routes();

Route::get('/', [App\Http\Controllers\TopController::class, 'index']);


Route::get('/item', [App\Http\Controllers\ItemController::class, 'index'])->name('itemIndex');
Route::get('/item/{id}', [App\Http\Controllers\ItemController::class, 'show'])->name('itemShow');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
