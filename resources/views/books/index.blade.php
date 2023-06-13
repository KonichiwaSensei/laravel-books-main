@extends('layouts/main')

@section('content')
    <h3>Books</h3>

    <a href="{{ route('books.create') }}">new book</a>

    <ul>
        @foreach($books as $book)
            <li>
                <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
