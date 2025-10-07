<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;




class ContactController extends Controller
{
// 入力ページ
    public function index()
    {
        $categories = Category::all();
        return view('contact', compact('categories'));
    }

// 確認ページ
    public function confirm(ContactRequest $request)
    {
        // 入力値をすべて取得
        $contacts = $request->all();
        $category = Category::find($request->category_id);
        // 確認画面に渡す
        return view('confirm', compact('contacts', 'category'));
    }
// 送信処理（DB保存）
    public function store(ContactRequest $request)
    {
        if ($request->has('back')) {
            return redirect('/')->withInput();
        }

        $request['tell'] = $request->tel_1 . $request->tel_2 . $request->tel_3;
        Contact::create(
            $request->only([
                'category_id',
                'first_name',
                'last_name',
                'gender',
                'email',
                'tell',
                'address',
                'building',
                'detail',
            ])
            );

        return view('thanks');
    }

}
