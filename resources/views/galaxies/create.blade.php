@extends('layout')

@section('content')
    <h1>Add Galaxy</h1>
    <form action="{{ route('galaxies.store') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="size">Size:</label>
        <input type="text" name="size" id="size" required>
        <br>
        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" id="image_url" required>
        <br>
        <button type="submit">Add</button>
    </form>
@endsection
