<?php

namespace App\Http\Controllers;

use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.Categories.category-dashboard', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.Categories.category-create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories',

        ]);
        Category::create($validatedData);

        $notif = [
            'message' => 'Data has been Added',
            'alert-type' => 'success'
        ];

        return redirect()->route('category-dashboard')->with($notif);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.Categories.category-edit', [
            'category' => $category,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:2000',
            'body' => 'required'
        ];
        $validatedData = $request->validate($rules);

        if ($request->slug != $category->slug) {
            $validatedData['slug'] = 'required|unique:posts';
        }

        if ($category->author->id !== auth()->user()->id) {
            abort(403);
        }
        Category::where('id', $category->id)->update($validatedData);
        $notif = [
            'message' => 'Data has been Updated',
            'alert-type' => 'success'
        ];

        // Kembali ke halaman post dashboard dengan pesan sukses
        return redirect()->route('category-dashboard')->with($notif);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, User $user)
    {
        $this->authorize('admin', $user)->category->delete();
        $notif = [
            'message' => 'Data has been Deleted',
            'alert-type' => 'success'
        ];
        return redirect()->route('category-dashboard')->with($notif);
    }


    public function checkSlug(Request $request)
    {

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}