<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('index', [
            "title" => "Home",
            "posts" => Post::latest()->get(),
            "hacks" =>  Post::whereHas('category', function ($query) {
                $query->where('name', 'Hacking');
            })->get()
        ]);
    }
}