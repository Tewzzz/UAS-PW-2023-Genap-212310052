<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function index() {
        return view('auth.signin');
    }

    public function authenticate(Request $request) {
        $valid = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
            
        ]);
        if (Auth::attempt($valid)) {
            $request->session()->regenerate();
            
            if($request-> email=='saungeling@gmail.com'){
                return redirect()->intended('/admin');
            }
            return redirect()->intended('/');
        }
        return back()->with('failed', 'SignIn Failed');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
