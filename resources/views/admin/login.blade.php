@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
               
            <div class="card rounded shadow-sm p-10 w-lg-500px p-lg-15 mx-auto" style="background-color: #fff">
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
                    <form method="POST" action="{{ route('admin.postLogin') }}">
                        @include('flash::message')
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

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request', app()->getLocale()) }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
