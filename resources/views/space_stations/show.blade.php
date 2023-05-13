@extends('layout')

@section('content')
    <h1></h1>
    <p></p>
    <img src="" alt="{{ $space_station->name }}">

    <p>Galaxy: <a href="{{ route('galaxies.show', $space_station->galaxy->id) }}">{{ $space_station->galaxy->name }}</a></p>

    <a href="{{ route('space_stations.edit', $space_station->id) }}">Edit</a>
    <form action="{{ route('space_stations.destroy', $space_station->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>




    <div class="card-header bg-dark text-white">
        <h1 class="card-title">{{ $space_station->name }}</h1>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="bg-dark text-white rounded p-2 py-4">
                    <p>3D GPS Coordinates: {{ $space_station->gps_3d_coordinates }}</p>
                    <p>
                        {{ $space_station->description }}
                    </p>
                    <img class="mt-3 w-100 shadow" src="{{ $space_station->image_url }}" alt="{{ $space_station->name }}">
                </div>

            </div>
            <div class="col-6">
                <h3>Space Stations ({{ $galaxy->spaceStations->count() }}):</h3>
                <ul class="list-group">
                    @foreach ($galaxy->spaceStations as $space_station)
                        <a href="{{ route('space_stations.show', $space_station->id) }}">
                            <li class="list-group-item">
                                <div class="d-flex align-items-start">
                                    <img src="{{ $space_station->image_url }}" class="me-3" alt="Placeholder image"
                                        width="50" height="50">
                                    <div class="flex-grow-1">
                                        <h5>{{ $space_station->name }}</h5>
                                    </div>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
        <hr>

        <form action="{{ route('space_stations.destroy', $space_station->id) }}" method="post">
            @csrf
            @method('DELETE')
            <a class="btn btn-warning" href="{{ route('space_stations.edit', $space_station->id) }}">Edit</a>
            <button class="btn btn-danger" type="submit">Delete</button>

        </form>



    </div>
@endsection
