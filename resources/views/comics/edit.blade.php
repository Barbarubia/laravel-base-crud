@extends('template.base')

@section('pageTitle', 'Edit comic')

@section('mainContent')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('comics.update', $comic->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description', $comic->description) }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image Thumb - Insert a valid URL. Ex: https://picsum.photos/192/291</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                        @error('thumb')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" step="0.01" name="price" value="{{ $comic->price }}">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                        @error('series')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                        @error('sale_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Comic Type</label>
                        <select class="form-select" name="type">
                            @php
                                $comic_book = $comic->type == 'comic book' ? 'selected' : '';
                                $graphic_novel = $comic->type == 'graphic novel' ? 'selected' : '';
                            @endphp
                            <option value="">Select comic type</option>
                            <option value="comic book"  {{ $comic_book }}>Comic Book</option>
                            <option value="graphic novel" {{ $graphic_novel }}>Graphic Novel</option>
                            @error('type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div class="row mt-3 mb-5">
                    <div class="col">
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Go back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
