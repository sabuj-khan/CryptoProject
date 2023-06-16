<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

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


Route::get('/', [HomeController::class, 'homePageAction']);
Route::get('/about', [AboutController::class, 'aboutAction']);
Route::get('/how', [AboutController::class, 'howworksAction']);









Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/cookie/{nm1}/{nm2}', [DemoController::class, 'cookieAction']);