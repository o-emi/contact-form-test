@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>Confirm</h2>
    </div>
    <form class="form" action="{{ route('contact.thanks') }}" method="POST">
    @csrf
<!-- 名前 -->
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly/>
                        <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly/>
                    </td>
                </tr>
<!-- 性別 -->
            <tr class="confirm-table__row">
                <th class="confirm-table__header">性別</th>
                <td class="confirm-table__text">
                    <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                </td>
            </tr>
<!-- メールアドレス -->
            <tr class="confirm-table__row">
                <th class="confirm-table__header">email</th>
                <td class="confirm-table__text">
                    <input type="text" name="email" value="{{ $contact['email'] }}" readonly/>
                </td>
            </tr>
<!-- 電話番号 -->
            <tr class="confirm-table__row">
                <th class="confirm-table__header">tel</th>
                <td class="confirm-table__text">
                    <input type="text" name="tel" value="{{ $contact['tel'] }}" readonly/>
                </td>
            </tr>
<!-- 住所 -->
            <tr class="confirm-table__row">
                <th class="confirm-table__header">address</th>
                <td class="confirm-table__text">
                    <input type="text" name="address" value="{{ $contact['address'] }}" readonly/>
                </td>
            </tr>
<!-- 建物名 -->
            <tr class="confirm-table__row">
                <th class="confirm-table__header">address_2</th>
                <td class="confirm-table__text">
                    <input type="text" name="address_2" value="{{ $contact['address_2'] }}" readonly/>
                </td>
            </tr>
<!-- お問い合わせの種類 -->
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お問い合わせの種類</th>
                <td class="confirm-table__text">
                    <!-- 表示用 -->
                    <input type="text" name="category_id"value="{{ $contact['category_name'] }}" readonly/>
                    <!-- 保存用 -->
                    <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                </td>
            </tr>
<!-- お問い合わせ内容 -->
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お問い合わせ内容</th>
                <td class="confirm-table__text">
                    <textarea name="content" readonly>{{ $contact['content'] }}</textarea>
                </td>
            </tr>
            </table>
        </div>

        <!-- POST用 hidden -->
        <input type="hidden" name="contact_id" value="{{ $contact['id'] ?? '' }}">

        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
<!-- 修正リンク -->
            <a href="{{ route('index') }}" class="btn-edit">修正</a>
        </div>
    </form>
</div>

@endsection