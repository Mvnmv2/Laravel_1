@extends('layouts/main')
@section('content')
    <div class="container mt-2">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $book->author }}</h6>
                <p class="card-text">{{ $book->description }}</p>
                <p class="card-text">Год публикации: <i>{{ $book->year_of_published }}</p>
                <p class="card-text">Артикль: <i>{{ $book->article }}</p>
                <a href="{{route('book.edit', $book->id)}}" class="btn fst-italic border-light">Редактировать</a>
                <form class="d-inline" action="{{ route('book.destroy', $book->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input class="btn fst-italic link-danger" type="submit" value="Удалить">
                </form>

            </div>
        </div>
        <a href="{{ route('book.index') }}" class="btn btn-primary mt-1">Назад</a>
    </div>
@endsection

