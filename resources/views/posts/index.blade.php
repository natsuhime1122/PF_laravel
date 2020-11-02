@extends('layouts.appLayouts')

@section('main')

  @foreach ($posts as $post)
    <div class="posts-index-item">
      {{-- 投稿内容 --}}
      <h1>{{ $post->user->name }}</h1>
      <p class="lead">{{ $post->content }}</p>
      <a href="/posts/{{$post->id}}">詳細を表示</a>
    </div>
  @endforeach

















@endsection
