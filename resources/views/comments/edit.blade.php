@extends('layouts.appLayouts')

@section('main')
  <h1>編集</h1>
  <form action="{{ url('/comments', $comment->id) }}" method="post">
    @csrf
    {{ method_field('patch') }}
    <div class="posts-index-item">
      @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <input type="hidden" name="post_id" value="{{ $comment->post_id }}">
      <textarea name="content" id="textarea1" class="form-control @error('content') is-invalid @enderror">{{ $comment->content }}</textarea>
      <input type="submit" class="btn btn-primary" value="更新">
    </div>
  </form>

@endsection
