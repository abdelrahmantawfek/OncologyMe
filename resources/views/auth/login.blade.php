@extends('layouts.app')

@section('meta')

   <title> Login - {{$general_info[0]->tagline}} </title>

@endsection

@section('content')

<!-- Main Section -->
<div class="careerfy-main-section careerfy-about-text-full">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 careerfy-typo-wrap">
                <div class="jobsearch-login-box">
                    <div id="exTab1">
                        <div class="div-signup">
                            <div class="careerfy-services-classic">
                                <span><i class="careerfy-icon careerfy-user-1"></i></span>
                            </div>
                            <h3>Login to your account</h3>

                        </div>
                        <div class="cs-msgs">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @include('flash::message')
                        </div>
                        <form method="POST" action="{{ route('postSignin') }}">
                            @csrf
                            <div class="careerfy-box-title careerfy-box-title-sub">
                                <span>Sign In</span>
                            </div>
                            <div id="login_form" class="careerfy-user-form">
                                <ul>
                                    <li>
                                        <label>Email Address:</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email Address">
                                        <i class="careerfy-icon careerfy-mail"></i>
                                       
                                    </li>
                                    {{-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror --}}
                                    <li>
                                        <label>Password:</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">
                                        <i class="careerfy-icon careerfy-multimedia"></i>
                                        
                                    </li>
                                    {{-- @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                    <li>
                                        <input type="submit" value="Sign In">
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                <div class="careerfy-user-form-info">
                                    <p>@if (Route::has('password.request'))<a href="{{route('password.request')}}">Forgot Password?</a> @endif| <a href="{{route('register')}}">Sign Up</a></p>
                                    <div class="careerfy-checkbox">
                                        <input type="checkbox" id="r10" name="rr" />
                                        <label for="r10"><span></span> Remember Password</label>
                                    </div>
                                </div>
                            </div>

                        </form>
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
               
            <div class="card rounded shadow-sm p-10 w-lg-500px p-lg-15 mx-auto" style="background-color: #778fa2">
                <div class="text-center mb-10">
                     <!--begin::Logo-->
                    <a href="/" class="mb-12 d-block">
                        <img alt="Logo" src="{{ asset('uploads/logo.png') }}" class="h-100px" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">Sign In</h1>
                    <!--end::Title-->
                </div>
                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="col-md-4 col-form-label ">{{ __('Email Address') }}</label><br>

                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label><br>

                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request', app()->getLocale()) }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
