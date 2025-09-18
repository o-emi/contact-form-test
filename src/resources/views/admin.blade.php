<!-- resources/views/register.blade.php -->
@extends('layouts.app')

@section('header-link')
<li class="header-nav__item">
    <a class="header-nav__link" href="{{ route('logout') }}">Logout</a>
</li>
@endsection

@section('content')
<h2>管理画面</h2>
<p>管理者専用ページです</p>

    <!-- TODO: フォーム本体の作成 -->
    <!-- TODO: 入力欄スタイル調整 -->
    <!-- TODO: ボタンデザイン調整 -->
@endsection