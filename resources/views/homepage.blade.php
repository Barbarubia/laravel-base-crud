@extends('template.base')

@section('pageTitle', 'Homepage')

@section('mainContent')
    <div class="container mt-5 mb-5">
        <a href="{{ route('comics.index') }}" class="btn btn-primary fw-bold">Go to Comics Page</a>
    </div>
@endsection
