<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function index()
    {
        return view('auth.register');
    }

    public function post_signup(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'country' => ['required', 'string'],
            'governorate' => ['required', 'string'],
            'affiliation' => ['required', 'string'],
            'specialty' => ['required', 'string'],
            'accept_newsletter_emails' => ['nullable'],
        ]);

        $user = User::create($data);

        return redirect('/');
    }
    
}
