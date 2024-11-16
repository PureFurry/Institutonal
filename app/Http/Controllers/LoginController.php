<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (auth()->check()) {
            return redirect()->route('admin.about'); // or any route that leads to '/'
        }

        // Check if the request is a GET request to show the login form
        if ($request->isMethod('GET')) {
            return view('admin.login');
        }

        // If the request is a POST request for login
        elseif ($request->isMethod('POST')) {
            // Validate the request data
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
            // Retrieve the credentials from the request
            $credentials = $request->only('email', 'password');

            // Attempt to authenticate the user
            if (Auth::attempt($credentials)) {
                // Regenerate the session to prevent session fixation attacks
                $request->session()->regenerate();
                // Redirect the user to the intended route or a default route
                return redirect()->intended(route('about.index'))->with('login', 'success');
            } else {
                // If authentication fails, redirect back with an error message
                return redirect()->back()->withErrors(['login' => 'Invalid credentials'])->withInput();
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('resume.index')->with('logout', 'You have been logged out.');
    }
}
