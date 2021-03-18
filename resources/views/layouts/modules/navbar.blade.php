<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 80px">
    <div class="container">
        {{-- <a class="navbar-brand" href="#">Sims Up</a> --}}
        <img src="{{asset('assets/images/Logo.png')}}" alt="" style="width: 140px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('expert.login')}}">For Teacher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('member.login')}}">For Learner</a>
                </li>

                @if (Auth::guard('member')->check())
                <li class="nav-item">
                    <a class="nav-link btn btn-warning btn-sm mx-4" href="#">Dashboard</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link btn btn-warning btn-sm mx-4" href="{{route('member.login')}}">Login / Sign Up</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
