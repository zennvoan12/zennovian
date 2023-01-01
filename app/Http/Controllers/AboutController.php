<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about', [
            'title' => 'About',
            'sub_title' => 'Blog mendapatkan informasi yang termutakhir',
            ''
        ]);
    }
}