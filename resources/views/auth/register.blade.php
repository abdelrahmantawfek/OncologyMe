@extends('layouts.app')

@section('meta')

   <title> Sign Up  - {{$general_info[0]->tagline}} </title>

@endsection

@section('content')
<!-- Main Section -->
<div class="careerfy-main-section careerfy-about-text-full">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 careerfy-typo-wrap">
                <div class="jobsearch-login-box" id="exTab1">
                    <div class="div-signup">
                        <div class="careerfy-services-classic">
                            <span><i class="careerfy-icon careerfy-user-1"></i></span>
                        </div>
                        <h3>Create New Account</h3>

                    </div>
                    <div class="cs-msgs form-group">
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
                

                    <form method="POST" action="{{ route('postSignup') }}" class="row">
                        @csrf
                        <div class="form-group col-md-6">
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" placeholder="First Name">
                            <i class="careerfy-icon careerfy-user"></i>
                            {{-- @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror --}}
                        </div>

                        <div class="form-group col-md-6">
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Last Name">
                            <i class="careerfy-icon careerfy-user"></i>
                            {{-- @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror --}}
                        </div>

                        <div class="form-group col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email"> 
                            <i class="careerfy-icon careerfy-mail"></i>
                            {{-- @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror --}}
                        </div>

                        <div class="form-group col-md-6">
                            <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone">
                            <i class="careerfy-icon careerfy-technology"></i>
                            {{-- @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror --}}
                        </div>

                        <div class="form-group col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" placeholder="Password">
                            <i class="careerfy-icon careerfy-multimedia"></i>
                            {{-- @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>

                        <div class="form-group col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            <i class="careerfy-icon careerfy-multimedia"></i>
                        </div>

                        <div class="form-group col-md-6">
                            {!! Form::select('country', $countries, null, ['class' => 'form-control', 'placeholder' => 'Country', 'required' => 'required', 'id' => 'country' ]) !!}
                            {{-- @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                        </div>

                        <div class="form-group col-md-6 cs-gov">
                            {!! Form::select('governorate', $governorates, null, ['class' => 'form-control', 'placeholder' => 'Governorate']) !!}
                            {{-- @error('governorate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                        </div>

                        <div class="form-group col-md-6 other-gov">
                            <input name='other_governorate' class="form-control" type="text" placeholder="Governorate">
                            <i class="careerfy-icon careerfy-edit"></i>
                            {{-- @error('other_governorate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                        </div>

                        <div class="form-group col-md-6">
                            <div class="combo-select-dropdown">
                                <ul class="select-list-group" id="ComboSelect3">
                                    <li class="select-lg-dropdown">
                                        <input type="text" class="select-list-group-search" name="affiliation" placeholder="Affiliation " required />
                                        <ul class="select-list-group-list" data-toggle="false">
                                            @foreach ($affiliations as $item)
                                                <li class="select-list-group-list-item" data-display="true" data-highlight="false">{{$item}}</li> 
                                            @endforeach
                                        </ul>
                                        </li>
                                </ul>
                                {{-- @error('affiliation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="combo-select-dropdown">
                                <ul class="select-list-group" id="ComboSelect">
                                    <li class="select-lg-dropdown">
                                        <input type="text" name="speciality" class="select-list-group-search" placeholder="Speciality" required />
                                        <ul class="select-list-group-list" data-toggle="false">
                                            @foreach ($specialites as $item)
                                                <li class="select-list-group-list-item" data-display="true" data-highlight="false">{{$item}}</li> 
                                            @endforeach
                                        </ul>
                                        </li>
                                </ul>
                                {{-- @error('affiliation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                            </div>
                        </div>
              

                        <div class="m-b-15 m-t-15 col-md-12">
                            <div class="terms-priv-chek-con">
                                <p>
                                    {!! Form::checkbox('accept_newsletter_emails', true, null, ['id' => 'newsletter']) !!} <label for="newsletter"> I consent to receiving Newsletters emails</label>
                                </p>
                            </div>
                        </div>
                        <div class="m-b-15 m-t-15 col-md-12">
                            <button type="submit" class="btn btn-primary pull-left">Sign Up</button>
                            <p class="pull-right p-t-10">Already have an account?
                                <a href="{{route('login')}}" class=" careerfy-open-signin-tab ">Sign in</a></p>
                        </div>

                    </form>
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    {{ __('Register') }}
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
