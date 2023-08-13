<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    
    public function index () {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    public function update(Request $request, $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Validate the request data
        $request->validate([
            'role' => 'required|in:admin,user',
        ]);

        // Update the user's role
        $user->type = $request->role;
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'User role updated successfully.');
    }
    public function destroy($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Delete the user
        $user->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    // ...

}
