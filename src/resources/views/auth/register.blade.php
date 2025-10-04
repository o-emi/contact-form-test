@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header-link')
<a class="header-nav__link" href="{{ route('login') }}">login</a>
@endsection

@section('content')
    <!-- TODO: フォーム本体の作成 -->
<div class="register-form">
  <h2 class="register-form__heading contect__heading">Register</h2>
  <div class="register-form__inner">
    <form class="register-form__form" action="/register" method="post">
      @csrf
<!-- お名前 -->
      <div class="register-form__group">
        <label class="register-form__label" for="name">お名前</label>
        <input type="text" name="name" id="name" placeholder="例 山田太郎" value="{{ old('name') }}" />
        <p class="register-form__error-message">
          @error('name')
          {{ $message }}
          @enderror
        </p>
      </div>
<!-- メールアドレス -->
      <div class="register-form__group">
        <label class="register-form__label" for="email">メールアドレス</label>
        <input type="mail" name="email" id="email" placeholder="例 coachtech1106">
        <p class="register-form__error-message">
          @error('email')
          {{ $message }}
          @enderror
        </p>
      </div>
<!-- パスワード -->
      <div class="register-form__group">
        <label class="register-form__label" for="password">パスワード</label>
        <input type="password" name="password" id="password" placeholder="例 coachtech1106">
        <p class="register-form__error-message">
          @error('password')
          {{ $message }}
          @enderror
        </p>
      </div>
<!-- 登録ボタン -->
      <div class="form__button">
        <button class="form__button-submit" type="submit">登録</button>
      </div>
    </form>
  </div>
</div>
@endsection
