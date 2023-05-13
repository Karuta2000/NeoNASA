@extends('layout')

@section('content')
    <div class="card-header bg-dark text-white">
        <h1>Add Space Station</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('space_stations.store') }}" method="post">
            @csrf
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <br>
            <label for="gps_3d_coordinates" class="form-label">3D GPS Coordinates:</label>
            <input type="text" class="form-control" name="gps_3d_coordinates" id="gps_3d_coordinates" required>
            <br>
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" name="description" id="description"></textarea>
            <br>
            <label for="image_url" class="form-label">Image URL:</label>
            <input type="text" class="form-control" name="image_url" id="image_url" required>
            <br>
            <label for="galaxy_id" class="form-label">Galaxy:</label>
            <select name="galaxy_id" id="galaxy_id" class="form-control" required>
                @foreach ($galaxies as $galaxy)
                    <option value="{{ $galaxy->id }}">{{ $galaxy->name }}</option>
                @endforeach
            </select>
            <br>
            <button class="btn btn-dark mt-3" type="submit">Add</button>
        </form>
    </div>
@endsection
