<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{



    public function index(Post $posts)
    {
        return view('dashboard.Posts.post-dashboard', [
            'posts' => Post::where('user_id', auth()->user()->id)->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Posts.post-create', [
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
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:2000',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        $validatedData['user_id'] = auth()->user()->id;

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        Post::create($validatedData);

        $notif = [
            'message' => 'Data has been Added',
            'alert-type' => 'success'
        ];

        return redirect()->route('post-dashboard')->with($notif);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        if ($post->author->id !== auth()->user()->id) {
            abort(403);
        }


        return view('dashboard.Posts.post-show', [
            'post' => $post,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.Posts.post-edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // $rules = ([
        //     'title' => 'required|max:255',
        //     // 'slug' => 'required|unique:posts',
        //     'category_id' => 'required',
        //     'image' => 'image|file|max:2000',
        //     'body' => 'required'
        // ]);

        // if ($request->slug != $post->slug) {
        //     $rules['slug'] = 'required|unique:posts';
        // }
        // if ($post->author->id !== auth()->user()->id) {
        //     abort(403);
        // }
        // if ($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }

        // $validatedData = $request->validate($rules);
        // if ($request->file('image')) {
        //     if ($request->oldImage) {
        //         Storage::delete($request->oldImage);
        //     }
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }
        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        // Post::where('id', $post->id)->update($validatedData);

        // return redirect()->route('post-dashboard')->with('success', ' Post has been Updated');
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:2000',
            'body' => 'required'
        ];

        $validatedData = $request->validate($rules);

        // Jika slug diubah, validasi slug agar tidak duplikat
        if ($request->slug != $post->slug) {
            $validatedData['slug'] = 'required|unique:posts';
        }

        // Jika pengguna tidak merupakan author dari post, maka akses ditolak
        if ($post->author->id !== auth()->user()->id) {
            abort(403);
        }

        // Jika file gambar diunggah
        if ($request->file('image')) {
            // Hapus file gambar lama jika ada
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            // Simpan file gambar baru
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        // Tambahkan informasi pengguna yang login dan excerpt dari body
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        // Update post dengan data yang telah divalidasi
        Post::where('id', $post->id)->update($validatedData);

        $notif = [
            'message' => 'Data has been Updated',
            'alert-type' => 'success'
        ];

        // Kembali ke halaman post dashboard dengan pesan sukses
        return redirect()->route('post-dashboard')->with($notif);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }

        $post->delete();

        $notif = [
            'message' => 'Data has been Deleted',
            'alert-type' => 'success'
        ];
        return redirect('/dashboard/posts')->with($notif);
    }

    public function checkSlug(Request $request)
    {

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
