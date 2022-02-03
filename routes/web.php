<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portoController;
use App\Http\Controllers\portofolioController;
use phpDocumentor\Reflection\Types\Resource_;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [portoController::class, 'indexFrontend']);
Route::get('/login', [HomeController::class, 'index']);
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::view('/dashboard', 'layouts.dashboard');
    Route::resource('/portfolio', portofolioController::class);
});






