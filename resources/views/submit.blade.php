@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form action="/submit" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="paste_data">txt</label>
                    <textarea class="form-control @error('paste_data') is-invalid @enderror" id="paste_data" name="paste_data" placeholder="paste_data">{{ old('paste_data') }}</textarea>
                    @error('paste_data')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Paste</button>
            </form>
        </div>
    </div>
@endsection