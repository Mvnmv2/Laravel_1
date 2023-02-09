@extends('layouts/main')
@section('content')
    <div class="container mt-3">
        <form action="{{ route('book.update', $book->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Имя</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Введите наименование">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Автор</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Введите автора">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Описание</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="year_of_published" class="form-label">Год публикации</label>
                <input type="number" class="form-control" id="year_of_published" name="year_of_published" placeholder="Введите год публикации">
            </div>
            <div class="mb-3">
                <label for="article" class="form-label">Артикль</label>
                <input type="text" class="form-control" id="article" name="article"
                       placeholder="Введите артикль">
            </div>
            <input class="btn btn-primary" type="submit" value="Редактировать">
        </form>
    </div>
@endsection
