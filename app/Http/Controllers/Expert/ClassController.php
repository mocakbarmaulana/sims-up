<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = "Class";
        $courses = Course::all();

        return view('expert.class.class', compact('active', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = "Class";
        $skills = Skill::all();

        return view('expert.class.create', compact('active', 'skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:courses|max:150',
            'description' => 'required|string',
            'price' => 'required|integer',
            'kuota' => 'required|integer',
            'skill' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $image = $this->uploadImage($request->image, null);

        $course = new Course;
        $course->name = $request->name;
        $course->image_course = $image;
        $course->teacher_id = Auth::guard('expert')->user()->id;
        $course->description = $request->description;
        $course->quota_student = $request->kuota;
        $course->price = $request->price;
        $course->skill_id = $request->skill;
        $course->status = true;
        $course->save();

        return redirect(route('expert.class'))->with('success', 'Course baru telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // Function upload image
    public function uploadImage($imgProduct, $imageDB){
        $imageName = $imageDB;
        if(!empty($imgProduct)){

            $imageName = md5(time() . '.' . $imgProduct->extension());

            Storage::putFileAs(
                'public/assets/images/course',
                $imgProduct,
                $imageName,
            );

            if ($imageDB != null) {
                Storage::delete('/public/assets/images/course'.$imageDB);
            }

        }
        return $imageName;
    }
}