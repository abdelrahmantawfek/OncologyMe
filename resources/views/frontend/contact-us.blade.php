@extends('layouts.app')


@section('meta')

<title> {{ $data['page']->page_title  }} - {{$general_info[0]->tagline}}  </title>
<meta name="title" content="{{ $data['page']->meta_title ?? '' }}">
<meta name="description" content="{{ $data['page']->meta_desc ?? '' }}">

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
                        <p>{{$general_info[0]->about}}</p>
                        <p>{{$general_info[0]->short_description}}.</p>
                        <ul class="careerfy-contact-info-list">
                            <li><i class="careerfy-icon careerfy-placeholder"></i> <a href="https://maps.app.goo.gl/xSs4KQ9drppdsJgs7" target="_blank"> 37, Omarat Madinat Al Fath, Al Hadiqah Ad Dawleyah, Embassies District, Nasr City, Cairo Governorate, Egypt <span style="font-size: 12px; text-decoration: underline; float: none;"> Veiw on map </span></a>                                            </li>
                            <li><i class="careerfy-icon careerfy-mail"></i> <a href="mailto:{{$general_info[0]->email}}">Email: {{$general_info[0]->email}}</a></li>
                            <li><i class="careerfy-icon careerfy-technology"></i>  <a href="tel:{{$general_info[0]->phone}}"> Call: {{$general_info[0]->phone}}</a></li>
                        </ul>
                        <div class="careerfy-contact-media">
                            <a href="{{$general_info[0]->fb}}" class="careerfy-icon careerfy-facebook-logo" target="_blank"></a>
                            <a href="{{$general_info[0]->youtube}}" class="careerfy-bgcolorhover cs-yout" target="_blank"><i class="fa fa-youtube-play"></i></a>
                            <a href="{{$general_info[0]->linkedin}}" class="careerfy-icon careerfy-linkedin-button" target="_blank"></a>
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
                        <div class="cs-msgs">
                        @include('flash::message')
                        </div>
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