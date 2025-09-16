<!-- resources/views/register.blade.php -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header-link')
<a class="header-nav__link" href="{{ route('login') }}">Login</a>
@endsection


@section('content')
<!-- TODO: フォーム本体の作成 -->
<div class="login-form__content">
    <div class="logiin-form__heading">
        <h2>Login</h2>
    </div>
    <form class="login-form" action="" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例  test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
<!--バリデーション機能を実装したら記述します。-->
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">パスワード</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="password" name="password" placeholder="例 coachtech0123" value="{{ old('password') }}" />
                </div>
                <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
                    @error('tel')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">ログイン</button>
        </div>
    </form>
</div>
    <!-- TODO: 入力欄スタイル調整 -->
    <!-- TODO: ボタンデザイン調整 -->
@endsection