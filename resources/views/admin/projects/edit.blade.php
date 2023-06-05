@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Aggiorna il progetto</h2>

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}">
            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3">"{{ old('description', $project->description) }}"</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>

        </form>
    </div>
@endsection