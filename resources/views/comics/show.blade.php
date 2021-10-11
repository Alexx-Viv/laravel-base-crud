@extends('layouts.main')

@section('title', $comic->short_name)

@section('content')
    <div class="bg-light p-5 rounded">
        <h1 class="text-center mt-5">{{ $comic->title }}</h1>
        <hr>
        <div class="row">
            <div class="col-3 text-center">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="col-9">
                <h3 class="text-muted">{{ $comic->series }}</h3>
                <p>{!! $comic->description !!}</p>
                <div><strong>Prezzo:</strong> {{ $comic->price }}</div>
                <div><strong>Data:</strong> {{ $comic->sale_date }}</div>
                <div><strong>Tipo:</strong> {{ $comic->type }}</div>
            </div>
        </div>
    </div>


@endsection
