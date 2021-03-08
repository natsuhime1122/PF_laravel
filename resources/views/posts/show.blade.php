@extends('layouts.appLayouts')

@section('main')

  <div class="content">
    <div class="post-item">
      <h2>{{ $post->user->name }}</h2>
      <p class="lead">{!! nl2br(e($post->content)) !!}</p>
    </div>
    <h1>コメント({{ $comment_count }})</h1>
    {{-- {{ var_dump($comments) }} --}}
    @foreach ($comments as $comment)
      <div class="comment-item">
        <h2>{!! nl2br(e($comment->user->name)) !!}</h2>
        <p class="lead">{!! nl2br(e($comment->content)) !!}</p>
      </div>
    @endforeach
    {{ $comments->links() }}
  </div>


@endsection
