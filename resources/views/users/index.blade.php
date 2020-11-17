@extends('layouts.appLayouts')

@section('main')

<h1>{{ $user->name }}</h1>
<p>{{ $user->email }}</p>

@endsection
