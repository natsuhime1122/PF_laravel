@extends('layouts.appLayouts')

@section('main')
<div class="posts-index-item">
  <h1>{{ $user->name }}</h1>
  <p>{{ $user->email }}</p>
  <div class="btn-group float-right">
    <form action="{{ action('UserController@edit', $user->id) }}" method="GET">
      @csrf
      <button type="submit" class="btn btn-primary">編集</button>
    </form>
  </div>
</div>
@endsection
