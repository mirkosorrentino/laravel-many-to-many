@extends('layouts.admin')

@section('content')
<h1>Lista dei Progetti</h1>
<div class="text-end">
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
        <i class="fa-solid fa-square-plus"></i> Aggiungi un nuovo progetto
    </a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">Actions</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->title }}</td>
                <td>{{ $project->slug }}</td>
                <td>
                    <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-success">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
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