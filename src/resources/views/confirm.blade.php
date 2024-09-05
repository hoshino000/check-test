@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('title', 'Confirm')

@section('content')
<div class="contact-form__content">
    <table class="table-confirm">
        <tr>
            <td class="table-confirm__item">お名前</td>
            <td class="table-confirm__content">{{ $contact['first_name'] }} {{ $data['last_name'] }}</td>
        </tr>
        <tr>
            <td class="table-confirm__item">性別</td>
            <td class="table-confirm__content">
                {{ $data['gender'] == 1 ? '男性' : ($contact['gender'] == 2 ? '女性' : 'その他') }}
            </td>
        </tr>
        <tr>
            <td class="table-confirm__item">メールアドレス</td>
            <td class="table-confirm__content">{{ $contact['email'] }}</td>
        </tr>
        <tr>
            <td class="table-confirm__item">電話番号</td>
            <td class="table-confirm__content">{{ $contact['tell'] }}</td>
        </tr>
        <tr>
            <td class="table-confirm__item">住所</td>
            <td class="table-confirm__content">{{ $contact['address'] }}</td>
        </tr>
        <tr>
            <td class="table-confirm__item">建物名</td>
            <td class="table-confirm__content">{{ $contact['building'] ?? 'なし' }}</td>
        </tr>
        <tr>
            <td class="table-confirm__item">お問い合わせの種類</td>
            <td class="table-confirm__content">{{ $contacts->find($contact['category_id'])->name }}</td>
        </tr>
        <tr>
            <td class="table-confirm__item">お問い合わせ内容</td>
            <td class="table-confirm__content">{{ $contact['detail'] }}</td>
        </tr>
    </table>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
        <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
        <input type="hidden" name="email" value="{{ $contact['email'] }}">
        <input type="hidden" name="tell" value="{{ $contact['tell'] }}">
        <input type="hidden" name="address" value="{{ $contact['address'] }}">
        <input type="hidden" name="building" value="{{ $contact['building'] }}">
        <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
        <input type="hidden" name="detail" value="{{ $contact['detail'] }}">

        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
            <a href="{{ route('contacts.form') }}">修正</a>
        </div>
    </form>
</div>
@endsection