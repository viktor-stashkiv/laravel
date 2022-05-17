@extends('layouts.app')

@section('title')Search @endsection

@section('content')
    
        <table class="table">
	        <thead>
                <tr>
                    <th>ID</th>
                    <th>Ім'я</th>
                    <th>Прізвище</th>
                    <th>По батькові</th>
                    <th>Місце проживання</th>
                    <th>Номер телефону</th>
                    <th>Кімната</th>
                    <th>Дата добавлення</th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->first_name}}</td>
                    <td>{{$data->last_name}}</td>
                    <td>{{$data->name_father}}</td>
                    <td>{{$data->place_of_residence}}</td>
                    <td>{{$data->phone_number}}</td>
                    <td>{{$data->room}}</td>
                    <td>{{$data->created_at}}</td>
                </tr>
           
            </tbody>
        <table>
@endsection 