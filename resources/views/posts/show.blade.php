@extends('layouts.appLayouts')

@section('main')

  <div class="posts-index-item">
    <h1>{{ $post->user->name }}</h1>
    <p class="lead">{!! nl2br(e($post->content)) !!}</p>
    <div class="btn-group float-right">
      @if( $post->user_id == $user_id )
        {{-- 編集ボタン --}}
        <form action="{{ action('PostController@edit', $post->id) }}" method="GET">
          @csrf
          <button type="submit" class="btn btn-primary">編集</button>
        </form>
        {{-- 削除ボタン --}}
        <form action="{{ url('/posts', $post->id) }}" method="post">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">削除</button>
        </form>
      @endif
    </div>
  </div>





@endsection
