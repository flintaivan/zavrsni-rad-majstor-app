<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('register', [RegisterController::class, 'show'])->name('register.show');
Route::post('register_validate', [RegisterController::class, 'validateRegistration'])->name('register.validate');

Route::get('login', [LoginController::class, 'show'])->name('login');
Route::post('login_validate', [LoginController::class, 'validateLogin'])->name('login.validate');
