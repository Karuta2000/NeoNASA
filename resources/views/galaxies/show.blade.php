@extends('layout')

@section('content')
    <div class="bg-space rounded text-white shadow p-3 mb-3">
        <h1>{{ $galaxy->name }}</h1>
    </div>
    <div class="bg-space rounded text-white shadow p-3 mb-3">
        <div class="row">
            <div class="col-6">
                <div>
                    <p class="bg-light text-dark rounded p-2">Size: {{ $galaxy->size }}</p>
                    <p class="bg-light text-dark rounded p-2">
                        @if (is_null($galaxy->description))
                            Bez popisku
                        @else
                            {{ $galaxy->description }}
                        @endif

                    </p>
                </div>
                <img class="mt-2 rounded w-100 shadow" src="{{ $galaxy->image_url }}" alt="{{ $galaxy->name }}"
                onerror="this.src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png';">


            </div>
            <div class="col-6">
                <h3 class="mb-3">Space Stations ({{ $galaxy->spaceStations->count() }}):</h3>
                <ul class="list-group">
                    @foreach ($galaxy->spaceStations as $space_station)
                        <a href="{{ route('space_stations.show', $space_station->id) }}"
                            class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-start">
                                <img src="{{ $space_station->image_url }}" class="me-3 rounded shadow"
                                    alt="Placeholder image" width="50" height="50"
                                    onerror="this.src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png';">
                                <div class="flex-grow-1">
                                    <h5>{{ $space_station->name }}</h5>
                                </div>
                            </div>
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
                <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                    data-bs-target="#deleteModal">Delete</button>
                <div class="modal fade" id="deleteModal" tabindex="1" aria-labelledby="deleteModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-white">
                                <h1 class="modal-title fs-5" id="deleteModalLabel">Varování</h1>
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-dark">
                                Všechny stanice uvnitř této galaxie budou ztraceny! <br>
                                Tato galaxie obsahuje následující počet vesmírných stanic:
                                {{ $galaxy->spaceStations->count() }}<br>
                                Přejete si i tak odstranit tuto galaxii?
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-space" data-bs-dismiss="modal">Zrušit</button>
                                <button type="submit" class="btn btn-danger">Odstranit</button>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <button class="btn btn-danger ms-2" type="submit">Delete</button>
            @endif

        </form>



    </div>
@endsection
