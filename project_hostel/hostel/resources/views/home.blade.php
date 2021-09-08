@extends('layouts.app')

@section('title')Hostel @endsection

@section('content') 
    <div class="width-center">
        

        <h3>Реєстрація нового мешканця</h3>
            <form action="{{route('add-form-hostel')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="first-name">Ім'я:</label>
                    <input type="text" id="first-name" name="first-name" placeholder="Введіть ім'я" class="form-control">
                </div>

                <div class="form-group">
                    <label for="last-name">Прізвище:</label>
                    <input type="text" id="last-name" name="last-name" placeholder="Введіть прізвище" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name-father">По батькові:</label>
                    <input type="text" id="name-father" name="name-father" placeholder="Введіть ім'я по батькові" class="form-control">
                </div>

                <div class="form-group">
                    <label for="place-of-residence">Місце проживання:</label>
                    <input type="text" id="place-of-residence" name="place-of-residence" placeholder="Введіть місце проживання" class="form-control">
                </div>

                <div class="form-group">
                    <label for="phone-number">Номер телефону:</label>
                    <input type="text" id="phone-number" name="phone-number" placeholder="Введіть номер телефону" class="form-control">
                </div>

                <div class="form-group">
                    <label for="room">Кімната:</label>
                    <input type="text" id="room" name="room" placeholder="Введіть номер кімнати" class="form-control">
                </div>
                    <button type="submit" class="btn btn-success">Добавити студента</button>
            </form>
    </div>
@endsection 