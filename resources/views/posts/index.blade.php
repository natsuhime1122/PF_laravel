@extends('layouts.appLayouts')

@section('main')
  <div class="posts">
  @foreach ($posts as $post)
    <div class="posts-index-item">
      {{-- 投稿内容 --}}
      <h1>{{ $post->user->name }}</h1>
      <p class="lead">{!! nl2br(e($post->content)) !!}</p>
      <a href="/posts/{{$post->id}}">詳細を表示</a>
      <div class="btn-group float-right">
        @if( $post->user_id == $user_id )
          {{-- 編集ボタン --}}
          <form action="{{ action('PostController@edit', $post->id) }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-primary">編集</button>
          </form>
          {{-- 削除ボタン --}}
          <form method="post" action="{{ route('delete', $post->id) }}" id="deleteForm" value="{{  $post->id  }}">
            @csrf
            <button type="button" class="btn btn-danger">削除</button>
          </form>
        @endif
      </div>
    </div>
  @endforeach
  </div>

















@endsection
