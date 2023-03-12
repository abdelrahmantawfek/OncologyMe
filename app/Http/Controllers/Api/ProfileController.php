<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
    public function update_profile(Request $request){
        
        // validation 
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

        $phone_string= Validator::make($request->all(), ['phone' => 'string']);

        if ($phone_string->fails()) {
            return response([
                'type' => 'notString',
                'errors'=>$phone_string->errors()->first(),
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

        $country_string= Validator::make($request->all(), ['country' => 'string']);

        if ($country_string->fails()) {
            return response([
                'type' => 'notString',
                'errors'=>$country_string->errors()->first(),
            ], 422);
        }

        $governorate_string= Validator::make($request->all(), ['governorate' => 'string']);

        if ($governorate_string->fails()) {
            return response([
                'type' => 'notString',
                'errors'=>$governorate_string->errors()->first(),
            ], 422);
        }

        $affiliation_string= Validator::make($request->all(), ['affiliation' => 'string']);

        if ($affiliation_string->fails()) {
            return response([
                'type' => 'notString',
                'errors'=>$affiliation_string->errors()->first(),
            ], 422);
        }

        $speciality_string= Validator::make($request->all(), ['speciality' => 'string']);

        if ($speciality_string->fails()) {
            return response([
                'type' => 'notString',
                'errors'=>$speciality_string->errors()->first(),
            ], 422);
        }

        // All posted data except token and id
        $data = request()->except(['_token','id']);

        // Remove empty array values from the data
        $result = array_filter($data);

        $user = auth()->user();
        
        $user->update($result);

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

        return response([
            'message' => "Your profile has been updated successfully.",
            'user'  => $user,
        ], 200);
    }
}
