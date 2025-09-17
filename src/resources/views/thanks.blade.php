<!-- resources/views/register.blade.php -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@endsection

@section('content')
<!-- TODO: フォーム本体の作成 -->
    <div class="thanks__content">
        <div class="thanks__heading">
            <h2>{{ $message }}</h2>
        </div>
    </div>

<!-- TODO: 入力欄スタイル調整 -->
    <!-- TODO: ボタンデザイン調整 -->
@endsection