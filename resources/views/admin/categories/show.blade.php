@extends('layouts.admin')
@section('content')
    <h1>{{ $category->name }}</h1>
    <p>
        <h4>Progetti appartenenti a questa categoria:</h4>
        <ul class="fs-5">
            @foreach ($category->projects as $proj)
                <li><a href="{{ route('admin.projects.show', $proj->slug) }}">{{ $proj->title }}</a></li>
            @endforeach
        </ul>
    </p>
@endsection
