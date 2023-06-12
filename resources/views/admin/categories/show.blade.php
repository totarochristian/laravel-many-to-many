@extends('layouts.admin')
@section('content')
    <h1>Category</h1>
    <p>The category name is: {{ $category->name }}</p>
    @foreach ($category->projects as $proj)
        <p>{{ $proj->title }}</p>
    @endforeach
@endsection
