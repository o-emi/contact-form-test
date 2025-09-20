<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
// 入力ページ
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

// 確認ページ
    public function confirm(ContactRequest $request)
    {
        // 入力値をすべて取得
        $contact = $request->validated();
        // 電話番号を結合
        $contact['tel'] = $contact['tel_1'] . '-' . $contact['tel_2'] . '-' . $contact['tel_3'];
        // / 選択されたカテゴリ名を取得して追加
        $category = Category::find($request->category_id);
        $contact['category_name'] = $category->content ?? '未選択';
        // 確認画面に渡す
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only([
        'last_name', 'first_name', 'email', 'tel', 'content', 'category_id'
        ]);
        Contact::create($contact);

    // サンクス画面にリダイレクト
        return redirect()->route('thanks.show', ['type' => 'contact']);
    }
}
