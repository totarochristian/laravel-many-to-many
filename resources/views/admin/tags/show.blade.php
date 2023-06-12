@extends('layouts.admin')
@section('content')
    <h1>{{ $tag->name }}</h1>
    <p>
        <h4>Progetti che utilizzano questa tecnologia:</h4>
        <ul class="fs-5">
            @foreach ($tag->projects as $proj)
                <li><a href="{{ route('admin.projects.show', $proj->slug) }}">{{ $proj->title }}</a></li>
            @endforeach
        </ul>
    </p>
@endsection
