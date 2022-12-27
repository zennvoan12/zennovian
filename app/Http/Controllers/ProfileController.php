<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        return view('dashboard.profile');
    }

    // public  function update()
    // {

    //     $user = request()->user();
    //     $attributes = request()->validate([
    //         'email' => 'required|email|unique:users,email,' . $user->id,
    //         'name' => 'required',
    //         'phone' => 'required|max:10',
    //         'about' => 'required:max:150',
    //         'location' => 'required'
    //     ]);

    //     auth()->user()->update($attributes);
    //     return back()->withStatus('Profile successfully updated.');
    // }
    public function update(Request $request)
    {
        $user = $request->user();
        $attributes = $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'name' => 'required',
            'phone' => 'required|max:12',
            'about' => 'required:max:150',
            'location' => 'required'
        ]);

        $user->update($attributes);
        return redirect()->back()->with('status', 'Profile successfully updated.');
    }
}
