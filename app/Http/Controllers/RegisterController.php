<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;
use App\Models\Affiliation;
use App\Models\Speciality;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{

    public function close_defualt_register()
    {
        return Redirect::to('signup');
        // abort(404);
    }
    public function register()
    {
        $countries = User::countries();
        $governorates = User::governorates();
        $affiliations = Affiliation::all()->pluck('title');
        $specialites = Speciality::all()->pluck('title');

        return view('auth.register', compact('countries', 'governorates', 'affiliations', 'specialites'));
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
         
        Mail::to($user->email)->send(new NotifyMail($user));

        return view('auth.login');
    }
    
}
