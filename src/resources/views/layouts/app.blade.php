<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <!-- <div class="header-utilities"> -->
<!-- ロゴは固定-->
        <a class="header__logo"href="/">
        FashionablyLate
        </a>
<!-- 各ページで差し替え可能なリンク -->
      <nav>
        <ul class="header-nav">
            @yield('header-link')
        </ul>
      </nav>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>
</html>