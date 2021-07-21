@extends('layouts.main')

@section('main-content')
    <h1 class="text-center mb-3">Elenco Comics</h1>

    <div class="container">

        <table class="m-2 table table-striped table-light table-hover">
            <thead>
                <tr>
                    <th class="col-1">ID</th>
                    <th class="col-4">Titolo</th>
                    <th class="col-4">Serie</th>
                    <th class="col-1">Prezzo</th>
                    <th class="col-1">Data</th>
                    <th class="col-1">Dettagli</th>
                    <th class="col-1">Modifica</th>
                    <th class="col-1">Elimina</th>
                    
                </tr>    
            </thead>
            <tbody>  
                @foreach ($comics as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->series }}</td>
                        <td>&#36; {{ $item->price}}</td>
                        <td>{{ $item->date}}</td>   

                        <td>
                            <a href="{{ route("comics.show", $item->id) }}" class="btn btn-primary">
                                Dettagli
                            </a>
                        </td>  

                        <td>
                            <a href="{{ route("comics.edit", $item->id) }}" class="btn btn-secondary">
                                Modifica
                            </a>
                        </td> 

                        <td>
                            <form action="{{ route('comics.destroy', $item->id) }}" method="POST" onSubmit = "return confirm('Sei sicuro di voler cancellare definitivamente {{ $item->title }} - {{ $item->series }}?')">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="ELIMINA">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $comics->links() }}

    </div>
@endsection