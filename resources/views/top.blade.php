@extends('layouts.appLayouts')

@section('main')
  <div class="posts-index-item">
    <h1>LaravelTweetをはじめよう</h1>
    <a href="{{ route('login') }}"><button type="submit" class="btn btn-primary">ログイン</button></a>
    <a href="{{ route('register') }}"><button type="submit" class="btn btn-primary">アカウント新規作成</button></a>
  </div>
@endsection
