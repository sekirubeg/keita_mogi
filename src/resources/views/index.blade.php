@extends('layouts.app')

@section('title', '商品一覧')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="tabs">
        <a href="?tab=recommend" class="tab active">おすすめ</a>
        <a href="?tab=mylist" class="tab">マイリスト</a>
    </div>

    <div class="products-grid">
        @foreach ($products as $product)
            <div class="product-card">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="product-image">
                <p class="product-name">{{ $product->name }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection