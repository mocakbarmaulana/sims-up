@extends('layouts.expert')

@section('title')
<title>Class Expert</title>
<link rel="stylesheet" href="{{asset('assets/css/expert.css')}}">
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Expert</li>
        <li class="breadcrumb-item active"><a href="{{route('expert.class')}}">{{$active}}</a></li>
    </ol>
</nav>
<div class="mx-3 p-2 bg-light">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif
    <div class="row">
        <div class="col-3 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="d-flex align-items-center justify-content-center" style="height: 100%">
                    <div class="text-center">
                        <a href="{{route('expert.class.create')}}" class="text-success"><i
                                class="fas fa-plus-circle fa-9x"></i>
                            <p class="font-weight-bold py-2">Tambah Course</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($courses as $course)
        <div class="col-3 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="box-img-class">
                    <img src="{{asset('storage/assets/images/course/' . $course->image_course)}}" class=""
                        alt="image-logo" style="width: 100%; height: 100%">
                </div>
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{$course->name}}</h5>
                    <span class="card-text d-block">{{$course->description}}</span>
                    <span>Harga : IDR.{{ number_format($course->price)}}</span><br>
                    <span>Kuota : {{$course->quota_student}}</span>
                </div>
                <div class="p-4 d-flex justify-content-between">
                    <a href="{{route('expert.class.edit', $course->id)}}" class="btn btn-outline-success">Edit</a>
                    <a href="#" class="btn btn-success">Detail</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection

@section('js')

@endsection
