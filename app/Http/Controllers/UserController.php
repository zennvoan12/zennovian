<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $author)
    {
        return view('pages.posts', [
            'title' => "User By Author : $author->name",
            'posts' => $author->post->load('category', 'author'),
            'categories' => 'Category'
        ]);
    }
}