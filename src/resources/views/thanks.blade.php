@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@endsection

@section('content')
    <div class="thanks__content">
        <div class="thanks__heading">
            <h2>{{ session('message') }}</h2>
        </div>
    </div>
<!-- HOMEボタン -->
    <div class="thanks__button">
        <a href="{{ route('home') }}" class="thanks__button-submit">
        HOME
        </a>
    </div>
@endsection