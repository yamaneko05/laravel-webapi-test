<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{id}', [UserController::class, 'show'])->middleware('auth');
Route::get('/users', [UserController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'loginGet'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/account', [AccountController::class, 'accountGet'])->middleware('auth');
Route::post('/account', [AccountController::class, 'accountPost'])->middleware('auth');