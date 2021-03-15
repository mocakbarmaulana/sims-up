@extends('layouts.admin')

@section('title')
<title>List Course</title>
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active"><a href="{{route('course.index')}}">{{$active}}</a></li>
    </ol>
</nav>
<div class="mx-3 p-2 bg-light">
    <div class="card">
        <div class="card-header bg-dark">
            <h5>List Course</h5>
        </div>
        <div class="card-body">

        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
