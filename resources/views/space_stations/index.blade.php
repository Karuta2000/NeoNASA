@extends('layout')

@section('content')
    <div class="card-header bg-dark text-white">
        <h1 class="card-title">
            Space Stations
        </h1>
    </div>
    <div class="card-body">

        <ul>
            @foreach ($space_stations as $space_station)
                <li>
                    <a href="{{ route('space_stations.show', $space_station->id) }}">{{ $space_station->name }}</a>
                </li>
            @endforeach


        </ul>
        <a class="btn btn-dark" href="{{ route('space_stations.create') }}">Add Space Station</a>
    </div>
@endsection
