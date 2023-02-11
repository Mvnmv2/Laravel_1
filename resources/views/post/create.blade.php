@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Заголовок</label>
                <input value="{{ old('title') }}" type="text" class="form-control" id="title" name="title"
                       placeholder="Введите заголовок">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Такст поста</label>
                <textarea class="form-control" id="content" name="content"
                          placeholder="Введите текст поста">{{ old('content') }}</textarea>
                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Фото</label>
                <input value="{{ old('image') }}" type="text" class="form-control" id="image" name="image"
                       placeholder="Добавьте фото">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="category">Категория</label>
                <select id="category" class="form-select" name="category_id">
                    @foreach($categories as $category)
                        <option {{ old('category_id') == $category->id ? 'selected' : '' }}
                            value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="tags">Тэг</label>
                <select id="tags" name="tags[]" class="form-select " multiple="" aria-label="Tags">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Создать пост</button>
        </form>
    </div>
@endsection
