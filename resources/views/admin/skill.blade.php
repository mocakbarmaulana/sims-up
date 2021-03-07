@extends('layouts.admin')

@section('title')
<title>List Skill</title>
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active">{{$active}}</li>
    </ol>
</nav>
<div class="mx-3 p-2 bg-light">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-dark">
                    <h5>Tambah List</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('skill.store')}}" method="POST">
                        @csrf
                        @error('skill')
                        <span class="text-danger">*{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="nameSkill">Skill</label>
                            <input type="text" name="skill" value="{{old('skill')}}" class="form-control"
                                id="nameSkill">
                        </div>
                        @error('description')
                        <span class="text-danger">*{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="nameSkill">Description</label>
                            <input type="text" name="description" value="{{old('description')}}" class="form-control"
                                id="nameSkill">
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col ml-5">
            <div class="card">
                <div class="card-header bg-dark">
                    <h5>List Skill</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Skill</th>
                                <th scope="col" class="text-center">Dibuat</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $skill)
                            <tr>
                                <th scope="row">{{$loop->iteration}}.</th>
                                <td>{{$skill->name}}</td>
                                <td class="text-center">{{$skill->created_at->format('d/m/Y')}}</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                    <button type="button" class="btn btn-secondary btn-sm">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection