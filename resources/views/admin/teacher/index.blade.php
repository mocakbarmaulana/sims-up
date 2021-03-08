@extends('layouts.admin')

@section('title')
<title>List Teacher</title>
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active"><a href="{{route('teacher.index')}}">{{$active}}</a></li>
    </ol>
</nav>
<div class="mx-3 p-2 bg-light">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif
    <h1>Ini Teacher</h1>
    <div class="row">
        <div class="col bg-danger">
            cuih
        </div>
        <div class="col-1"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-dark">
                    <h5>Tambah Teacher</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('teacher.store')}}" method="POST">
                        @csrf
                        @error('name')
                        <span class="text-danger">*{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <input type="text" name="name" value="{{old('name')}}"
                                class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="nameSkill"
                                placeholder="Full Name">
                        </div>
                        @error('email')
                        <span class="text-danger">*{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <input type="email" name="email" value="{{old('email')}}"
                                class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" id="description"
                                placeholder="Email">
                        </div>
                        @error('address')
                        <span class="text-danger">*{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <textarea name="address"
                                class="form-control {{$errors->has('address') ? 'is-invalid' : ''}}" rows="5"
                                placeholder="Address">{{old('address')}}</textarea>
                        </div>
                        @error('password')
                        <span class="text-danger">*{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <input type="password" name="password"
                                class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Retype Password">
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection