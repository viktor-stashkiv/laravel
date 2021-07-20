@extends('layouts.app')

@section('title-block')Оновлення даних ID {{$data->id}} @endsection

@section('content')
<div class="width-50">
    <h1>Оновлення id = {{$data->id}}</h1>
    <form action="{{route('contact-update-submit',$data->id)}}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">І'мя</label>
            <input type="text" name="name" value="{{$data->name}}" id="name" placeholder="Enter your name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$data->email}}" id="email" placeholder="Enter your email" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Повідомлення</label>
            <textarea name="message" id="message" placeholder="Напишіть повідомлення..." class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Обновити</button>
    </form>
</div>
@endsection
