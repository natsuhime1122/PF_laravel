<!doctype html>
<html lang="ja">
<head>
  <title>LaravelTweet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/posts.css') }}">
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
  <a id="skippy" class="sr-only sr-only-focusable" href="#content">
    <div class="container">
      <span class="skiplink-text">Skip to main content</span>
    </div>
  </a>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">LaravelTweet</a>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        @auth
          <a class="nav-link" href="{{ url('/users/index') }}">ユーザーページ</a>
          <a class="nav-link" href="{{ url('/posts/index') }}">投稿一覧</a>
          <a class="nav-link" href="{{ url('/posts/create') }}">新規投稿</a>
          <a class="nav-link" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('ログアウト') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        @else
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('login') }}">ログイン</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('register') }}">新規登録</a>
            </li>
          @endif
        @endauth
      </ul>
    </div>
  </nav>

  <main role="main" class="container">
    @yield('main')
  </main><!-- /.container -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="{{ asset('js/jquery-slim.min.js') }}"><\/script>')
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
