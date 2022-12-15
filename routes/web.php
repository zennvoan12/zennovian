<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('pages.about', [
        'title' => 'About'
    ]);
});

Route::get('/posts', function () {

    $blog_posts = [];
    return view('pages.posts', [
        'title' => 'Blog',
        'posts' => Post::all()
    ]);
});


Route::get('posts/{slug}', function ($slug) {


    return view('pages.post', [
        'title' => 'Single Post',
        "post" => Post::find($slug)
    ]);
});

Route::get('/categories', function () {
    return view('pages.categories', [
        'title' => 'Category'
    ]);
});
