@extends('layouts.app')

@section('title')Revision @endsection

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
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->first_name}}</td>
                    <td>{{$el->last_name}}</td>
                    <td>{{$el->name_father}}</td>
                    <td>{{$el->place_of_residence}}</td>
                    <td>{{$el->phone_number}}</td>
                    <td>{{$el->room}}</td>
                    <td>{{$el->created_at}}</td>
                    <td><a href="{{route('delete-hostel',$el->id)}}"> Видалити<a/></td>
                </tr>
            @endforeach
            </tbody>
        <table>
@endsection 