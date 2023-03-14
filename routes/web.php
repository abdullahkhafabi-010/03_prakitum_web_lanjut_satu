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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;


Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Product
Route::prefix('product')->group(function () {
    Route::get('/1',[ProductController::class, 'product']);
});

//About-us
Route::get('/about-us', [App\Http\Controllers\AboutUsController::class, 'about']);

//News
Route::get('/news', [App\Http\Controllers\NewsController::class, 'news']);

//Program
Route::prefix('program')->group(function () {
    Route::get('/1', [ProgramController::class, 'program']);
});

//Contact-us
Route::get('/contact-us',[ContactUsController::class, 'contact']);

//News
Route::get('/news', [App\Http\Controllers\NewsController::class, 'news']);