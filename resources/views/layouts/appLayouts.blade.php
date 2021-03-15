<!doctype html>
<html lang="ja">
<head>
  <title>LaravelTweet</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
    @auth
      <a class="navbar-brand" href="/posts/index">LaravelTweet</a>
    @else
      <a class="navbar-brand" href="/">LaravelTweet</a>
    @endauth
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#responsiveMenu" aria-controls="responsiveMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="responsiveMenu">
      <ul class="navbar-nav">
        @auth
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/users/index') }}">ユーザーページ</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/posts/create') }}">新規投稿</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('ログアウト') }}
            </a>
          </li>
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
  <script src="{{ asset('/js/Api/delete_post.js') }}" charset="utf-8"></script>
  <script src="{{ asset('/js/Api/delete_comment.js') }}" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
