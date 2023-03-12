<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = auth()->user();

        return view('profile.dashboard', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $data = $request->validate([
            'first_name' => [ 'nullable', 'max:255'],
            'last_name' => ['nullable', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable'],
            'password' => ['nullable', 'min:6', 'confirmed'],
            'country' => ['nullable'],
            'governorate' => ['nullable'],
            'affiliation' => ['nullable'],
            'speciality' => ['nullable'],
            'accept_newsletter_emails' => ['nullable'],
        ]);

        $user = auth()->user();
        $user->update($data);

        if($request->governorate != ''){
            $user->other_governorate = '';
        }
        elseif($request->other_governorate != ''){
            $user->governorate = '';
            $user->other_governorate = $request->other_governorate;
        }

        if($request->accept_newsletter_emails){
            $user->accept_newsletter_emails = 1;
        }else{
            $user->accept_newsletter_emails = 0;
        }
        
        if($request->password){
            $user->password =  bcrypt($request->password);
        }
        $user->save();

        

        Flash::success('Your profile has been updated successfully.');

        return back();
    }

}
