@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h3>Aggiungi un fumetto</h3>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group mt-1">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo del fumetto" name="title">
            </div>
            
            <div class="form-group mt-1">
                <label for="description">Descrizione del fumetto</label>
                <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto" rows="4"></textarea>
            </div>

            <div class="form-group mt-1">
                <label for="thumb">Url Cover</label>
                <input type="text" class="form-control" id="thumb" placeholder="Inserisci l'url dell'immagine di copertina" name="thumb">
            </div>

            <div class="form-group mt-1">
                <label for="price">Prezzo</label>
                <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo del fumetto" name="price">
            </div>

            <div class="form-group mt-1">
                <label for="series">Serie di appartenenza</label>
                <input type="text" class="form-control" id="series" placeholder="Inserisci il nome della serie a cui il fumetto appartiene" name="series">
            </div>

            <div class="mt-2">
                <label for="type">Tipo di fumetto</label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="type" name="type" class="custom-control-input">
                    <label class="custom-control-label" for="type">Comic Book</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="type" name="type" class="custom-control-input">
                    <label class="custom-control-label" for="type">Graphic Novel</label>
                </div>
            </div>

            <div class="form-group mt-1">
                <label for="date">Data di pubblicazione</label>
                <input type="text" class="form-control" id="date" placeholder="Inserisci la data di pubblicazione" name="date">
            </div>
            
            

            <button type="submit" class="btn btn-primary mt-3">Salva</button>
          </form>
    </div>

@endsection