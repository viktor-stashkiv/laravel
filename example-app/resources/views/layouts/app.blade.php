<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('js/app.css')}}">
</head>
<body>
    @include('inc.header')

    <div class="container mt-5">
        @include('inc.messages')
        <div class="row">
            <div class="col-8">
            @yield('content')
            </div>

            <div class="col-4">
            @include('inc.aside')
            </div>
        </div>
    </div>
</body>
</html>
