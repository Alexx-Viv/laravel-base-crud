@extends('layouts.main')

@section('title', $comic->title)

@section('cdns')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="bg-light p-5 rounded">
        <div class="d-flex justify-content-center align-items-baseline">
            <h1 class="text-center mt-5">{{ $comic->title }}</h1>
            <small class="ms-3"><a href="{{ route('comics.edit', $comic->id) }}"><i
                        class="fas fa-pencil-alt"></i></a></small>
        </div>

        <hr>
        <div class="row">
            <div class="col-3 text-center">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="col-9 d-flex flex-column">
                <h3 class="text-muted">{{ $comic->series }}</h3>
                <p>{!! $comic->description !!}</p>
                <div><strong>Prezzo:</strong> {{ $comic->price }}</div>
                <div><strong>Data:</strong> {{ $comic->sale_date }}</div>
                <div><strong>Tipo:</strong> {{ $comic->type }}</div>
                <a class="btn btn-primary align-self-end" href="{{ route('comics.index') }}">Indietro</a>
            </div>
        </div>
    </div>


@endsection
