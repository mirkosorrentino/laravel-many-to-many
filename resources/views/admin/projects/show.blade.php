@extends('layouts.admin')

@section('content')
<main class="pt-3">
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary"><i class="fa-solid fa-circle-left"></i> Torna alla lista dei progetti</a>
    <h1 class="text-center">{{ $project->title }}</h1>
    <div class="text-end">
        {{ $project->slug }}
    </div>
    <p class="mt-4">{{ $project->description }}</p>
</main>
@endsection