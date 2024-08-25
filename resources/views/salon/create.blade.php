<!-- resources/views/places/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добавить  Салон</h1>
        <form action="{{ route('salon.store') }}" method="POST">
            @csrf
            <label for="name">Название:</label>
            <input type="text" placeholder="Akmal Vahobow" id="name" name="name" class="form-control">
            <label for="phone">Телефон:</label>
            <input type="text" placeholder="92-903-00-03" id="phone" name="phone" class="form-control">
            <label for="email">Эл. почта:</label>
            <input type="email" placeholder="Akmal@gamil.com" id="email" name="email" class="form-control">
            <label for="weekday">Выберите день недели:</label><br>
            <select id="weekday" name="week" class="form-control">
                <option value="monday">Понедельник</option>
                <option value="tuesday">Вторник</option>
                <option value="wednesday">Среда</option>
                <option value="thursday">Четверг</option>
                <option value="friday">Пятница</option>
                <option value="saturday">Суббота</option>
                <option value="sunday">Воскресенье</option>
            </select>
            <label for="">Начало работы:</label>
            <input type="time" class="form-control" name="time">
            <br>

            <label for="">Конец работы:</label>
            <input type="time" class="form-control" name="time">
            <br>
            <input type="submit" value="Создать" class="btn btn-primary form-control">
        </form>
    </div>
@endsection
