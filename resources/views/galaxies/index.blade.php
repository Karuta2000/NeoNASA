@extends('layout')

@section('content')
    <div class="card-header bg-dark text-white">
        <h1 class="card-title">
            Galaxies
        </h1>
    </div>
    <div class="card-body">

        <ul class="list-group">
            @foreach ($galaxies as $galaxy)
            @endforeach

            @if ($galaxies->count() > 0)
                @foreach ($galaxies as $galaxy)
                    <a href="{{ route('galaxies.show', $galaxy->id) }}">
                        <li class="list-group-item">
                            <div class="d-flex align-items-start">
                                <img src="{{ $galaxy->image_url }}" class="me-3" alt="Placeholder image" width="50"
                                    height="50">
                                <div class="flex-grow-1">
                                    <h5>{{ $galaxy->name }} - {{ $galaxy->size }}</h5>
                                </div>
                            </div>
                        </li>
                    </a>
                @endforeach
            @else
                Nenalezena žádná galaxie :(
            @endif

        </ul>
        <hr>
        <a class="btn btn-dark" href="{{ route('galaxies.create') }}">Add Galaxy</a>
    </div>
@endsection
