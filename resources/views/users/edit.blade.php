{{-- @extends('layouts.appLayouts')

@section('main')
  <h1>編集</h1>
  <form action="{{ url('/users', $user->id) }}" method="post">
    @csrf
    {{ method_field('patch') }}
    <div class="posts-index-item">
      @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <textarea name="content" id="textarea1" class="form-control @error('content') is-invalid @enderror">{{ $user->name }}</textarea>
      <input type="submit" value="更新">
    </div>
  </form>

@endsection --}}
