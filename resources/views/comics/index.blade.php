@extends('template.base')

@section('pageTitle', 'Comics')

@section('mainContent')
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></li>
        @endforeach
    </ul>
@endsection