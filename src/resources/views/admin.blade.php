
@extends('layouts.app')

@section('header-link')
<li class="header-nav__item">
    <a class="header-nav__link" href="{{ route('logout') }}">Logout</a>
</li>
@endsection

@section('content')
<!-- 動作確認 -->
<h2>管理画面</h2>
<p>管理者専用ページです</p>
<form method="POST" action="{{ route('logout') }}">
        @csrf

</form>

@endsection