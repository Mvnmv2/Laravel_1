@extends('layouts/main')
@section('content')

    <div>{{ $wither->id }} . <i>{{ $wither->name }}</i></div>
    <div>Откуда: <i>{{ $wither->city_of_birth }}</i></div>
    <div>Год рождения: <i>{{ $wither->year_of_birth }}</i></div>
    <div>Школа: <i>{{ $wither->school }}</i></div>
    <div>Girl: <i>{{ $wither->girl }}</i></div>
    <div>
        <a href="{{ route('wither.edit', $wither->id) }}" class="btn btn-primary mt-1">Редактировать</a>
        <form class="d-inline" action="{{ route('wither.destroy', $wither->id) }}" method="post">
            @csrf
            @method('delete')
            <input class="btn btn-primary mt-1" value="Удалить" type="submit">
        </form>
    </div>
    <div>
        <a href="{{ route('wither.index') }}" class="btn btn-primary mt-1">Назад</a>
    </div>



@endsection
