<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    // Showing the profile page
    public function show($id)
    {
        // Fetch the user by id
        $user = User::with('favorites')->findOrFail($id);

        // Return the view with user data
        return view('profile.show', compact('user'));
    }

    // Show the edit profile form
    public function edit($id)
    {
        // Fetch the user by id
        $user = User::findOrFail($id);

        // Return the edit form view with user data
        return view('profile.edit', compact('user'));
    }

    // Handle the update form submission
    public function update(Request $request, $id)
    {

        // Validate and update user profile here

        // 1) Fetch the user by id
        $user = User::findOrFail($id);

        //2) Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'location' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
            'github' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        // finally Update user data
        $user->update($request->all());

        // Redirect back to the profile page with success message
        return redirect()->route('profile.show', $user->id)->with('success', 'Profile updated successfully!');
    }
}

