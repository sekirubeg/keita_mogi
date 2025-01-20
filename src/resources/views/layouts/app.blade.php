<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="/"><img src="{{ asset('storage/logo.svg') }}" alt="coachtech"></a>
            <!-- 条件分岐 -->
            @if (request()->is('login') || request()->is('register'))
                <!-- ロゴだけ表示（ログイン、会員登録ページ） -->
            @else
                <!-- 検索フォームとナビゲーションメニュー -->
                
                <form action="" method="GET" class="search-form">
                    <input type="text" name="query" placeholder="なにをお探しですか？" class="search-input">
                </form>
                 @auth
                 <nav class="header-nav">
                    <form method="POST" action="{{ route('logout') }}" class="logout">
                        @csrf
                        <button type="submit" class="logout">ログアウト</button>
                    </form>
                    <a href="">マイページ</a>
                    <a href="" class="sell-btn">出品</a>
                </nav>
                @else
                <nav class="header-nav">
                    <a href="/login">ログイン</a>
                    <a href="">マイページ</a>
                    <a href="" class="sell-btn">出品</a>
                </nav>
                @endauth
            @endif
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>