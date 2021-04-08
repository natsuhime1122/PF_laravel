@extends('layouts.appLayouts')

@section('main')
  <div class="container">
    <h1>投稿一覧</h1>
    <form action="/posts/store" method="post">
      @csrf
      <div class="posts-index-item">
        @error('content')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <textarea name="content" id="textarea1" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
        <input type="submit" class="btn btn-primary">
      </div>
    </form>
    @foreach ($posts as $post)
      <div class="posts-index-item">
        {{-- 投稿内容 --}}
        <a href="/users/{{ $post->user->id }}">
          <h2>{{ $post->user->name }}</h2>
        </a>
        <a href="/posts/{{ $post->id }}">
          <p class="lead">{!! nl2br(e(Str::limit($post->content, 70))) !!}</p>
        </a>
        <div class="btn-group float-right">
          @if( $post->user_id == $user_id )
            {{-- 編集ボタン --}}
            <form action="{{ action('PostController@edit', $post->id) }}" method="GET">
              @csrf
              <button type="submit" class="btn btn-primary">編集</button>
            </form>
            {{-- 削除ボタン --}}
            <form method="post" action="{{ route('delete', $post->id) }}" id="deleteForm" value="{{ $post->id }}">
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
