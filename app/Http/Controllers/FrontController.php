<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $courses = Course::all();
        return view('home', compact('courses'));
    }
}
