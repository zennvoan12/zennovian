<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CreatorCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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
})->name('home');
Route::get('/about', function () {
    return view('pages.about', [
        'title' => 'About'
    ]);
});

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('pages.posts');
    Route::get('/posts/{post:slug}', 'show');
});


Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('pages.posts');
});


route::get('/authors/{author:username}', [UserController::class, 'show']);




Route::get('/login', function () {
    return redirect('sign-in');
})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');

Route::get('verify', function () {
    return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
    return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::group(['middleware' => 'auth'], function () {



    Route::resource('dashboard/posts', DashboardPostController::class)->names([
        'index' => 'post-dashboard',
        'show' => 'post-show',
        'create' => 'post-create',
        'edit' => 'post-edit',
        'destroy' => 'post-delete',
        'update' => 'post-edit'
    ]);

    // Route::controller(DashboardPostController::class)->group(function () {
    //     Route::get('dashboard/posts', [DashboardPostController::class, 'index'])->name('post-dashboard');
    //     Route::get('dashboard/posts/{post:slug}', [DashboardPostController::class, 'show'])->name('post-show');
    //     Route::post('dashboard/posts/create', [DashboardPostController::class, 'index'])->name('post-create');
    //     Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
    //     // Route::delete('dashboard/posts/{post:id}', [DashboardPostController::class, 'destroy'])->name('post-dashboard')->where('slug', '[\w-]+');
    //     Route::delete('dashboard/posts/{post:slug}', [DashboardPostController::class, 'destroy'])->name('post-delete')->where('slug', '[\w-]+');
    // });

    Route::get('virtual-reality', function () {
        return view('dashboard.virtual-reality');
    })->name('virtual-reality');
    Route::get('dashboard/notifications', function () {
        return view('dashboard.notifications');
    })->name('notifications');


    Route::get('static-sign-in', function () {
        return view('dashboard.static-sign-in');
    })->name('static-sign-in');

    Route::get('static-sign-up', function () {
        return view('dashboard.static-sign-up');
    })->name('static-sign-up');

    Route::get('user-management', function () {
        return view('dashboard.laravel-examples.user-management');
    })->name('user-management');

    Route::get('user-profile', function () {
        return view('dashboard.laravel-examples.user-profile');
    })->name('user-profile');
});


Route::resource('/dashboard/categories', CreatorCategoryController::class)
    ->middleware('admin:admin')
    ->names([
        'index' => 'category-dashboard',
        'create' => 'category-create',
        'edit' => 'category-edit',
        'update' => 'category-edit',
        'destroy' => 'category-delete'
    ])->except('show');