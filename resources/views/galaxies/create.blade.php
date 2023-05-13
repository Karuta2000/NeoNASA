@extends('layout')

@section('content')
    <div class="card-header bg-dark text-white">
        <h1>Add Galaxy</h1>
    </div>

    <div class="card-body">

        <form action="{{ route('galaxies.store') }}" method="post">
            @csrf
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" id="name" required>
            <br>
            <label for="size" class="form-label">Size:</label>
            <input type="text" class="form-control" name="size" id="size" required>
            <br>
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" name="description" id="description"></textarea>
            <br>
            <label for="image_url" class="form-label">Image URL:</label>
            <input type="text" class="form-control" name="image_url" id="image_url" required>
            <br>
            <button class="btn btn-dark" type="submit">Add</button>
        </form>
    </div>
@endsection
