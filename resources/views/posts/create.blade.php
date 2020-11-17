@extends('layouts.appLayouts')

@section('main')

  <h1>新規投稿</h1>
  <form action="/posts/store" method="post">
    @csrf
    <div class="posts-index-item">
      @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <textarea name="content" id="textarea1" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
      <input type="submit">
    </div>
  </form>
@endsection
