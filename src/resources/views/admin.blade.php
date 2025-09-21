
@extends('layouts.app')

@section('header-link')
<li class="header-nav__item">
    <a class="header-nav__link" href="{{ route('logout') }}">Logout</a>
</li>
@endsection

@section('content')
<div class="admin__content">

    <div class="search__title">
        <h2>Admin</h2>
    </div>
    <form clacc="search-form" action="{{ route('logout') }}" method="POST">
    @csrf
<!-- search入力フォーム、後で修正あり -->
    <div class="search-form__item">
        <input class="search-form__item-input" type="text"
        name="" placeholder="名前やメールアドレスを入力してください" value="{{ old('') }}"/>
<!-- 性別選択 -->
        <select class="search-form__item-select" name="gender">
                <option value="">性別</option>
        </select>
        <select class="search-form__item-select" name="categeory">
                <option value="">お問い合わせの種類</option>
        </select>
        <select class="search-form__item-select" name="date">
                <option value="">年/月/日</option>
        </select>
    </div>
<!-- 検索ボタン -->

    <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">検索</button>
    </div>
<!-- リセットフォーム -->
    <div class="search-form__reset-button">
        <button class="search-form__reset-button-submit" type="submit">リセット</button>
    </div>
<!-- エクスポート -->
    <div class="export-form__button">
        <button class="search-form__reset-button-submit" type="submit">export</button>
    </div>




</form>
</div>
@endsection