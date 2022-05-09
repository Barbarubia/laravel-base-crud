@extends('template.base')

@section('pageTitle', 'Comics')

@section('mainContent')
    <div class="container mt-5 mb-5">
        <div class="row g-4">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="card h-100">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Read more...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
