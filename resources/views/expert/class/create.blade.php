@extends('layouts.expert')

@section('title')
<title>Expert | Tambah Course</title>
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Expert</li>
        <li class="breadcrumb-item active"><a href="{{route('expert.class')}}">{{$active}}</a></li>
    </ol>
</nav>
<div class="mx-3 p-2 bg-light">
    <div class="row">
        <div class="col">
            <form action="{{route('exper.class.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-center">
                    <img src="{{asset('assets/images/no-image.png')}}" class="img-fluid image-preview"
                        style="min-height: 500px" alt="no-image">
                </div>
                <div class="form-group my-4">
                    <label for="customFile">Uplod Image</label>
                    @error('image')
                    <span class="text-danger text-sm">*{{$message}}</span>
                    @enderror
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                        <label class="custom-file-label image-text" for="customFile">Choose file</label>
                    </div>
                </div>
        </div>
        <div class="col-1"></div>
        <div class="col">
            <div class="form-group">
                <label for="nameCourse">Name Course</label>
                @error('name')
                <span class="text-danger text-sm">*{{$message}}</span>
                @enderror
                <input type="text" class="form-control" id="nameCourse" name="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="descriptionCourse">Description</label>
                @error('description')
                <span class="text-danger text-sm">*{{$message}}</span>
                @enderror
                <textarea class="form-control" id="descriptionCourse" rows="5"
                    name="description">{{old('description')}}</textarea>
            </div>
            <div class="form-group">
                <label for="priceCourse">Price Course</label>
                @error('price')
                <span class="text-danger text-sm">*{{$message}}</span>
                @enderror
                <input type="number" class="form-control" id="priceCourse" name="price" value="{{old('price')}}">
            </div>
            <div class="form-group">
                <label for="kuotaCourse">Kuota Course</label>
                @error('kuota')
                <span class="text-danger text-sm">*{{$message}}</span>
                @enderror
                <input type="number" class="form-control" id="kuotaCourse" name="kuota" value="{{old('kuota')}}">
            </div>
            <div class="form-group">
                @error('skill')
                <span class="text-danger text-sm">*{{$message}}</span>
                @enderror
                <label for="achivementSkillCourse">Achivement Skill Course</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="skill">
                        <option selected>Choose...</option>
                        @foreach ($skills as $skill)
                        <option value="{{$skill->id}}">{{$skill->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-right mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')

$("#customFile").change(function(){
const name = $(this.files[0])[0].name;
$(".image-text").text(name);
readUrlImage($(this));
});


function readUrlImage(input){
let reader = new FileReader();

console.log(reader);

reader.onload = function(e){
$(".image-preview").attr('src', e.target.result);
{{-- console.log(e); --}}
}

reader.readAsDataURL(input[0].files[0]);
{{-- console.log(input[0].files[0]); --}}
}
@endsection
