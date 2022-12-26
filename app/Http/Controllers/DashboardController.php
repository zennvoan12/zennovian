<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Post $req)
    {
        $req = route('post-create');
        return view('dashboard.index', [
            'post' => $req
        ]);
    }
}