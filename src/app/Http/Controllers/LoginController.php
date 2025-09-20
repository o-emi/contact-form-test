<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // GET（表示）用
    public function showLoginForm()
    {
        return view('login');
    }

// POST用
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->intended('/'); // ログイン成功後の遷移先
        }

        return back()->withErrors([
            'email' => '認証に失敗しました。',
        ]);
    }
}

