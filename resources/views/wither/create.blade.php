@extends('layouts/main')
@section('content')
    <div class="container mt-3">
        <form action="{{ route('wither.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Имя</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Геральт">
            </div>
            <div class="mb-3">
                <label for="city_of_birth" class="form-label">Город</label>
                <input type="text" class="form-control" id="city_of_birth" name="city_of_birth" placeholder="Ривия">
            </div>
            <div class="mb-3">
                <label for="year_of_birth" class="form-label">Год рождения</label>
                <input type="number" class="form-control" id="year_of_birth" name="year_of_birth" placeholder="1215">
            </div>
            <div class="mb-3">
                <label for="school" class="form-label">Школа</label>
                <input type="text" class="form-control" id="school" name="school" placeholder="Волк">
            </div>
            <div class="mb-3">
                <label for="girl" class="form-label">Girl</label>
                <input type="text" class="form-control" id="girl" name="girl"
                       placeholder="Йеннифэр из Венгерберга">
            </div>
            <input class="btn btn-primary" type="submit" value="Добавить">
        </form>
    </div>
@endsection
