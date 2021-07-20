@extends('layouts.app')

@section('title-block'){{$data->message}} @endsection

@section('content')
<div class="width-50">
    <h1>{{$data->message}}</h1>
        <div class="alert alert-info">
            <h3>{{$data->name}}</h3>
            <small>{{$data->email}}</small><br>
            <small>{{$data->created_at}}</small><br><br>
            <a href="{{route('contact-update',$data->id)}}"><button class="btn btn-primary">Редагувати</button></a>
            <a href="{{route('contact-delete',$data->id)}}"><button class="btn btn-danger">Видалити</button></a>
        </div>

</div>
@endsection


