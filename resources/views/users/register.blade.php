<!doctype html>
<html lang="ja" >
<head>
  <title>Signin laravelTweet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link href="{{ asset('css/users/register.css') }}" rel="stylesheet">
</head>
<body  class="text-center" >
  <a id="skippy" class="sr-only sr-only-focusable" href="#content">
    <div class="container">
      <span class="skiplink-text">Skip to main content</span>
    </div>
  </a>

  <form class="form-signin" method="POST" action="{{ route('register') }}">
    @csrf
    <img class="mb-4" src="{{ asset('img/bootstrap-solid.svg') }}" alt="" width="72" height="72">
    <!-- <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1> -->
    <h1 class="h3 mb-3 font-weight-normal">新規登録</h1>
    <!-- <label for="inputEmail" class="sr-only">Email address</label> -->
		<label for="inputName" class="sr-only">
      ユーザー名
    </label>
    @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
		<input type="text" id="inputName" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="ユーザー名" value="{{ old('name') }}" required autocomplete="name" autofocus>

    <label for="inputEmail" class="sr-only">
      メールアドレス
    </label>
    @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
    <!-- <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> -->
    <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="メールアドレス" value="{{ old('email') }}" required autocomplete="email" autofocus>
    <!-- <label for="inputPassword" class="sr-only">Password</label> -->
    <label for="inputPassword" class="sr-only">
      パスワード
    </label>
    @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
    <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
    <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="パスワード" required autocomplete="new-password">

		<label for="inputPasswordConfirm" class="sr-only">
      パスワード(確認)
    </label>
		<input type="password" id="inputPasswordConfirm" class="form-control" name="password_confirmation" placeholder="パスワード(確認)" required autocomplete="new-password">

    {{-- <div class="checkbox my-3">
      <label>
        <!-- <input type="checkbox" value="remember-me"> Remember me -->
        <input type="checkbox" value="remember-me"> 記憶する
      </label>
    </div> --}}
    <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> -->
    <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">登録</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
  </form>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="{{ asset('/js/jquery-slim.min.js') }}"><\/script>')
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
