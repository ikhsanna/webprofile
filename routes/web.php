<?php

use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\postController;

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

Route::get('/', function () {
    return view('master');
});
Route::get('/landing',[welcomeController::class,'landing']);
Route::get('/welcome', [welcomeController::class,'index']);
Route::POST('/welcome', [welcomeController::class,'kirim']);

// email receiver controller
Route::get('/contact', function () {
    return view('master');
});

// form post contact-me
Route::post('/', [contactController::class, 'send']);

// testing
Route::get('/form', [postController::class, 'isiform']);