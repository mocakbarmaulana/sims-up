<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $active = 'Course';

        $courses = Course::paginate(10);

        return view('admin.course.index', compact('active', 'courses'));
    }

    public function show($id){
        $active = 'Course';
        return view('admin.course.show', compact('active'));
    }
}