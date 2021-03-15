@extends('layouts.app')

@section('content')
<div class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    @if (Auth::guard('member')->check())
                    <li class="nav-item">
                        <a href="#" class="nav-link">Akun</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{route('member.login')}}" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('member.register')}}" class="nav-link">Register</a>
                    </li>
                    @endif

                </ul>
            </div>
        </nav>
    </header>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-around">
            @foreach ($courses as $course)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/no-image.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$course->name}}</h5>
                        <p class="card-text">{{$course->description}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <footer>
        <div class="row">
            <div class="col">
                <h1>2020</h1>
                <ul class="list-unstyled">
                    <li>2020 Copyright</li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li class="my-3">Cras justo odio</li>
                    <li class="my-3">Dapibus ac facilisis in</li>
                    <li class="my-3">Morbi leo risus</li>
                    <li class="my-3">Porta ac consectetur ac</li>
                    <li class="my-3">Vestibulum at eros</li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li class="my-3"><a href="{{route('expert.login')}}">Expert</a></li>
                    <li class="my-3">Dapibus ac facilisis in</li>
                    <li class="my-3">Morbi leo risus</li>
                    <li class="my-3">Porta ac consectetur ac</li>
                    <li class="my-3">Vestibulum at eros</li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li class="my-3">Cras justo odio</li>
                    <li class="my-3">Dapibus ac facilisis in</li>
                    <li class="my-3">Morbi leo risus</li>
                    <li class="my-3">Porta ac consectetur ac</li>
                    <li class="my-3">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </footer>
</div>
@endsection
