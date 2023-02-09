@extends('layouts/main')
@section('content')
    <div class="container mt-2">
        @foreach($books as $book)
            <a href="{{ route('book.show', $book->id) }}"><div>{{$book->id}} . {{ $book->author }}: {{ $book->title }}</div></a>
        @endforeach
            <div class="mb-2 mt-2">
                <a class="btn bg-danger-subtle" href="{{ route('book.create') }}">Добавить</a>
            </div>
    </div>
@endsection
