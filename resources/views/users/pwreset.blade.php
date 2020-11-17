<!doctype html>
<html lang="ja" >
<head>
  <title>laravelTweetにログイン</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/users/login.css') }}">
</head>
<body  class="text-center">
  <a id="skippy" class="sr-only sr-only-focusable" href="#content">
    <div class="container">
      <span class="skiplink-text">Skip to main content</span>
    </div>
  </a>

  <form class="form-signin" method="POST" action="{{ route('password.update') }}">
    @csrf
    <img class="mb-4" src="{{ asset('img/bootstrap-solid.svg') }}" width="72" height="72">
    <!-- <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1> -->
    <h1 class="h3 mb-4 font-weight-normal">パスワードをリセットする</h1>
    <!-- <label for="inputEmail" class="sr-only">Email address</label> -->
    <label for="inputEmail" class="sr-only @error('email') is-invalid @enderror">
      メールアドレス
    </label>
    @error('email')
      <span class="invalid-feedback my-2" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
    <!-- <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> -->
    <input class="form-control" name="email" type="email" id="inputEmail" placeholder="メールアドレス" required autofocus>
    <button class="btn btn-lg btn-primary btn-block" type="submit">メールを送る</button>
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
