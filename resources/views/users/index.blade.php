@extends('layouts.appLayouts')

@section('main')
<div class="container">
  <div class="posts-index-item">
    <h1>{{ $user->name }}</h1>
    <div class="btn-group float-right">
      @if( $user->id === $auth_id)
        <form action="{{ action('UserController@edit', $user->id) }}" method="GET">
          @csrf
          <button type="submit" class="btn btn-primary">ユーザー名を編集</button>
        </form>
      @endif
    </div>
  </div>
  <h2>投稿</h2>
  @foreach ($posts as $post)
  <div class="posts-index-item">
    {{-- 投稿内容 --}}
    <h2>{{ $post->user->name }}</h2>
    <a href="/posts/{{ $post->id }}">
      <p class="lead">{!! nl2br(e(Str::limit($post->content, 70))) !!}</p>
    </a>
    <div class="btn-group float-right">
      @if( $post->user_id == $auth_id )
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
  {{ $posts->links() }}
</div>
@endsection
