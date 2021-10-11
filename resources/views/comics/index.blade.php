@extends('layouts.main')

@section('title', 'Fumetti')

@section('content')
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Nome</th>
                <th scope="col">Serie</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Data</th>
                <th scope="col">Tipo</th>
                <th scope="col">Azioni</th>
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
