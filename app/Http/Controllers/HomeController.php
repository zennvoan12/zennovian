<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            "title" => "Home",
            "posts" => Post::latest()->get(),


        ]);
    }
}