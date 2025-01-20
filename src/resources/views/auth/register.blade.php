@extends('layouts.app')

@section('title', '会員登録')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="form-container">
    <h2 class="form-title">会員登録</h2>
    <form action="/register" method="post" class="register-form">
        @csrf
        <div class="form-group">
            <label for="name">ユーザー名</label>
            <input type="text" name="name" id="name" class="form-control"  value="{{ old('name') }}">
            @error('name')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" name="email" id="email" class="form-control"  value="{{ old('email') }}">
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" name="password" id="password" class="form-control" >
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="password_confirmation">確認用パスワード</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" >
            @error('password_confirmation')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger">会員登録する</button>
        </div>
    </form>
    <div class="login-link">
        <a href="/login">ログインはこちら</a>
    </div>
</div>
@endsection
