@extends('layouts.admin')

@section('content')
    <h1>{{ $proj->title }}</h1>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <h6>Category: {{ $proj->category ? $proj->category->name : 'Senza categoria' }}
        </td>
    </h6>
    <img src="{{ $proj->image }}" alt="{{ $proj->title }}">
    <p>{!! $proj->body !!}</p>
    @if ($proj->tags && count($proj->tags) > 0)
        <div>
            @foreach ($proj->tags as $tag)
                <a href="{{ route('admin.tags.show', $tag->slug) }}"
                    class="badge rounded-pill text-bg-info">{{ $tag->name }}</a>
            @endforeach
        </div>
    @endif
@endsection
