<?php

namespace App\Http\Controllers;

use App\Models\Job;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employer;

class EmployerController extends Controller
{
    public function profile()
    {
        $currentUserId = Auth::id();
        
        $employer = Employer::where('user_id',$currentUserId)->first();
        // $jobs = $employer->jobs()->get();
        
        $jobs = Employer::find($employer->id)->jobs;
        return view('employer.profile',[
            'employer'  => $employer,
            'jobs'      => $jobs,
        ]);
        
    }
    //     public function edit()
//     {
//         $employer = Auth::user()->employer;

//         return view('employer.edit', compact('employer'));
// }

    public function update(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect('login')->withErrors('You must be logged in to update your profile.');
        }
        $employer = $user->employer;
        $attributes=$request->validate([
            'name' => ['required'],
            'logo' => ['nullable', 'image'],
            'email' => ['required', 'email', 'unique:users,email,' . $user->id],
            // The current user's ID ($user->id) is appended to exclude the current user's record from the uniqueness check, allowing the user to keep their existing email
            'password' => ['nullable', 'confirmed', 'min:8'], 
        ]);
        $employer->update([
            'name' => $attributes['name'],
            'logo' => $request->hasFile('logo') ? $request->file('logo')->store('logos', 'public') : $employer->logo,
        ]);

        $userData = [
            'email' => $attributes['email'],
            'password' => $attributes['password'] ? bcrypt($attributes['password']) : $user->password,
        ];

        $user->update($userData);

        // Log out the user if email or password was updated
        if ($request->email || $request->password) {
            Auth::logout();
            return redirect('login')->with('message', 'Your profile was updated. Please log in again.');
        }
        
        return redirect()->route('employer.profile')->with('success', 'Profile updated successfully.');



    }
}