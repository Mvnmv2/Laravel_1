@extends('layouts/main')
@section('content')
    <div class="mb-2 mt-2">
        <a class="btn bg-danger-subtle" href="{{ route('wither.create') }}">Добавить</a>
    </div>
    @foreach($withers as $wither)
        <div>
            <a href="{{ route('wither.show', $wither->id) }}">{{ $wither->id }} . {{ $wither->name }}</a>
        </div>
    @endforeach
@endsection
