@extends('layout')

@section('content')
<div class="card-header bg-dark text-white">
    <h1 class="card-title">{{ $galaxy->name }}</h1>
</div>

    <p>Size: {{ $galaxy->size }}</p>
    <img class="" src="{{ $galaxy->image_url }}" alt="{{ $galaxy->name }}">

    <a href="{{ route('galaxies.edit', $galaxy->id) }}">Edit</a>
    <form action="{{ route('galaxies.destroy', $galaxy->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
