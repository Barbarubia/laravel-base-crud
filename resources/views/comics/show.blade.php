@extends('template.base')

@section('pageTitle', $comic->title)

@section('mainContent')
    <h2>{{ $comic->title }}</h2>
    <p>{{ $comic->description }}</p>
@endsection
