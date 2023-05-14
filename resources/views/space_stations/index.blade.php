@extends('layout')

@section('content')
    <div class="card-header bg-space text-white">
        <h1 class="card-title">
            Vesmírné stanice
        </h1>
    </div>
    <div class="card-body">

        <ul class="list-group">
            @if ($space_stations->count() > 0)
                @foreach ($space_stations as $space_station)
                    <a class="list-group-item list-group-item-action"
                        href="{{ route('space_stations.show', $space_station->id) }}">
                        <div class="d-flex align-items-start">
                            <img src="{{ $space_station->image_url }}" class="me-3" alt="Placeholder image" width="50"
                                height="50" onerror="this.src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png';" >
                            <div class="flex-grow-1 align-middle">
                                <h5 class="align-middle">{{ $space_station->name }}</h5>
                            </div>
                        </div>
                    </a>
                @endforeach
            @else
                Nenalezena žádná stanice :(
            @endif


        </ul>
        <hr>
        <a class="btn btn-space" href="{{ route('space_stations.create') }}">Add Space Station</a>
    </div>
@endsection
