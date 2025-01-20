@extends('layouts.app')

@section('title', 'ログイン')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="form-container">
    <h2 class="form-title">ログイン</h2>
    <form action="/login" method="post" class="login-form">
        @csrf
        <div class="form-group">
            <label for="email">ユーザー名 / メールアドレス</label>
            <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger">ログインする</button>
        </div>
    </form>
    <div class="register-link">
        <a href="/register">会員登録はこちら</a>
    </div>
</div>
@endsection