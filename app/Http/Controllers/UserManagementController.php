<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class UserManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('creator:viewAny,CreatorPolicy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::query()->paginate(5);
        return view('dashboard.Management.user-management', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Management.user-management-create', [
            'users' => User::all()
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
            'email' => 'required|unique:users',
            'username' => 'required|min:5|max:15|unique:users',
            'phone' => 'required|max:15',
            'photo' => 'image|file|max:2000',
            'role' => 'required',
            'password' => 'required|min:8|max:255'
        ]);

        if ($request->file('photo')) {

            $validatedData['photo'] = $request->file('photo')->store('user-photos', 'public');
        }
        if (Storage::exists($validatedData['photo'])) {
            Storage::delete($validatedData['photo']);
        }

        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->photo = $validatedData['photo'];
        $user->role = $validatedData['role'];
        $user->username = $validatedData['username'];
        $user->password = $validatedData['password'];


        $user->save();
        $notif = [
            'message' => 'Data has been Added',
            'alert-type' => 'success'
        ];

        return redirect()->route('dashboard.Management.user-management')->with($notif);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.Management.user-management-edit', [
            'user' => $user,
            'users' => User::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'username' => 'required|min:5|max:15|unique:users',
            'phone' => 'required|max:15',
            'photo' => 'image|file|max:2000',
            'role' => 'required',
            'password' => 'required|min:8|max:255'
        ]);

        if ($request->username !=  $user->username) {
            $validatedData['username'] = 'required|min:5|max:15|unique:users';
        }
        if ($request->file('photo')) {
            if ($request->oldPhoto) {
                Storage::delete($request->oldPhoto);
            }
            $validatedData['photo'] = $request->file('photo')->store('user-photos', 'public');
        }

        User::where('id', $user->id)->update($validatedData);
        $notif = [
            'message' => 'User has been Updated',
            'alert-type' => 'success'
        ];

        return redirect()->route('user-management.index')->with($notif);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (!Storage::exists($user->photo)) {
            $user->delete();
        }

        if ($user->photo) {
            Storage::delete($user->photo);
        }


        $user->delete();

        $notif = [
            'message' => 'Data has been Deleted',
            'alert-type' => 'success'
        ];
        return redirect('dashboard/users')->with($notif);
    }

    public function checkUsername(Request $request)
    {

        $slug = SlugService::createSlug(Post::class, 'username', $request->username);

        return response()->json(['slug' => $slug]);
    }
}