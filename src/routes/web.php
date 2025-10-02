<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
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


Route::get('/', [ContactController::class, 'index'])->name('index');

// お問い合わせフォーム（確認画面）
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');

Route::post('/thanks', [ContactController::class, 'store'])->name('contact.thanks');


// 管理画面
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // 他の管理画面用ルートもここに追加
});

