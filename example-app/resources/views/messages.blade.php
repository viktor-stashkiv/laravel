@extends('layouts.app')

@section('title-block')All messages @endsection

@section('content')
<div class="width-50">
    <h1>Home page</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{$el->name}}</h3>
            <small>{{$el->email}}</small><br>
            <small>{{$el->created_at}}</small><br><br>
            <a href="{{route('contact-data-one',$el->id)}}"><button class="btn btn-warning">Детальніше</button></a>
        </div>
    @endforeach
</div>
@endsection


