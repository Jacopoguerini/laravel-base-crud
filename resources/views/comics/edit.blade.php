@extends('layouts.main')

@section('main-content')
    <div class="container">
            <h3>Modifica del fumetto: {{ $comic->title }}</h3>
            <div class="d-flex">
                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary me-4">Vai alla schermata DETTAGLI</a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" onSubmit="return confirm('Sei sicuro di voler cancellare definitivamente {{ $comic->title }} - {{ $comic->series }}?')">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="ELIMINA">
                </form>
            </div>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group mt-1">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo del fumetto" name="title" required value="{{ $comic->title }}" required>
            </div>
            
            <div class="form-group mt-1">
                <label for="description">Descrizione del fumetto</label>
                <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto" rows="4" required>{{ $comic->description }}</textarea>
            </div>

            <div class="form-group mt-1">
                <label for="thumb">Url Cover</label>
                <input type="text" class="form-control" id="thumb" placeholder="Inserisci l'url dell'immagine di copertina" name="thumb" value="{{ $comic->thumb }}" required>
            </div>

            <div class="form-group mt-1">
                <label for="price">Prezzo</label>
                <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo del fumetto" name="price" value="{{ $comic->price }}" required>
            </div>

            <div class="form-group mt-1">
                <label for="series">Serie di appartenenza</label>
                <input type="text" class="form-control" id="series" placeholder="Inserisci il nome della serie a cui il fumetto appartiene" name="series" value="{{ $comic->series }}" required>
            </div>

            <div class="mt-2">
                <label class="me-2" for="type">Tipo di fumetto</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="type" value="comic book" required>
                    <label class="form-check-label" for="type">Comic Book</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="type" value="graphic novel" required>
                    <label class="form-check-label" for="type">Graphic Novel</label>
                </div>
            </div>

            <div class="form-group mt-1">
                <label for="date">Data di pubblicazione</label>
                <input type="date" class="form-control" id="date" placeholder="Inserisci la data di pubblicazione" name="date" value="{{ $comic->date }}" required>
            </div>

            <a href="{{ route('comics.index') }}" class="btn btn-secondary mt-3 me-3">Elenco fumetti</a>
            <button type="submit" class="btn btn-primary mt-3">Salva</button>
        </form>
    </div>

@endsection