@extends('layouts.main')
@section('content')
    <div>

        <div>
            {{ $post->id }} . {{ $post->title }}
        </div>
        <div>
            {{ $post->content }}
        </div>
        <a href="{{ route('post.edit', $post->id ) }} " class="btn btn-primary mt-1">Редактировать</a>

        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <br>
            <input type="submit" value="Удалить" class="btn btn-danger">
        </form>
        <br>
        <div><a href="{{ route('post.index') }}" class="btn btn-primary">Назад</a></div>


    </div>
@endsection

