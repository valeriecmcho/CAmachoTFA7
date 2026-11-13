<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UserController extends Controller
{
    /**
     * Display the User Accounts page using Eloquent.
     */
    public function index()
    {
        $users = User::all();

        return view('users', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created user in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username'  => ['required', 'string', 'max:50', 'unique:users,username'],
            'full_name' => ['required', 'string', 'max:100'],
        ]);

        User::create([
            'username'   => $request->username,
            'full_name'  => $request->full_name,
            'created_at' => now(),
        ]);

        return redirect()->route('users')
            ->with('success', 'User created successfully.');
    }

    /**
     * Show the form for editing an existing user.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified user in the database.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'username'  => ['required', 'string', 'max:50', 'unique:users,username,' . $user->id],
            'full_name' => ['required', 'string', 'max:100'],
            'avatar'    => ['nullable', 'image', 'max:2048'],
        ]);

        $data = [
            'username'  => $request->username,
            'full_name' => $request->full_name,
        ];

        if ($request->hasFile('avatar')) {
            // Delete old avatar if it exists
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            $file = $request->file('avatar');

            // Create a 150x150 thumbnail using Intervention Image v3
            $manager = new ImageManager(new Driver());
            $image   = $manager->read($file->getRealPath());
            $image->cover(150, 150);

            // Generate a unique filename and save to storage/app/public/avatars/
            $filename = 'avatars/' . uniqid('avatar_', true) . '.jpg';
            Storage::disk('public')->put($filename, $image->toJpeg());

            $data['avatar'] = $filename;
        }

        $user->update($data);

        return redirect()->route('users')
            ->with('success', 'User updated successfully.');
    }
}
