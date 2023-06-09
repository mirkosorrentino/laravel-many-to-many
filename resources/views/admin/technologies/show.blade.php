@extends('layouts.admin')

@section('content')
<main class="pt-3">
    <a href="{{ route('admin.technologies.index') }}" class="btn btn-primary"><i class="fa-solid fa-circle-left"></i> Torna alla lista dei progetti</a>
    <h1 class="text-center">{{ $technology->title }}</h1>
    <div class="text-end">
        <span>{{ $technology->slug }}</span>
    </div>
    <ul>
        <li>Creatore: {{ $technology->creator }}</li>
        <li>Data di nascita: {{ $technology->date_of_birth }}</li>
    </ul>
    <p class="mt-4">{{ $technology->description }}</p>
</main>
@endsection