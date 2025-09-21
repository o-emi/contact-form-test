<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function register()
    {
// 会員登録フォームを表示するだけ
        return view('register');
    }

    public function store(RegisterRequest $request)
    {
// バリデーション
    $validated = $request->validated();


// パスワードはハッシュ化
    $validated['password'] = bcrypt($validated['password']);

// ユーザー作成
    User::create($validated);

// サンクス画面にリダイレクト
    return redirect()->route('thanks.show')->with('message', '会員登録ありがとうございました！');
    }

}