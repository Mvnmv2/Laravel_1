@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Заголовок</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Введите заголовок">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Такст поста</label>
                <textarea class="form-control" id="content" name="content" placeholder="Введите текст поста"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Фото</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Добавьте фото">
            </div>

            <button type="submit" class="btn btn-primary">Создать пост</button>
        </form>
    </div>
@endsection
