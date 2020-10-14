@extends('layouts.appLayouts')

@section('main')

  @foreach ($posts as $post)
    <div class="posts-index-item">
      <h1>User</h1>
      <p class="lead">{{ $post->content }}</p>
    </div>
  @endforeach

















@endsection
