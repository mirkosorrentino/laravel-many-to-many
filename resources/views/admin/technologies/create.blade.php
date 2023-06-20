@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Aggiungi una nuova tecnologia</h2>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('admin.technologies.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Nome della tecnologia</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">{{ old('description') }}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="creator" class="form-label">Creatore</label>
                <textarea class="form-control @error('creator') is-invalid @enderror" name="creator" id="creator" rows="3">{{ old('creator') }}</textarea>
                @error('creator')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Data di nascita</label>
                <textarea class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" id="date_of_birth" rows="3">{{ old('date_of_birth') }}</textarea>
                @error('date_of_birth')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
            <a href="{{ route('admin.technologies.index') }}" class="btn btn-danger">Annulla</a>

        </form>
    </div>
@endsection