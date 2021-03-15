<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginMemberController extends Controller
{
    public function login(){
        return view('member.login');
    }

    public function authenticate(Request $request){
        $this->validate($request, [
            'email' => 'required|string|exists:students,email',
            'password' => 'required|string',
        ]);

        // Inputan yg diambil
        $credentials = $request->only('email', 'password');

        if (Auth::guard('member')->attempt($credentials)) {
            // Jika berhasil login

            return redirect(route('home'));

            //return redirect()->intended('/details');
        }
        // Jika Gagal
        return redirect()->back()->with('error', 'email / password tidak cocok');
    }
}