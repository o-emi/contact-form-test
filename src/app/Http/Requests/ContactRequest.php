<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'last_name'    => 'required|string|max:255', // 姓
        'first_name'   => 'required|string|max:255', // 名
        'gender'       => 'required',                // 性別
        'email'        => 'required|email',          // メール
        'tel_1'        => 'required',
        'tel_2'        => 'required',
        'tel_3'        => 'required',                // 電話番号
        'address'      => 'required|string',
        'address_2' => 'nullable|string|max:100',
        'category_id'  => 'required|exists:categories,id', // お問い合わせ種類
        'content'      => 'required|string|max:120',       // お問い合わせ内容
        ];
    }
    public function messages()
    {
        return [
        'last_name.required'   => '姓を入力してください',
        'first_name.required'  => '名を入力してください',
        'gender.required'      => '性別を選択してください',
        'email.required'       => 'メールアドレスを入力してください',
        'email.email'          => 'メールアドレスはメール形式で入力してください',
        'tel_1.required'       => '電話番号を入力してください',
        'tel_2.required'       => '電話番号を入力してください',
        'tel_3.required'       => '電話番号を入力してください',
        'address.required'     => '住所を入力してください',
        'category_id.required' => 'お問い合わせの種類を選択してください',
        'content.required'     => 'お問い合わせ内容を入力してください',
        'content.max'          => 'お問合せ内容は120文字以内で入力してください',
        ];
    }

    public function withValidator($validator)
    {
    $validator->after(function ($validator) {
        $tel1 = $this->input('tel_1');
        $tel2 = $this->input('tel_2');
        $tel3 = $this->input('tel_3');

        // いずれかが空なら「電話番号を入力してください」とまとめる
        if (empty($tel1) || empty($tel2) || empty($tel3)) {
            $validator->errors()->add('tel', '電話番号を入力してください');
        }
    });
    }
}
