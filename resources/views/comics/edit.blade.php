@extends('layouts.main')

@section('title', 'Modifica Fumetto')

@section('content')
    <div class="row p-3">
        <div class="col-md-6">
            <h1 class="text-light">Pagina modifica fumetto</h1>
        </div>
        <div class="col-md-6 text-end">
            <a class="btn btn-primary" href="{{ route('comics.index') }}">Indietro</a>
        </div>
    </div>
    <hr class="bg-light">
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="row p-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-label text-light">Nome Fumetto</label>
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Inserire il nome del fumetto..." required value={{ $comic->title }}>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="series" class="form-label text-light">Nome Della Serie</label>
                    <input type="text" class="form-control" id="series" name="series"
                        placeholder="Inserire il nome della serie..." required value={{ $comic->series }}>
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="thumb" class="form-label text-light">Link copertina</label>
                    <input type="text" class="form-control" id="thumb" name="thumb"
                        placeholder="Inserire il link della copertina..." required value={{ $comic->thumb }}>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="form-group">
                    <label for="description" class="form-label text-light">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" cols="30"
                        rows="10">{{ $comic->description }}</textarea>
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="price" class="form-label text-light">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price"
                        placeholder="Inserire il prezzo del fumetto..." required value={{ $comic->price }}>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="sale_date" class="form-label text-light">Data disponibilità</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date"
                        placeholder="Inserire la data di disponibilità del fumetto..." required
                        value={{ $comic->sale_date }}>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="type" class="form-label text-light">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type"
                        placeholder="Inserire il tipo del fumetto..." required value={{ $comic->type }}>
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-12 d-flex justify-content-end">
                <button type="reset" class="btn btn-danger me-3">Cancella</button>
                <button type="submit" class="btn btn-success">Modifica</button>
            </div>
        </div>
    </form>
@endsection
