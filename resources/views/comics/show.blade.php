@extends('template.base')

@section('pageTitle', $comic->title)

@section('mainContent')
    <div class="container mt-5 mb-5">
        <div class="row mb-5">
            <div class="col d-flex justify-content-end">
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary mx-3">Edit comic</a>
                {{-- <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete Comic</button>
                </form> --}}

                {{-- BONUS: popup per confermare eliminazione (usato modal di bootstrap) --}}
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Delete comic</button>

                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">You're deleting this comic!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure?<br>Press YES to confirm, NO to cancel.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">YES</button>
                                </form>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">NO</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
                    <h6>(Price: US$ {{ $comic->price }} - Available from: {{ $comic->sale_date }})</h6>
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
