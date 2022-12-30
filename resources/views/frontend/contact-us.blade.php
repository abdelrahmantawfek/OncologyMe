@extends('layouts.app')


@section('meta')

<title> {{ $data['page']->title }} -  </title>
<meta name="title" content="{{ $data['page']->meta_title ?? '' }}">
<meta name="description" content="{{ $data['page']->meta_desc ?? '' }}">
<meta name="keywords" content="{{ $data['page']->meta_keywords ?? '' }}">

@endsection


@section('content')


<!-- Main Section -->
<div class="careerfy-main-section careerfy-about-text-full">
    <div class="container">
        <div class="row">

            @if (count($highlights) || count($latest_news) || count($top_banners) || count($bottom_banners))
            <div class="col-md-8 careerfy-typo-wrap">
            @else
            <div class="col-md-12 careerfy-typo-wrap">
            @endif
                <div class="careerfy-about-text">
                    <div class="careerfy-contact-info-sec">
                        <h2>Contact Information</h2>
                        <p>“Oncology Medical Education” is an oncology-specific healthcare education platform that creates a wide spectrum of virtual scientific activities through a user-friendly approach that is culturally adapted to the Middle-East
                            Arab practice.</p>
                        <p>For healthcare professionals only.</p>
                        <ul class="careerfy-contact-info-list">
                            <li><i class="careerfy-icon careerfy-placeholder"></i> <a href="https://maps.app.goo.gl/xSs4KQ9drppdsJgs7" target="_blank"> 37, Omarat Madinat Al Fath, Al Hadiqah Ad Dawleyah, Embassies District, Nasr City, Cairo Governorate, Egypt <span style="font-size: 12px; text-decoration: underline; float: none;"> Veiw on map </span></a>                                            </li>
                            <li><i class="careerfy-icon careerfy-mail"></i> <a href="#">Email: Info@oncologyme.com</a></li>
                            <li><i class="careerfy-icon careerfy-technology"></i> Call: +2 0155 945 6778</li>
                        </ul>
                        <div class="careerfy-contact-media">
                            <a href="https://facebook.com/oncologyme" class="careerfy-icon careerfy-facebook-logo" target="_blank"></a>
                            <a href="https://www.youtube.com/channel/UC7cUtEq-hpsbmer5nRUOw5A" class="careerfy-bgcolorhover cs-yout" target="_blank"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://www.linkedin.com/company/oncologyme/" class="careerfy-icon careerfy-linkedin-button" target="_blank"></a>
                        </div>
                    </div>
                    <div class="careerfy-contact-form">
                        <h2>We want to hear from you!</h2>
                        {!! Form::open(['route' => ['contact.data'], 'method' => 'post']) !!}
                            <ul>
                                <li>
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Your Name', 'required' => 'required']) !!}
                                    <i class="careerfy-icon careerfy-user"></i>
                                    @error('name')
                                    <span class="invalid-feedback cs-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </li>
                                <li>
                                    {!! Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'Subject', 'required' => 'required']) !!}
                                    <i class="careerfy-icon careerfy-user"></i>
                                    @error('subject')
                                    <span class="invalid-feedback cs-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </li>
                                <li>
                                    {!! Form::text('email', null, ['class' => 'form-control' , 'placeholder' => 'Enter Your Email Address', 'required' => 'required']) !!}
                                    <i class="careerfy-icon careerfy-mail"></i>
                                    @error('email')
                                    <span class="invalid-feedback cs-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </li>
                                <li>
                                    {!! Form::text('phone', null, ['class' => 'form-control' , 'placeholder' => 'Enter Your Phone Number', 'required' => 'required']) !!}
                                    <i class="careerfy-icon careerfy-technology"></i>
                                    @error('phone')
                                    <span class="invalid-feedback cs-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </li>
                                <li class="careerfy-contact-form-full">
                                    {!! Form::textarea('message', null, [
                                        'class'      => 'form-control',
                                        'rows'       => 3, 
                                        'name'       => 'message',
                                        'id'         => 'message',
                                        'onkeypress' => "return nameFunction(event);",
                                        'placeholder'=> "Write your message ...",
                                        'required' => 'required'
                                    ]) !!}
                                     @error('message')
                                     <span class="invalid-feedback cs-danger" role="alert">
                                         {{ $message }}
                                     </span>
                                     @enderror
                                </li>
                                <li>  {!! Form::submit('submit', ['class' => 'btn']) !!}</li>
                            </ul>
                            <div class="clearfix"></div>
                        {!! Form::close() !!}
                        @include('flash::message')
                    </div>
                </div>
            </div>
            <!-- sidebar -->
            @include('partials._sidebar')


        </div>
    </div>
</div>
<!-- Main Section -->

@endsection