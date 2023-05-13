@extends('layout')

@section('content')
    <div class="card-header bg-dark text-white">
        <h1 class="card-title">{{ $space_station->name }}</h1>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="bg-dark text-white rounded p-2 py-4">
                    <p>3D GPS Coordinates: {{ $space_station->gps_3d_coordinates }}</p>
                    <p>
                        @if(is_null($space_station->description))
                        Bez popisku
                        @else
                        {{ $space_station->description }}
                        @endif
                    </p>
                    <img class="mt-3 w-100 shadow" src="{{ $space_station->image_url }}" alt="{{ $space_station->name }}" onerror="this.src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png';">
                </div>

            </div>
            <div class="col-6">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action"
                        href="{{ route('galaxies.show', $space_station->galaxy->id) }}">
                        <div class="d-flex align-items-start">
                            <img src="{{ $space_station->galaxy->image_url }}" class="me-3" alt="Placeholder image"
                                width="50" height="50">
                            <div class="flex-grow-1 align-middle">
                                <h5 class="align-middle">{{ $space_station->galaxy->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>

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
