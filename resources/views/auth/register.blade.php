@extends('layouts.app')

@section('meta')

   <title> Sign Up  </title>

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

                    <form method="POST" action="{{ route('postSignup') }}" class="row">
                        @csrf
                        <div class="form-group col-md-6">
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('name') }}" required autocomplete="first_name" placeholder="First Name">
                            <i class="careerfy-icon careerfy-user"></i>
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Last Name">
                            <i class="careerfy-icon careerfy-user"></i>
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email"> 
                            <i class="careerfy-icon careerfy-mail"></i>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="last_name" placeholder="Phone">
                            <i class="careerfy-icon careerfy-technology"></i>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                            <i class="fa fa-lock"></i>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            <i class="fa fa-lock"></i>
                        </div>

                        <div class="form-group col-md-6">
                            <select class="form-control" id="country" name="country">
                              <option value="Afghanistan">Country</option>
                              <option value="Egypt">Egypt</option>
                                 <option value="Afghanistan">Afghanistan</option>
                                 <option value="Albania">Albania</option>
                                 <option value="Algeria">Algeria</option>
                                 <option value="Andorra">Andorra</option>
                                 <option value="Angola">Angola</option>
                                 <option value="Antigua &amp; Deps">Antigua &amp; Deps</option>
                                 <option value="Argentina">Argentina</option>
                                 <option value="Armenia">Armenia</option>
                                 <option value="Australia">Australia</option>
                                 <option value="Austria">Austria</option>
                                 <option value="Azerbaijan">Azerbaijan</option>
                                 <option value="Bahamas">Bahamas</option>
                                 <option value="Bahrain">Bahrain</option>
  
                                </select>

                        </div>

                        <div class="form-group col-md-6 cs-gov">
                            <select class="form-control" name="governorate">
                              <option value="Afghanistan">Governorate</option>
                                 <option value="Afghanistan">Afghanistan</option>
                                 <option value="Albania">Albania</option>
                                 <option value="Algeria">Algeria</option>
                                 <option value="Andorra">Andorra</option>
                                 <option value="Angola">Angola</option>
                                 <option value="Antigua &amp; Deps">Antigua &amp; Deps</option>
                                 <option value="Argentina">Argentina</option>
                                 <option value="Armenia">Armenia</option>
                                 <option value="Australia">Australia</option>
                                 <option value="Austria">Austria</option>
                                 <option value="Azerbaijan">Azerbaijan</option>
                                 <option value="Bahamas">Bahamas</option>
                                 <option value="Bahrain">Bahrain</option>
                                </select>
                        </div>

                        <div class="form-group col-md-6 other-gov" style="display: none;">
                            <input class="form-control" type="text" placeholder="Governorate">
                            <i class="careerfy-icon careerfy-edit"></i>
                        </div>

                        <div class="form-group col-md-6">
                            <select class="form-control selectpicker" id="affiliation" name="affiliation">
                                <option value="Affiliation">Affiliation/ Workplace</option>
                                <option data-tokens="Afghanistan" value="Afghanistan">Afghanistan</option>
                                <option data-tokens="Albania" value="Albania">Albania</option>
                                <option data-tokens="Algeria" value="Algeria">Algeria</option>
                                <option data-tokens="Andorra" value="Andorra">Andorra</option>
                                <option data-tokens="Angola" value="Angola">Angola</option>
                                <option data-tokens="Antigua" value="Antigua &amp; Deps">Antigua &amp; Deps</option>
                                <option value="other">Other</option>
                            </select>

                        </div>

                        <div class="form-group col-md-6 other-affiliation" style="display: none;">
                            <input class="form-control" type="text" name="other-affiliation" placeholder="Affiliation">
                            <i class="careerfy-icon careerfy-edit"></i>
                        </div>

                         <div class="form-group col-md-6">
                            <select class="form-control" id="specialty" name="specialty">
                                <option value="Afghanistan">Specialty</option>
                                <option value="Clinical Oncologists">Clinical Oncologists</option>
                                <option value="Radiation Oncologists">Radiation Oncologists</option>
                                <option value="Medical Oncologists">Medical Oncologists</option>
                                <option value="Pharmacist">Pharmacist</option>
                                <option value="Surgeon">Surgeon</option>
                                <option value="Nurse">Nurse </option>
                                <option value="other">Other </option>

                            </select>

                        </div>

                        <div class="form-group col-md-6 other-specialty" style="display: none;">
                            <input class="form-control" type="text" name="other-specialty" placeholder="Specialty">
                            <i class="careerfy-icon careerfy-edit"></i>
                        </div>

                        {{-- <div class="form-group col-md-6">
                            <div class="combo-select-dropdown">
                                <ul class="select-list-group" id="ComboSelect3">
                                    <li class="select-lg-dropdown">
                                        <input type="text" class="select-list-group-search" placeholder="Affiliation " />
                                        <ul class="select-list-group-list" data-toggle="false">
                                            <li class="select-list-group-list-item" data-display="true" data-highlight="false">Affiliation 1</li>
                                            <li class="select-list-group-list-item" data-display="true" data-highlight="false">Affiliation 2
                                                <li class="select-list-group-list-item" data-display="true" data-highlight="false">Affiliation 3</li>
                                                <li class="select-list-group-list-item" data-display="true" data-highlight="false">Affiliation 4</li>
                                                <li class="select-list-group-list-item" data-display="true" data-highlight="false">Affiliation 5</li>
                                                <li class="select-list-group-list-item" data-display="true" data-highlight="false">Affiliation 6</li>
                                        </ul>
                                        </li>
                                </ul>
                            </div>
                        </div> --}}

                        <!-- <div class="form-group col-md-6">
                            <div class="combo-select-dropdown">
                                <ul class="select-list-group" id="ComboSelect2">
                                <li class="select-lg-dropdown">
                                    <input type="text" class="select-list-group-search" placeholder="Affiliation/ Workplace " />
                                    <i class="careerfy-icon careerfy-edit"></i>
                                    <ul class="select-list-group-list" data-toggle="false">
                                    <li class="select-list-group-list-item" data-display="true" data-highlight="false">Audi</li>
                                    <li class="select-list-group-list-item" data-display="true" data-highlight="false">BMW
                                    <li class="select-list-group-list-item" data-display="true" data-highlight="false">Ferrari</li>
                                    <li class="select-list-group-list-item" data-display="true" data-highlight="false">Honda</li>
                                    <li class="select-list-group-list-item" data-display="true" data-highlight="false">Hyundai</li>
                                    <li class="select-list-group-list-item" data-display="true" data-highlight="false">Imperial</li>
                                    <li class="select-list-group-list-item" data-display="true" data-highlight="false">Jeep</li>
                                    <li class="select-list-group-list-item" data-display="true" data-highlight="false">KIA</li>
                                    <li class="select-list-group-list-item" data-display="true" data-highlight="false">Lancia</li>
                                    </ul>
                                </li>
                                </ul>
                            </div>
                        </div> -->


                        {{-- <div class="form-group col-md-6">
                            <div class="combo-select-dropdown">
                                <ul class="select-list-group" id="ComboSelect">
                                    <li class="select-lg-dropdown">
                                        <input type="text" class="select-list-group-search" placeholder="Specialty" />
                                        <ul class="select-list-group-list" data-toggle="false">
                                            <li class="select-list-group-list-item" data-display="true" data-highlight="false">Clinical Oncologists</li>
                                            <li class="select-list-group-list-item" data-display="true" data-highlight="false">Radiation Oncologists</li>
                                            <li class="select-list-group-list-item" data-display="true" data-highlight="false">Medical Oncologists</li>
                                            <li class="select-list-group-list-item" data-display="true" data-highlight="false">Pharmacist</li>
                                            <li class="select-list-group-list-item" data-display="true" data-highlight="false">Surgeon</li>
                                            <li class="select-list-group-list-item" data-display="true" data-highlight="false">Nurse</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}


                        <!--  <div class="form-group col-md-6">
                            <select class="multipleSelect" multiple name="categories" placeholder="Affiliation/ Workplace">
                     <option value="Afghanistan">Afghanistan</option>
                     <option value="Albania">Albania</option>
                     <option value="Algeria">Algeria</option>
                     <option value="Andorra">Andorra</option>
                     <option value="Angola">Angola</option>
                     <option value="Antigua &amp; Deps">Antigua &amp; Deps</option>
                     <option value="Argentina">Argentina</option>
                     <option value="Armenia">Armenia</option>
                     <option value="Australia">Australia</option>
                     <option value="Austria">Austria</option>
                     <option value="Azerbaijan">Azerbaijan</option>
                     <option value="Bahamas">Bahamas</option>
                     <option value="Bahrain">Bahrain</option>
 
                       </select>
                            <i class="careerfy-icon careerfy-network"></i>
                        </div>

                        <div class="form-group col-md-6">
                            <select class="multipleSelect" multiple name="categories" placeholder="Specialty">
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Antigua &amp; Deps">Antigua &amp; Deps</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>

                    </select>
                            <i class="careerfy-icon careerfy-network"></i>
                        </div>
-->

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
