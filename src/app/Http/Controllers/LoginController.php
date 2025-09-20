<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;


class LoginController extends Controller
{
    // GET（表示）用
    public function showLoginForm()
    {
        return view('login');
    }

// POST用
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.index');// ログイン成功後の遷移先
        }

        return back()->withErrors([
            'email' => '認証に失敗しました。',
        ])->withInput($request->except('password'));
    }
}

