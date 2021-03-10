<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginExpertController extends Controller
{
    public function index(){
        return view('expert.login');
    }

    public function authenticate(Request $request){
        $this->validate($request, [
            'email' => 'required|string|exists:teachers,email',
            'password' => 'required|string',
        ]);
        
        // Inputan yg diambil
        $credentials = $request->only('email', 'password');
        $credentials['status'] = 1;

        if (Auth::guard('expert')->attempt($credentials)) {
            // Jika berhasil login

            return redirect(route('expert.class'));

            //return redirect()->intended('/details');
        }
        // Jika Gagal
        return redirect()->back()->with('error', 'email / password tidak cocok');
    }
}