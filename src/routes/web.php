<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/confirm', [ConfirmController::class, 'confirm']);
Route::get('/thanks', [ThanksController::class, 'thanks']);
Route::get('/admin', [AdminController::class, 'admin']);