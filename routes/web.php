<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
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

Route::get('/' , [HomeController::class , "index"])->name("home.index");
Route::get('/info' , [InfoController::class , "index"])->name("info.index");
Route::post('/store', [InfoController::class , "store"])->name("info.store");


