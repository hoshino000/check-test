@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('title', 'register')

@section('content')
<form class="form" action="/register" method="post">
    @csrf
    <div class="form__group">
        <div class="form__group-title">
            <p class="form__label--item">お名前</p>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="name" value="{{ $user['name'] }}" placeholder="例:山田　太郎" />
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
        <div class="form__group-title">
            <p class="form__label--item">メールアドレス</p>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="email" value="{{ $user['email'] }}" placeholder="例:test@example.com" />
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
        <div class="form__group-title">
            <p class="form__label--item">パスワード</p>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="password" value="{{ $user['password'] }}" placeholder="例:coachtech1106" />
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
    </div>
    <div class="form__button">
        <button class="form__button-submit" type="submit">登録</button>
    </div>
</form>

@endsection