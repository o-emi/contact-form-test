<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanksController extends Controller
{
    // サンクス画面表示
    public function show($type)
    {
        // サンクス文言のパターン
        $messages = [
            'contact'  => 'お問い合わせありがとうございました',
            'register' => '登録ありがとうございました',
        ];

        // type が無効な場合はデフォルト
        $message = $messages[$type] ?? 'ありがとうございました';

        return view('thanks', compact('message'));
    }
}
