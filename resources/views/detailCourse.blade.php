@extends('layouts.app')

@section('head')
<title>Detial Course</title>
<link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/styleDetail.css')}}">
@endsection

@section('content')
<div class="container py-5" style="min-height: 40vh">
    <h1>{{$course->name}}</h1>
    <p>By : {{$course->teacher->name}}</p>
    <div class="row mb-5 mt-3">
        <div class="col-8">
            <img src="{{asset('storage/assets/images/course/'.$course->image_course)}}" width="100%" height="540px"
                alt="detail-image-course" class="rounded detail img-thumbnail">
        </div>
        <div class="col-4 border border-primary p-3 rounded">
            <h3>Detail Course</h3>

            <div class="d-flex flex-column justify-content-between" style="height: 450px">
                <ul class="list-unstyled">
                    <li class="my-3">
                        <p class="m-0"><strong>Description : </strong></p>
                        <span>{{$course->description}}</span>
                    </li>
                    <li class="my-3">
                        <p class="m-0"><strong>Event Date : </strong></p>
                        <span>{{ date('d/m/Y', strtotime($course->event_date))}}</span>
                    </li>
                    <li class="my-3">
                        <p class="m-0"><strong>Price : </strong></p>
                        <span class="text-warning font-weight-bold">IDR. {{ number_format($course->price)}}</span>
                    </li>
                </ul>
                <button type="button" class="btn btn-primary btn-block">Order</button>
            </div>
        </div>
    </div>
    <div class="row">
        <h4>Other Course</h4>
    </div>
</div>
@endsection

@section('js')

@endsection
