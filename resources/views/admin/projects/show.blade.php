@extends('layouts.admin')

@section('content')
<main class="pt-3">
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary"><i class="fa-solid fa-circle-left"></i> Torna alla lista dei progetti</a>
    <h1 class="text-center">{{ $project->title }}</h1>
    <div class="d-flex justify-content-between">
        @if ($project->type)
            <span>Tipo di progetto: {{ $project->type->title }}</span>
        @else
            <span>Non è specificato il tipo di progetto</span>
        @endif
        <span>{{ $project->slug }}</span>
    </div>
    <p class="mt-4">{{ $project->description }}</p>
</main>
@endsection