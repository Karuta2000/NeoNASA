@extends('layout')

@section('content')
    <div class="card-header bg-dark text-white">
        <h1 class="card-title">
            Galaxies
        </h1>
    </div>
    <div class="card-body">
        <a class="btn btn-dark" href="{{ route('galaxies.create') }}">Add Galaxy</a>
        <ul>
            @foreach ($galaxies as $galaxy)
                <li>
                    <a href="{{ route('galaxies.show', $galaxy->id) }}">{{ $galaxy->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
