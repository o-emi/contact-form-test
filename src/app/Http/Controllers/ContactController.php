<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }


    public function confirm(Request $request)
    {
        // 入力値をすべて取得
        $contact = $request->all();
        // 電話番号を結合
        $contact['tel'] = $contact['tel_1'] . '-' . $contact['tel_2'] . '-' . $contact['tel_3'];
        // 確認画面に渡す
        return view('contacts.confirm', compact('contact'));
    }

// 確認画面 → 送信
    public function send(Request $request)
    {
        // $request->tel で結合済みの電話番号が取得可能
        // 保存処理やメール送信など
    }
}
