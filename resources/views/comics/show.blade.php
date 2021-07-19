@extends('layouts.main')

@section('main-content')
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h3 class="text-center">{{ $comic->title }} - {{$comic->series}}</h3>
        <div class="container d-flex m-2 justify-content-center border border-5 rounded">
            <img class="img-fluid m-4 col-2" src="{{ $comic->thumb }}" alt="{{ $comic->title}}">
            <div class="m-4 col-8 d-flex flex-column">
                <h5>Release date: {{ $comic->date }}</h5>
                <p>{{ $comic->description }}</p>
                <h5>Price: &#36; {{ $comic->price }}</h5>
            </div>
        </div>
    </div>

    <div class="m-3 d-flex justify-content-center">
        <a class="btn btn-primary" href="{{ route("comics.index") }}">Torna alla lista</a>
    </div>
@endsection