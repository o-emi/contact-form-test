@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<!--フォーム本体の作成 -->
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <!-- <form class="form"> -->
        <!-- 値をコントローラに送る（confirmアクションを呼び出すルーデングと結びつける） -->
    <form class="form" action="{{ route('contact.confirm') }}" method="post">
    @csrf
<!-- 名前入力フォーム -->
    <div class="c">
        <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
<!-- 入力内容の保持・old関数で読み取った値を inputタグの value属性に指定 -->
                <input type="text" name="name" placeholder="例 山田" value="{{ old('name') }}" />
                <input type="text" name="name" placeholder="例 太郎" value="{{ old('name') }}" />
            </div>
            <div class="form__error">
<!--バリデーション機能を実装したら記述します。-->
                @error('name')
                    {{ $message }}
                @enderror
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
                <input type="radio" name="gender" value="man" />男 性
                <input type="radio" name="gender" value="woman" />女 性
                <input type="radio" name="gender" value="others" />その他
            </div>
            <div class="form__error">
                @error('name')
                    {{ $message }}
                @enderror
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
            <div class="form__input--text">
                <input type="text" name="email" placeholder="例 test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
                @error('name')
                    {{ $message }}
                @enderror
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
            <div class="form__input--tel">
                <input type="text" name="tel_1" placeholder="090"maxlength="3"  value="{{ old('tel_1') }}" /> -
                <input type="text" name="tel_2" placeholder="1234"maxlength="4" value="{{ old('tel_2') }}"/> -
                <input type="text" name="tel_3" placeholder="5678"maxlength="4" value="{{ old('tel_3') }}"/>
            </div>
            <div class="form__error">
                @error('name')
                    {{ $message }}
                @enderror
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
            <div class="form__input--text">
                <input type="text" name="address" placeholder="例 東京都渋谷区千代田区1-2-3" value="{{ old('address') }}"/>
            </div>
            <div class="form__error">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
        </div>
    </div>
<!-- 建物名 -->
    <div class="form__group-wrapper">
        <div class="form__group-title">
            <span class="form__label--item">建物名</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="address_2" placeholder="例 千代田区マンション101" value="{{ old('address_2') }}"/>
            </div>
            <div class="form__error">
                @error('name')
                    {{ $message }}
                @enderror
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
            <div class="form__input--text">
                <select class="create-form__item-select" name="category_id" required>
                    <option value="">選択してください</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->content }}
                    </option>
                    @endforeach

                </select>
            <div class="form__error">
                @error('category_id')
                    {{ $message }}
                @enderror
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
            <div class="form__input--textarea">
                <textarea name="content" placeholder="お問い合わせ内容をご記載ください">{{ old('content') }}</textarea>
            </div>
        </div>
    </div>
    <div class="form__button">
        <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>

@endsection