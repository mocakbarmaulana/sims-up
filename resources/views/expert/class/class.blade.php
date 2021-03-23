@extends('layouts.expert')

@section('head')
<title>Expert Class</title>
@endsection

@section('content')
<div class="row">
    <div class="col-4 d-flex justify-content-center align-items-center" style="height: 300px">
        <a href="{{route('expert.class.create')}}" class="text-dark-blue">
            <div class="card my-3 shadow" style="height: 250px; width: 250px">
                <div class="card-body d-flex justify-content-center align-items-center text-center">
                    <div>
                        <i class="fas fa-plus-circle fa-9x"></i>
                        <p class="my-2 font-weight-bold">Tambah Workshop</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    @foreach ($courses as $course)
    <div class="col-4 d-flex justify-content-center align-items-center" style="height: 300px">
        <a href="" class="text-dark-blue">
            <div class="card my-3 shadow" style="height: 250px; width: 250px">
                <div class="box-image w-100 h-100">
                    <img src="{{asset('storage/assets/images/course/'.$course->image_course)}}" height="100%"
                        alt="image-course" width="100%" class="bordered">
                    <div class="box-title px-3">
                        <h5>{{$course->name}}</h5>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection

@section('js')

@endsection
