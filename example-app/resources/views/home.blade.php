@extends('layouts.app')

@section('title-block')Home @endsection

@section('content')
<div class="width-50">
    <h1>Home page</h1>
    <form action="{{route('contact-form')}}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter your email" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Write a message" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>
</div>
@endsection

@section('aside')
    @parent
    <h6>Any text...</h6>
@endsection
