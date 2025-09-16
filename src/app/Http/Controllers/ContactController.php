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
        return view('contact.confirm', compact('contact'));
    }

    public function thanks()
    {
        return view('thanks');
    }
}
