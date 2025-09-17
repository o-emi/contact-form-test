<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ThanksController;

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

// 登録登録画面表示
Route::get('register', [RegisterController::class, 'register'])->name('register');
// 会員登録フォーム送信
Route::post('/register', [RegisterController::class, 'store']);


Route::get('login', [LoginController::class, 'login'])->name('login');

// お問い合わせフォーム（表示）
Route::get('contact', [ContactController::class, 'contact'])->name('contact');
// お問い合わせフォーム（確認画面）
Route::post('confirm', [ContactController::class, 'confirm'])->name('confirm');
// お問い合わせフォーム（送信後サンクス画面）
Route::post('thanks', [ContactController::class, 'thanks'])->name('thanks');

// 管理画面
Route::get('admin', [AdminController::class, 'admin'])->name('admin');

// サンクスページ（複数パターン（登録、お問い合わせ））
Route::get('/thanks/{type}', [ThanksController::class, 'show'])->name('thanks.show');