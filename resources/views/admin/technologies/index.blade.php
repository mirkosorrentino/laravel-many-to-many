@extends('layouts.admin')

@section('content')
@include('partials.session_message')
    <h1 class="text-uppercase text-center">Lista delle Tecnologie</h1>
<div class="d-flex justify-content-between">
    <div>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">
            <i class="fa-solid fa-house"></i> Torna alla home
        </a>
    </div>
    <div>
        <a href="{{ route('admin.technologies.create') }}" class="btn btn-primary">
            <i class="fa-solid fa-square-plus"></i> Aggiungi una nuova tecnologia
        </a>
    </div>
</div>

<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">Data di nascita</th>
            <th scope="col">Creatore</th>
            <th scope="col">Actions</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($technologies as $technology)
            <tr>
                <th scope="row">{{ $technology->id }}</th>
                <td>{{ $technology->title }}</td>
                <td>{{ $technology->slug }}</td>
                <td>{{ $technology->date_of_birth }}</td>
                <td>{{ $technology->creator }}</td>
                <td>
                    {{-- show button --}}
                    <a href="{{ route('admin.technologies.show', $technology->slug) }}" class="btn btn-success">
                        <i class="fa-solid fa-eye"></i>
                    </a>

                    {{-- edit button --}}
                    <a href="" class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    {{-- delete button --}}
                    <form class="d-inline-block" action="{{ route('admin.technologies.destroy', $technology->slug) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
@endsection