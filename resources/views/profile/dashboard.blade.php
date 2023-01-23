@extends('layouts.app')

@section('meta')

   <title> Profile </title>

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
                        <h3>Update My Account</h3>

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
                

                    {!! Form::model($user, ['route' => ['user.update'], 'method' => 'POST', 'id' => 'update_profile']) !!}
                        <div class="form-group col-md-6">
                            {!! Form::text('first_name', null, ['class' => 'form-control', 'id' => 'first_name', 'placholder' => 'First Name']) !!}
                            <i class="careerfy-icon careerfy-user"></i>
                        </div>
                        

                        <div class="form-group col-md-6">
                            {!! Form::text('last_name', null, ['class' => 'form-control', 'id' => 'last_name', 'placholder' => 'Last Name']) !!}
                            <i class="careerfy-icon careerfy-user"></i>
                        </div>

                        <div class="form-group col-md-6">
                            {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'placholder' => 'Email']) !!}
                            <i class="careerfy-icon careerfy-mail"></i>
                        </div>

                        <div class="form-group col-md-6">
                            {!! Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone', 'placholder' => 'Phone']) !!}
                            <i class="careerfy-icon careerfy-technology"></i>
                        </div>

                        <div class="form-group col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="password" placeholder="Password">
                            <i class="careerfy-icon careerfy-multimedia"></i>
                        </div>

                        <div class="form-group col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
                            <i class="careerfy-icon careerfy-multimedia"></i>
                        </div>

                        <div class="form-group col-md-6">
                            {!! Form::select('country', $countries, $user->country, ['class' => 'form-control', 'placeholder' => 'Country', 'id' => 'country' ]) !!}
                        </div>

                        <div class="form-group col-md-6 cs-gov">
                            {!! Form::select('governorate', $governorates, $user->governorate, ['class' => 'form-control', 'placeholder' => 'Governorate']) !!}
                        </div>

                        <div class="form-group col-md-6 other-gov">
                            {!! Form::text('other_governorate', null, ['class' => 'form-control', 'placeholder' => 'Governorate']) !!}
                            <i class="careerfy-icon careerfy-edit"></i>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="combo-select-dropdown">
                                <ul class="select-list-group" id="ComboSelect3">
                                    <li class="select-lg-dropdown">
                                        <input type="text" class="select-list-group-search" name="affiliation" placeholder="Affiliation " value="{{ $user->affiliation}}" />
                                        <ul class="select-list-group-list" data-toggle="false">
                                            @foreach ($affiliations as $item)
                                                <li class="select-list-group-list-item" data-display="true" data-highlight="false">{{$item}}</li> 
                                            @endforeach
                                        </ul>
                                        </li>
                                </ul>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="combo-select-dropdown">
                                <ul class="select-list-group" id="ComboSelect">
                                    <li class="select-lg-dropdown">
                                        <input type="text" name="speciality" class="select-list-group-search" placeholder="Speciality" value="{{ $user->speciality}}"/>
                                        <ul class="select-list-group-list" data-toggle="false">
                                            @foreach ($specialites as $item)
                                                <li class="select-list-group-list-item" data-display="true" data-highlight="false">{{$item}}</li> 
                                            @endforeach
                                        </ul>
                                        </li>
                                </ul>
                            </div>
                        </div>
              

                        <div class="m-b-15 m-t-15 col-md-12">
                            <div class="terms-priv-chek-con">
                                <p>
                                    {!! Form::checkbox('accept_newsletter_emails', true, null, ['id' => 'accept_newsletter_emails']) !!} <label for="accept_newsletter_emails"> I consent to receiving Newsletters emails</label>
                                </p>
                            </div>
                        </div>
                        <div class="m-b-15 m-t-15 col-md-12">
                            {!! Form::submit('Update profile', ['class' => 'btn btn-primary pull-left']) !!}
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Section -->

@endsection
