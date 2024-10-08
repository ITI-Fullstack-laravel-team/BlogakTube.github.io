<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Showing the profile page
    public function show($id)
    {
        // Find the user whose profile is being viewed
        $user = User::findOrFail($id);
        
        // For testing purposes, pretend user ID 1 is the authenticated user
        $authUser = User::find(1); // Assuming user with ID 1 exists

        // Pass both the user and the "authUser" to the view
        return view('profile.show', compact('user', 'authUser'));
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
        // 1) Fetch the user by id
        $user = User::findOrFail($id);

        // 2) Validate the request
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

        // Update user data
        $user->update($request->all());

        // Redirect back to the profile page with success message
        return redirect()->route('profile.show', $user->id)->with('success', 'Profile updated successfully!');
    }
}

