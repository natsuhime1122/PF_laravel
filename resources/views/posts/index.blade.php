@extends('layouts.appLayouts')

@section('main')

  @foreach ($posts as $post)
    <div class="posts-index-item">
      <h1>{{ $post->user->name }}</h1>
      <p class="lead">{{ $post->content }}</p>
      <a href="{{ action('PostController@edit', $post->id) }}">編集</a>
      <i class="fas fa-trash-alt"></i>
    </div>
  @endforeach

















@endsection
