<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'username' => ['required','max:255'],
            'display_name' => ['required','max:255'],
            'email' => ['required', 'email','max:255'],
            'password' => ['required','min:7','max:255'],

        ]);
        $attributes['password'] = bcrypt($attributes['password']);
        User::create($attributes);
        return redirect('/');
    }
}
