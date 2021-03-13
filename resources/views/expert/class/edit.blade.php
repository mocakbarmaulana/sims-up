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
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif
    <div class="row">
        <div class="col">
            <form action="{{route('expert.class.update', $course->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="text-center">
                    <img src="{{asset('storage/assets/images/course/'.$course->image_course)}}"
                        class="img-fluid image-preview" style="min-height: 500px" alt="no-image">
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
                <input type="text" class="form-control" id="nameCourse" name="name" value="{{$course->name}}">
            </div>
            <div class="form-group">
                <label for="descriptionCourse">Description</label>
                @error('description')
                <span class="text-danger text-sm">*{{$message}}</span>
                @enderror
                <textarea class="form-control" id="descriptionCourse" rows="5"
                    name="description">{{$course->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="priceCourse">Price Course</label>
                @error('price')
                <span class="text-danger text-sm">*{{$message}}</span>
                @enderror
                <input type="number" class="form-control" id="priceCourse" name="price" value="{{$course->price}}">
            </div>
            <div class="form-group">
                <label for="kuotaCourse">Kuota Course</label>
                @error('kuota')
                <span class="text-danger text-sm">*{{$message}}</span>
                @enderror
                <input type="number" class="form-control" id="kuotaCourse" name="kuota"
                    value="{{$course->quota_student}}">
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
                        <option value="{{$skill->id}}" {{($course->skill_id === $skill->id) ? 'selected' : ''}}>
                            {{$skill->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-4">
                <button type="button" class="btn btn-outline-danger btn-delete-course" data-idcourse="{{$course->id}}"
                    data-toggle="modal" data-target="#btnDeleteCourse">Delete</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="btnDeleteCourse" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center mt-4">
                <div>
                    <i class="far fa-times-circle fa-4x text-danger mb-3"></i>
                    <p><strong>Apakah anda yakin ingin menghapus item ini?</strong></p>
                </div>
                <div class="mt-5">
                    <form action="" class="form-course-delete" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-outline-secondary mx-3" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger mx-3">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
$(".btn-delete-course").on("click", function(){
const id = $(this)[0].dataset.idcourse;
$(".form-course-delete").attr('action', `/expert/class/delete/${id}`)
});

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
}

reader.readAsDataURL(input[0].files[0]);
}
@endsection
