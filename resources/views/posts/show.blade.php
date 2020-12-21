@extends('layouts.appLayouts')

@section('main')

  <div class="posts-index-item">
    <h1>{{ $post->user->name }}</h1>
    <p class="lead">{!! nl2br(e($post->content)) !!}</p>
  </div>





@endsection
