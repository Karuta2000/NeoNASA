@extends('layout')

@section('content')
    <h1>Edit Galaxy</h1>
    <form action="{{ route('galaxies.update', $galaxy->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $galaxy->name }}" required>
        <br>
        <label for="size">Size:</label>
        <input type="text" name="size" id="size" value="{{ $galaxy->size }}" required>
        <br>
        <label for="image_url">Image
        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" id="image_url" value="{{ $galaxy->image_url }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
@endsection

