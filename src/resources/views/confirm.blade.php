@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm-form">
  <h2 class="confirm-form__heading content__headeing">Confirm</h2>
  <div class="confirm-form__inner">
    <form action="/thanks" method="POST">
    @csrf
<!-- 名前 -->
      <table class="confirm-form__table">
        <tr class="confirm-form__row">
          <th class="confirm-form__label">お名前</th>
          <!-- ユーザーが確認（見えるように） -->
          <td class="confirm-form__data">{{ $contacts['first_name'] }}&nbsp;{{ $contacts['last_name'] }}</td>
          <!-- 画面には表示されないけど、サーバーに送るためのデータ -->
          <input type="hidden" name="first_name" value="{{ $contacts['first_name'] }}">
          <input type="hidden" name="last_name" value="{{ $contacts['last_name'] }}">
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