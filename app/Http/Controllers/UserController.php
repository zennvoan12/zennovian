<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $author)
    {
        return view('pages.posts', [
            'title' => 'User Post',
            'posts' => $author->post,
            'categories' => 'Category'
        ]);
    }
}