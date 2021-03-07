<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $active = 'Skill';
        return view('admin.skill', compact('active'));
    }
}