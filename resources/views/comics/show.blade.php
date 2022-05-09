@extends('template.base')

@section('pageTitle', $comic->title)

@section('mainContent')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-4">
                <img class="w-100" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="col-8 d-flex flex-column justify-content-between">
                <div>
                    <h2>{{ $comic->title }}</h2>
                    <h5>(Series: {{ $comic->series }} - Type: {{ $comic->type }})</h5>
                    <p>{{ $comic->description }}</p>
                </div>
                <div>
                    <h6>(Price: {{ $comic->price }} - Available from: {{ $comic->sale_date }})</h6>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <a href="{{ route('comics.index') }}" class="btn btn-primary fw-bold">Return to Comics Page</a>
            </div>
        </div>
    </div>
@endsection
