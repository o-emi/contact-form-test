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

// ホーム画面（お問い合わせフォーム）
Route::get('/', [ContactController::class, 'index'])->name('home');

// 登録関連
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// ログイン
Route::get('login', [LoginController::class, 'login'])->name('login');

// お問い合わせフォーム（確認画面）
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
// お問い合わせフォーム（送信処理）
Route::post('store', [ContactController::class, 'send'])->name('contact.store');

// 管理画面
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // 他の管理画面用ルートもここに追加
});

// サンクスページ（複数パターン）
Route::get('/thanks/{type}', [ThanksController::class, 'show'])->name('thanks.show');
// サンクス画面（送信後）
Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
