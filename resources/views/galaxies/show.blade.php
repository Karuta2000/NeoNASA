@extends('layout')

@section('content')
    <div class="card-header bg-dark text-white">
        <h1 class="card-title">{{ $galaxy->name }}</h1>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="bg-dark text-white rounded p-2 py-4">
                    <p>Size: {{ $galaxy->size }}</p>
                    <p>
                        {{ $galaxy->description }}
                    </p>
                    <img class="mt-3 w-100 shadow" src="{{ $galaxy->image_url }}" alt="{{ $galaxy->name }}">
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

        <form action="{{ route('galaxies.destroy', $galaxy->id) }}" method="post">
            @csrf
            @method('DELETE')


            <a class="btn btn-warning" href="{{ route('galaxies.edit', $galaxy->id) }}">Edit</a>

            @if ($galaxy->spaceStations->count() > 0)
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                <div class="modal fade" id="deleteModal" tabindex="1" aria-labelledby="deleteModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-white">
                                <h1 class="modal-title fs-5" id="deleteModalLabel">Varování</h1>
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Všechny stanice uvnitř této galaxie budou ztraceny! <br>
                                Tato galaxie obsahuje následující počet vesmírných stanic:
                                {{ $galaxy->spaceStations->count() }}<br>
                                Přejete si i tak odstranit tuto galaxii?
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Zrušit</button>
                                <button type="submit" class="btn btn-danger">Odstranit</button>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <button class="btn btn-danger" type="submit">Delete</button>
            @endif

        </form>



    </div>
@endsection
