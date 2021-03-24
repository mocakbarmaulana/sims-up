<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\Course;
use App\Models\Order;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function achive(Request $request, $id){
        $course = Course::find($id);

        $orders = Order::where('course_id', $id)->where('status', 1)->get();


        foreach ($orders as $key => $order) {
            $trophy = new Achievement();
            $trophy->student_id = $order->student_id;
            $trophy->course_id = $order->course_id;
            $trophy->skill_id = $order->course->skill_id;
            $trophy->name_student = $order->student_name;
            $trophy->name_course = $order->course->name;
            $trophy->name_skill = $order->course->skill->name;
            $trophy->status = true;
            $trophy->save();
        }

        $course->status = true;
        $course->save();

        return redirect()->back()->with('success', 'Workshop telah selesai');
    }
}