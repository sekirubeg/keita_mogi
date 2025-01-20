@extends('layouts.app')

@section('title', 'プロフィール設定')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection
@section('content')
<div class="container">
    <h1 class="title">プロフィール設定</h1>

    <form action="" method="POST">
        @csrf
        
        <!-- プロフィール画像 -->
        <div class="form-group profile-image">
            <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('storage/default-profile.png') }}"  class="profile-preview">
            <label class="image-upload-btn">
                <input type="file" name="profile_image" accept="image/*" hidden>
                画像を選択する
            </label>
        </div>

        <!-- ユーザー名 -->
        <div class="form-group">
            <label for="name">ユーザー名</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- 郵便番号 -->
        <div class="form-group">
            <label for="postal_code">郵便番号</label>
            <input type="text" name="postal_code" id="postal_code" class="form-control" value="{{ old('postal_code', $user->postal_code) }}">
            @error('postal_code')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- 住所 -->
        <div class="form-group">
            <label for="address">住所</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $user->address) }}">
            @error('address')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- 建物名 -->
        <div class="form-group">
            <label for="building_name">建物名</label>
            <input type="text" name="building_name" id="building_name" class="form-control" value="{{ old('building_name', $user->building_name) }}">
            @error('building_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- 更新ボタン -->
        <div class="form-group">
            <button type="submit" class="btn btn-danger">更新する</button>
        </div>
    </form>
</div>
@endsection
