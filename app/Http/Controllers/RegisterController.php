<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {

        $attributes = request()->validate(
            [
                'name' => 'required|max:255',
                'username' => 'required|min:5|max:15|unique:users',
                'email' => 'required|email:dns|max:255|unique:users,email',
                'password' => 'required|min:8|max:255',
            ],
        );


        $user = User::create($attributes);
        auth()->login($user);

        return redirect('/dashboard');
    }
}