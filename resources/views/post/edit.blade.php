@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Заголовок</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Введите заголовок" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Такст поста</label>
                <textarea class="form-control" id="content" name="content" placeholder="Введите текст поста">{{ $post->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Фото</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Добавьте фото" value="{{ $post->image }}">
            </div>

            <button type="submit" class="btn btn-primary">Обновить пост</button>
        </form>
    </div>
@endsection
