<!-- resources/views/register.blade.php -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    <h1>【仮】ユーザー登録ページ</h1>

    <!-- TODO: フォーム本体の作成 -->
    <form class="register-form" action="" method="post">
    @csrf
    <!-- TODO: 入力欄スタイル調整 -->
    <!-- TODO: ボタンデザイン調整 -->
@endsection
