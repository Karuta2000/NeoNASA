@extends('layout')

@section('content')
    <h1>{{ $galaxy->name }}</h1>
    <p>Size: {{ $galaxy->size }}</p>
    <img src="{{ $galaxy->image_url }}" alt="{{ $galaxy->name }}">

    <a href="{{ route('galaxies.edit', $galaxy->id) }}">Edit</a>
    <form action="{{ route('galaxies.destroy', $galaxy->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
