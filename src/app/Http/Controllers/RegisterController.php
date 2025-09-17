<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
// 会員登録フォームを表示するだけ
        return view('register');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name','email','password']);
// パスワードはハッシュ化
        $data['password'] = bcrypt($data['password']);

        User::create($data);

// サンクス画面にリダイレクト
        return redirect()->route('thanks.show', ['type' => 'register']);
    }

}