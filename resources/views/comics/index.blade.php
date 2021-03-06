@extends('layouts.main')

@section('title', 'Fumetti')

@section('content')
    <div class="row">
        <div class="col-12 d-flex justify-content-end align-items-start">
            <form class="me-2" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cerca Fumetto..." name="search"
                        value="{{ $search }}">
                    <button class="btn btn-secondary" type="submit">Cerca</button>
                </div>
            </form>
            <a class="btn btn-success" href="{{ route('comics.create') }}">Crea Fumetto</a>
        </div>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nome</th>
                <th scope="col">Serie</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Data</th>
                <th scope="col">Tipo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
                <tr>
                    <td>
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid me-2" width="60">
                    </td>
                    <td class="pt-4">{{ $comic->title }}</td>
                    <td class="pt-4">{{ $comic->series }}</td>
                    <td class="pt-4">{{ $comic->price }}</td>
                    <td class="pt-4">{{ $comic->sale_date }}</td>
                    <td class="pt-4">{{ $comic->type }}</td>
                    <td class="pt-4">
                        <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">Dettagli</a>
                        <a class="btn btn-warning mt-2" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Non ci sono fumetti disponibili</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
