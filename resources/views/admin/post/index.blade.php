@extends('layouts.admin')
@section('content')

    <div>
        <a class="btn btn-primary mt-2 mb-2" href="{{ route('admin.post.create') }}" role="button">Создать</a>

        @foreach($posts as $post)
            <a href="{{ route('post.show', $post->id) }}">
                <div>{{ $post->id }} . {{ $post->title }}</div>
            </a>
        @endforeach

        <div>
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>
@endsection
