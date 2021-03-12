@extends('layouts.appLayouts')

@section('main')

  <div class="content">
    <div class="post-item">
      <h2>{{ $post->user->name }}</h2>
      <p class="lead">{!! nl2br(e($post->content)) !!}</p>
    </div>
    <h1>コメント({{ $comment_count }})</h1>
    {{-- {{ var_dump($comments) }} --}}
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
    @foreach ($comments as $comment)
      <div class="comment-item">
        <h2>{!! nl2br(e($comment->user->name)) !!}</h2>
        <p class="lead">{!! nl2br(e($comment->content)) !!}</p>
      </div>
    @endforeach
    {{ $comments->links() }}
  </div>


@endsection
