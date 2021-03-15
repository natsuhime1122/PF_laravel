@extends('layouts.appLayouts')

@section('main')

  <div class="content">
    <div class="post-item">
      <h2>{{ $post->user->name }}</h2>
      <p class="lead">{!! nl2br(e($post->content)) !!}</p>
    </div>
    <h1 class="comment_count">コメント({{ $comment_count }})</h1>
    {{-- コメント入力 --}}
    <form action="/comments/store" method="post">
      @csrf
      <div class="comment-item">
        @error('content')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <textarea name="content" id="textarea1" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
        <input type="submit" class="btn btn-primary">
      </div>
    </form>
    {{-- コメント一覧 --}}
    @foreach ($comments as $comment)
      <div class="comment-item">
        <h2>{!! nl2br(e($comment->user->name)) !!}</h2>
        <p class="lead">{!! nl2br(e($comment->content)) !!}</p>
        <div class="btn-group float-right">
          @if( $comment->user_id == $user_id )
            {{-- 編集ボタン --}}
            <form action="{{ action('CommentController@edit', $comment->id) }}" method="GET">
              @csrf
              <button type="submit" class="btn btn-primary">編集</button>
            </form>
            {{-- 削除ボタン --}}
            <form method="post" action="{{ route('commentDelete', $comment->id) }}" id="deleteForm" value="{{  $comment->id  }}">
              @csrf
              <button type="button" class="btn btn-danger">削除</button>
            </form>
          @endif
        </div>
      </div>
    @endforeach
    {{ $comments->links() }}
  </div>


@endsection
