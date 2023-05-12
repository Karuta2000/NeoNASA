@extends('layout')

@section('content')
    <h1>{{ $space_station->name }}</h1>
    <p>3D GPS Coordinates: {{ $space_station->gps_3d_coordinates }}</p>
    <img src="{{ $space_station->image_url }}" alt="{{ $space_station->name }}">

    <p>Galaxy: <a href="{{ route('galaxies.show', $space_station->galaxy->id) }}">{{ $space_station->galaxy->name }}</a></p>

    <a href="{{ route('space_stations.edit', $space_station->id) }}">Edit</a>
    <form action="{{ route('space_stations.destroy', $space_station->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
