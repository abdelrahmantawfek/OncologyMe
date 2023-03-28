<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;
use App\Models\Affiliation;
use App\Models\Speciality;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function response($user)
    {
        $token = $user->createToken(str()->random(40))->plainTextToken;
        return response()->json([
            'user' => $user,
            'token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    public function register(Request $request)
    {
        // validation
        $fname_required = Validator::make($request->all(), ['first_name' => 'required']);

        
        if ($fname_required->fails()) {
            return response([
                'type' => 'noFirstNameAdded',
                'errors'=>$fname_required->errors()->first(),
            ], 422);
        }

        $fname_string= Validator::make($request->all(), ['first_name' => 'string']);

        if ($fname_string->fails()) {
            return response([
                'type' => 'notString',
                'errors'=>$fname_string->errors()->first(),
            ], 422);
        }

        $fname_max= Validator::make($request->all(), ['first_name' => 'max:255']);

        if ($fname_max->fails()) {
            return response([
                'type' => 'exceededMaxFNameLength',
                'errors'=>$fname_max->errors()->first(),
            ], 422);
        }

        $lname_required = Validator::make($request->all(), ['last_name' => 'required']);

        if ($lname_required->fails()) {
            return response([
                'type' => 'noLastNameAdded',
                'errors'=>$lname_required->errors()->first(),
            ], 422);
        }

        $lname_string= Validator::make($request->all(), ['last_name' => 'string']);

        if ($lname_string->fails()) {
            return response([
                'type' => 'notString',
                'errors'=>$lname_string->errors()->first(),
            ], 422);
        }

        $lname_max= Validator::make($request->all(), ['last_name' => 'max:255']);

        if ($lname_max->fails()) {
            return response([
                'type' => 'exceededMaxLNameLength',
                'errors'=>$lname_max->errors()->first(),
            ], 422);
        }

        $mail_required = Validator::make($request->all(), ['email' => 'required']);

        if ($mail_required->fails()) {
            return response([
                'type' => 'noEmailAdded',
                'errors'=>$mail_required->errors()->first(),
            ], 422);
        }

        $mail_string= Validator::make($request->all(), ['email' => 'string']);

        if ($mail_string->fails()) {
            return response([
                'type' => 'notString',
                'errors'=>$mail_string->errors()->first(),
            ], 422);
        }

        $mail_max= Validator::make($request->all(), ['email' => 'max:255']);

        if ($mail_max->fails()) {
            return response([
                'type' => 'exceededMaxEmailLength',
                'errors'=>$mail_max->errors()->first(),
            ], 422);
        }

        $mail_valid= Validator::make($request->all(), ['email' => 'email']);

        if ($mail_valid->fails()) {
            return response([
                'type' => 'notValidEmail',
                'errors'=>$mail_valid->errors()->first(),
            ], 422);
        }

        $mail_exist= Validator::make($request->all(), ['email' => 'unique:users,email,']);

        if ($mail_exist->fails()) {
            return response([
                'type' => 'alreadyEmailUsedBefore',
                'errors'=>$mail_exist->errors()->first(),
            ], 422);
        }

        $phone_required= Validator::make($request->all(), ['phone' => 'required']);

        if ($phone_required->fails()) {
            return response([
                'type' => 'noPhoneAdded',
                'errors'=>$phone_required->errors()->first(),
            ], 422);
        }

        $phone_string= Validator::make($request->all(), ['phone' => 'string']);

        if ($phone_string->fails()) {
            return response([
                'type' => 'notString',
                'errors'=>$phone_string->errors()->first(),
            ], 422);
        }

        $pass_required= Validator::make($request->all(), ['password' => 'required']);

        if ($pass_required->fails()) {
            return response([
                'type' => 'noPasswordAdded',
                'errors'=>$pass_required->errors()->first(),
            ], 422);
        }

        $pass_string= Validator::make($request->all(), ['password' => 'string']);

        if ($pass_string->fails()) {
            return response([
                'type' => 'notString',
                'errors'=>$pass_string->errors()->first(),
            ], 422);
        }

        $pass_min_length= Validator::make($request->all(), ['password' => 'min:6']);

        if ($pass_min_length->fails()) {
            return response([
                'type' => 'exceededMinPasswordLength',
                'errors'=>$pass_min_length->errors()->first(),
            ], 422);
        }
        
        $pass_confirmation= Validator::make($request->all(), ['password' => 'confirmed']);

        if ($pass_confirmation->fails()) {
            return response([
                'type' => 'notConfirmedYet',
                'errors'=>$pass_confirmation->errors()->first(),
            ], 422);
        }

        $country_required= Validator::make($request->all(), ['country' => 'required']);

        if ($country_required->fails()) {
            return response([
                'type' => 'noCountryAdded',
                'errors'=>$country_required->errors()->first(),
            ], 422);
        }

        $country_string= Validator::make($request->all(), ['country' => 'string']);

        if ($country_string->fails()) {
            return response([
                'type' => 'notString',
                'errors'=>$country_string->errors()->first(),
            ], 422);
        }
    
        $governorate_required= Validator::make($request->all(), ['governorate' => 'required']);

        if ($governorate_required->fails()) {
            return response([
                'type' => 'noGovernorateAdded',
                'errors'=>$governorate_required->errors()->first(),
            ], 422);
        }

        $governorate_string= Validator::make($request->all(), ['governorate' => 'string']);

        if ($governorate_string->fails()) {
            return response([
                'type' => 'notString',
                'errors'=>$governorate_string->errors()->first(),
            ], 422);
        }

        $affiliation_required= Validator::make($request->all(), ['affiliation' => 'required']);

        if ($affiliation_required->fails()) {
            return response([
                'type' => 'noAffiliationAdded',
                'errors'=>$affiliation_required->errors()->first(),
            ], 422);
        }

        $affiliation_string= Validator::make($request->all(), ['affiliation' => 'string']);

        if ($affiliation_string->fails()) {
            return response([
                'type' => 'notString',
                'errors'=>$affiliation_string->errors()->first(),
            ], 422);
        }

        $speciality_required= Validator::make($request->all(), ['speciality' => 'required']);

        if ($speciality_required->fails()) {
            return response([
                'type' => 'noSpecialityAdded',
                'errors'=>$speciality_required->errors()->first(),
            ], 422);
        }

        $speciality_string= Validator::make($request->all(), ['speciality' => 'string']);

        if ($speciality_string->fails()) {
            return response([
                'type' => 'notString',
                'errors'=>$speciality_string->errors()->first(),
            ], 422);
        }

        $accept_emails= Validator::make($request->all(), ['accept_newsletter_emails' => 'nullable']);

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
            'accept_newsletter_emails'  =>   $request->accept_newsletter_emails,
        ]);

         
        Mail::to($user->email)->send(new NotifyMail($user));

        // return $this->response($user);
        return response()->json([
            'success' => true,
            'message' => "You are successfully registered to OncologyMe! Please check your email to activate your account",
        ]); 

    }

    public function login(Request $request)
    {

        $cred = Validator::make($request->all(), ['email' => 'required']);

        if ($cred->fails()) {
            return response([
                'success' => false,
                'type' => 'noEmailAdded',
                'errors'=>$cred->errors()->first(),
            ], 422);
        }

        $mail_exist = Validator::make($request->all(), ['email' => 'exists:users,email']);

        if ($mail_exist->fails()) {
            return response([
                'success' => false,
                'type' => 'userNotExist',
                'errors'=>$mail_exist->errors()->first(),
            ], 422);
        }  

        $pass = Validator::make($request->all(), ['password' => 'required']);

        if ($pass->fails()) {
            return response([
                'success' => false,
                'type' => 'noPasswordAdded',
                'errors'=>$pass->errors()->first(),
            ], 422);
        }

        // $remember_me = $request->has('remember_me') ? true : false; 
   
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = User::where('email', $request->email)->first();
            if($user->status == 0) {
                return response()->json([
                    'success' => false,
                    'type' => 'notActivatedYet',
                    'errors' => "You have to activate your account through message sent to your email",
                ], 422); 
            }
        } 
        else {
            return response()->json([
                'success' => false,
                'type' => 'incorrectUserPassword',
                'errors' => "Password is not correct, try again",
            ], 422);     
        }
       
        return $this->response($user);
    }

    public function forgetPassword(Request $request)
    {
        $input = $request->only('email');

        $mail = Validator::make($input, ['email' => "required"]);

        if ($mail->fails()) {
            return response([
                'success' => false,
                'type' => 'noEmailAdded',
                'errors'=>$mail->errors()->first(),
            ], 422);
        }

        $mailval = Validator::make($input,['email' => "email"]);

        if ($mailval->fails()) {
            return response([
                'success' => false,
                'type' => 'notValidEmail',
                'errors'=>$mailval->errors()->first(),
            ], 422);
        }

        $mailexist = Validator::make($input, ['email' => "exists:users,email"]);

        if ($mailexist->fails()) {
            return response([
                'success' => false,
                'type' => 'userNotExist',
                'errors'=>$mailexist->errors()->first(),
            ], 422);
        }

        $response =  Password::sendResetLink($input);

        if($response == Password::RESET_LINK_SENT){
                $message = __('messages.reset_password');
                $message = "you will receive the password reset link soon";
        }else{
                $message = "sorry, we can not send to you the password reset link";
        }
        $response = ['message' => $message];
            
        return response($response, 200);
    }

    public function registerData()
    {
        $data['affiliations'] = Affiliation::all();
        $data['specialities'] = Speciality::all();

        return response()->json($data);
    }

    

}
