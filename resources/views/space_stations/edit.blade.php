@extends('layout')

@section('content')
    <h1>Edit Space Station</h1>
    <form action="{{ route('space_stations.update', $space_station->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $space_station->name }}" required>
        <br>
        <label for="gps_3d_coordinates">3D GPS Coordinates:</label>
        <input type="text" name="gps_3d_coordinates" id="gps_3d_coordinates" value="{{ $space_station->gps_3d_coordinates }}" required>
        <br>
        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" id="image_url" value="{{ $space_station->image_url }}" required>
        <br>
        <label for="galaxy_id">Galaxy:</label>
        <select name="galaxy_id" id="galaxy_id" required>
            @foreach($galaxies as $galaxy)
                <option value="{{ $galaxy->id }}" {{ $space_station->galaxy_id == $galaxy->id ? 'selected' : '' }}>{{ $galaxy->name }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Update</button>
    </form>
@endsection
