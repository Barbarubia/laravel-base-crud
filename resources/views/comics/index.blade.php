@extends('template.base')

@section('pageTitle', 'Comics')

@section('mainContent')
    <div class="container mt-5 mb-5">
        <div class="row mb-5">
            <div class="col d-flex justify-content-end">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Add a new comic</a>
            </div>
        </div>
        <div class="row g-4">
            @foreach ($comics as $comic)
                <div class="col-3">
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

        {{ $comics->links() }}
    </div>
@endsection
