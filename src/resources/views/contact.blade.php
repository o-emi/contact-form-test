@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>

    @php
        $data = session('contact_input', []);
    @endphp

    <form class="form" action="{{ route('contact.confirm') }}" method="post" novalidate>
        @csrf

        <!-- 名前入力フォーム -->
        <div class="form__group-wrapper">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="last_name" placeholder="例 山田" value="{{ old('last_name', $data['last_name'] ?? '') }}" />
                    <input type="text" name="first_name" placeholder="例 次郎" value="{{ old('first_name', $data['first_name'] ?? '') }}" />
                </div>
                <div class="form__error">
                    @error('last_name') {{ $message }} @enderror
                    @error('first_name') {{ $message }} @enderror
                </div>
            </div>
        </div>

        <!-- 性別選択 -->
        <div class="form__group-wrapper">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <input type="radio" name="gender" value="man" {{ (old('gender', $data['gender'] ?? '') == 'man') ? 'checked' : '' }}> 男性
                    <input type="radio" name="gender" value="woman" {{ (old('gender', $data['gender'] ?? '') == 'woman') ? 'checked' : '' }}> 女性
                    <input type="radio" name="gender" value="others" {{ (old('gender', $data['gender'] ?? '') == 'others') ? 'checked' : '' }}> その他
                </div>
                <div class="form__error">
                    @error('gender') {{ $message }} @enderror
                </div>
            </div>
        </div>

        <!-- メールアドレス -->
        <div class="form__group-wrapper">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <input type="text" name="email" placeholder="例 test@example.com" value="{{ old('email', $data['email'] ?? '') }}" />
                <div class="form__error">
                    @error('email') {{ $message }} @enderror
                </div>
            </div>
        </div>

        <!-- 電話番号 -->
        <div class="form__group-wrapper">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <input type="text" name="tel_1" placeholder="090" maxlength="3" value="{{ old('tel_1', $data['tel_1'] ?? '') }}" /> -
                <input type="text" name="tel_2" placeholder="1234" maxlength="4" value="{{ old('tel_2', $data['tel_2'] ?? '') }}" /> -
                <input type="text" name="tel_3" placeholder="5678" maxlength="4" value="{{ old('tel_3', $data['tel_3'] ?? '') }}" />
                <div class="form__error">
                    @error('tel') {{ $message }} @enderror
                </div>
            </div>
        </div>

        <!-- 住所 -->
        <div class="form__group-wrapper">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <input type="text" name="address" placeholder="例 東京都渋谷区千代田区1-2-3" value="{{ old('address', $data['address'] ?? '') }}" />
                <input type="text" name="address_2" placeholder="例 千代田区マンション101" value="{{ old('address_2', $data['address_2'] ?? '') }}" />
                <div class="form__error">
                    @error('address') {{ $message }} @enderror
                    @error('address_2') {{ $message }} @enderror
                </div>
            </div>
        </div>

        <!-- お問い合わせの種類 -->
        <div class="form__group-wrapper">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <select name="category_id">
                    <option value="">選択してください</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ (old('category_id', $data['category_id'] ?? '') == $category->id) ? 'selected' : '' }}>
                            {{ $category->content }}
                        </option>
                    @endforeach
                </select>
                <div class="form__error">
                    @error('category_id') {{ $message }} @enderror
                </div>
            </div>
        </div>

        <!-- お問い合わせ内容 -->
        <div class="form__group-wrapper">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <textarea name="content" placeholder="お問い合わせ内容をご記載ください">{{ old('content', $data['content'] ?? '') }}</textarea>
                <div class="form__error">
                    @error('content') {{ $message }} @enderror
                </div>
            </div>
        </div>

        <!-- 送信ボタン -->
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection
