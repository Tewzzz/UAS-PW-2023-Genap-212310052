<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2|max:50',
            'email' => 'required|email:dns|max:50',
            'password' => 'required|min:8|max:50',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/signin')->with('success', 'Pendaftaran telah berhasil! Silahkan masuk.');
    }
}
