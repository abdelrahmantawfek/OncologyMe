@extends('layouts.app')

@section('meta')

   <title> Reset password  - {{$general_info[0]->tagline}} </title>

@endsection

@section('content')
<!-- Main Section -->
<div class="careerfy-main-section careerfy-about-text-full p-t-50">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 careerfy-typo-wrap">
                <div class="jobsearch-login-box">
                    <div id="exTab1">

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="1a">
                                <div class="div-signup">
                                    <div class="careerfy-services-classic">
                                        <span><i class="fa fa-lock"></i></span>
                                    </div>
                                    <h3>Forgot Password</h3>
                                    <h4 class="text-center">Enter the username or e-mail you used in your profile. <br> A password reset link will be sent to you by email.</h4>
                                </div>

                                <form method="POST" action="{{ route('password.update') }}" class="row">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-group col-md-12 ">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <i class="careerfy-icon careerfy-mail"></i>
                                    </div>

                                    <div class="form-group col-md-12 ">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <i class="careerfy-icon careerfy-multimedia"></i>
                                    </div>

                                    <div class="form-group col-md-12 ">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <i class="careerfy-icon careerfy-multimedia"></i>
                                    </div>



                                    <div class="m-b-15 m-t-15 col-md-12">
                                        <button type="submit" class="btn btn-primary pull-left">Get a new password</button>
                                        <p class="pull-right p-t-10">Already have an account?
                                            <a href="{{route('login')}}" class="careerfy-open-signin-tab">Sign in</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Section -->

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
