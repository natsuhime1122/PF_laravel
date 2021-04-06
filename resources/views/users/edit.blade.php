@extends('layouts.appLayouts')

@section('main')
  <h1>編集</h1>
  <form action="{{ url('/users', $user->id) }}" method="post">
    @csrf
    {{ method_field('patch') }}
    <div class="posts-index-item">
      @error('user_name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <input type="hidden" name="user_id" value="{{ $user->id }}">
      <h2>ユーザー名</h2>
      <input type="text" name="user_name" id="inputName" class="form-control @error('user_name') is-invalid @enderror" value="{{ $user->name }}">
      <input class="btn btn-primary" type="submit" value="更新">
    </div>
  </form>

@endsection
