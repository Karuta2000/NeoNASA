@extends('layout')

@section('content')
    <div class="card-header bg-dark text-white">
        <h1 class="card-title">
            Vesmírné stanice
        </h1>
    </div>
    <div class="card-body">

        <ul class="list-group">
            @if ($space_stations->count() > 0)
                @foreach ($space_stations as $space_station)
                    <a href="{{ route('space_stations.show', $space_station->id) }}">
                        <li class="list-group-item">
                            <div class="d-flex align-items-start">
                                <img src="{{ $space_station->image_url }}" class="me-3" alt="Placeholder image" width="50"
                                    height="50">
                                <div class="flex-grow-1">
                                    <h5>{{ $space_station->name }}</h5>
                                </div>
                            </div>
                        </li>
                    </a>
                @endforeach
            @else
                Nenalezena žádná stanice :(
            @endif


        </ul>
        <hr>
        <a class="btn btn-dark" href="{{ route('space_stations.create') }}">Add Space Station</a>
    </div>
@endsection
