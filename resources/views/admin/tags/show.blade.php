@extends('layouts.admin')
@section('content')
    <h1>Tag</h1>
    <p>The tag name is: {{ $tag->name }}</p>
    @foreach ($tag->projects as $proj)
        <p>{{ $proj->title }}</p>
    @endforeach
@endsection
