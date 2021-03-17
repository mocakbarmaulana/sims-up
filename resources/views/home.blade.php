@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
@endsection

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
                        <a class="nav-link" href="{{route('member.logout')}}">Log Out</a>
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
    <div class="jumbotron p-0 pt-5 pb-3">
        <div class="container">
            <h1 class="display-5">Reskill & Upskill:</h1>
            <h1 class="display-5">Bring out the best in you</h1>
            <ul class="list-unstyled mt-4">
                <li>Broaden your professional potential.</li>
                <li>Deepen your personal horizons.</li>
                <li>Start a skill-building plan now.</li>
            </ul>
            <div style="margin-top: 100px">
                <a href="#" class="btn btn-warning">Get Started</a>
                <a href="#" class="btn btn-outline-warning">Learn More</a>
            </div>
        </div>
    </div>

    <section id="goal">
        <div class="goal-head"></div>
        <div class="goal-body">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </section>

    <section id="skill">
        belum ada
    </section>

    <section id="course">

    </section>


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


</div>
@endsection
