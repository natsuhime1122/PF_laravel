@extends('layouts.appLayouts')

@section('main')
<div class="posts-index-item">
  <h1>{{ $user->name }}</h1>
  <p>{{ $user->email }}</p>
</div>
@endsection
