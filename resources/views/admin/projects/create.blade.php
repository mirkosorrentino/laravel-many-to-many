@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Aggiungi un nuovo progetto</h2>

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Annulla</a>

        </form>
    </div>
@endsection