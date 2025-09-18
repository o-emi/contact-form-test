<!-- resources/views/register.blade.php -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header-link')
<a class="header-nav__link" href="{{ route('login') }}">login</a>
@endsection

@section('content')
    <!-- TODO: フォーム本体の作成 -->
<div class="register-form__content">
    <div class="register-form__heading">
        <h2>Register</h2>
    </div>
    <form class="register-form" action="{{ route('register.store') }}" method="post" novalidate>
        @csrf
<!-- お名前 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
<!-- 入力内容の保持・old関数で読み取った値を inputタグの value属性に指定 -->
                    <input type="text" name="name" placeholder="例 山田太郎" value="{{ old('name') }}" />
                </div>
<!--バリデーション機能を実装。-->
                <div class="form__error">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
<!-- メールアドレス -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="email" placeholder="例  test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
<!-- パスワード -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">パスワード</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="password" name="password" placeholder="例 coachtech0123" />
                </div>
                <div class="form__error">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
<!-- 登録ボタン -->
        <div class="form__button">
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>
    <!-- TODO: 入力欄スタイル調整 -->
    <!-- TODO: ボタンデザイン調整 -->
@endsection
