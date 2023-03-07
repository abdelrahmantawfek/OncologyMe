<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;
use App\Models\Affiliation;
use App\Models\Speciality;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function close_defualt_register()
    {
        return Redirect::to('signup');

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
        // dd($request);
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'country' => ['required', 'string'],
            'governorate' => '',
            'other_governorate' => '',
            'affiliation' => ['required', 'string'],
            'speciality' => ['required', 'string'],
            'accept_newsletter_emails' => ['nullable'],
        ]);

        
        $user = User::create([
            'first_name'  => $request->first_name,
            'last_name'  =>  $request->last_name ,
            'email'  =>   $request->email,
            'phone'  =>   $request->phone,
            'password'  =>   bcrypt($request->password),
            'country'  =>   $request->country,
            'governorate'  =>   $request->governorate,
            'affiliation'  =>   $request->affiliation,
            'speciality'  =>   $request->speciality,
            'accept_newsletter_emails'  =>  $request->accept_newsletter_emails,
        ]);
        // $user = User::create($data);
         
        Mail::to($user->email)->send(new NotifyMail($user));
        Flash::success('You are successfully registered to OncologyMe! Please check your email to activate your account');

        return redirect()
                ->back();
        // return view('auth.login');
    }

    public function post_signin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $credentials['email'])->get()->first();
        if (Auth::attempt($credentials)) {
            if($user->status == 1){
                return redirect(route('home'));
                // return redirect(route('user.profile'));
            }
            else{
                Flash::error('You have to activate your account through message sent to your email');
                return view('auth.login');
            }
        }

        Flash::error(__('auth.failed'));
        return redirect()->back();
    }

    public function activate_account(Request $request)
    {
        if (request()->filled('email')) {
            $email = $request->email;
            $user = User::where('email', $email)->get()->first();
    
            $status = $user->status;
            if($status == false){

                $user->status = true;
                $user->save();
                Flash::success('You have successfully activated your account');
            }
            else{
                Flash::success('Your account is already activated');
            }
            // dd($status);
        }

        return view('auth.login');

    }

    
}
