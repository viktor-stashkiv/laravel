<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">HOSTEL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">Головна <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('revision-hostel')}}">Перегляд</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Пошук</a>
        </li>
        </ul>
        <form action="{{route('search-hostel')}}" method="get" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Знайти по ID" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Пошук</button>
        </form>
    </div>
    </nav>
</header>
<div class="m-3"></div>