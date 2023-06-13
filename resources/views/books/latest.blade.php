@extends('layouts/main')

@section('content')
    <h4>Latest books:</h4>

    <button id="loadBooksBtn">Load</button>

    <ul id="latestBooks"></ul>

    @vite('resources/js/app.js')
@endsection
