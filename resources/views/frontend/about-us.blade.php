@extends('layouts.app')


@section('meta')

<title> {{ $data['page']->page_title }} - {{$general_info[0]->tagline}}  </title>
    <meta name="title" content="{{ $data['page']->meta_title ?? '' }}">
    <meta name="description" content="{{ $data['page']->meta_desc ?? '' }}">
    <meta name="keywords" content="{{ $data['page']->meta_keywords ?? '' }}">

@endsection


@section('content')


<div class="careerfy-main-section careerfy-about-text-full orange-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h2>{{$data['page']->sections[0]->title?? ''}}</h2>
                <p>{!!$data['page']->sections[0]->content?? ''!!}</p>
            </div>
        </div>
    </div>
</div>
<!-- Main Section -->
<div class="careerfy-main-section careerfy-about-text-full about-main-section">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-xs-12 careerfy-typo-wrap">
                <div class="careerfy-about-text">
                    <h3>{{$data['page']->sections[1]->title?? ''}}</h3>
                    <span class="careerfy-about-sub">{{$data['page']->sections[1]->subtitle?? ''}}</span>
                    <p>{!!$data['page']->sections[1]->content?? ''!!}</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 careerfy-typo-wrap gray-bg">
                <div class="careerfy-about-thumb">
                    <img src="{{ asset('uploads/'.$data['page']->sections[2]->img?? '') }}" alt="oncologyme">
                    <h3>{{$data['page']->sections[2]->title?? ''}}</h3>
                    <span class="careerfy-about-sub">{{$data['page']->sections[2]->subtitle?? ''}}</span>
                    <p>{!! $data['page']->sections[2]->content?? ''!!}  </p>


                </div>
            </div>
            <div class="col-md-3 col-xs-12 careerfy-typo-wrap navy-bg">
                <div class="careerfy-about-thumb">
                    <img src="{{ asset('uploads/'.$data['page']->sections[3]->img?? '') }}" alt="oncologyme">
                    <h3 style="color: #fff;">{{$data['page']->sections[3]->title?? ''}}</h3>
                    <p style="color: #fff;">{!!$data['page']->sections[3]->content?? ''!!}</p>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Main Section -->


<!-- Main Section -->
<div class="careerfy-main-section m-t-50 p-t-30">
    <div class="container">
        <div class="row">

            <div class="careerfy-typo-wrap col-md-6">
                <section class="careerfy-about-text">
                    <h3 class="m-b-10">{{$data['page']->sections[4]->title?? ''}}</h3>
                    <span class="careerfy-about-sub">{{$data['page']->sections[4]->subtitle?? ''}}</span>
                    <p>{!!$data['page']->sections[4]->content?? ''!!}</p>
                </section>

            </div>

            <div class="careerfy-typo-wrap col-md-6">
                <div class="careerfy-about-thumb"><img src="{{ asset('uploads/'.$data['page']->sections[4]->img?? '') }}" alt="oncologyme"></div>
            </div>

        </div>
    </div>
</div>
<!-- Main Section -->



<!-- Main Section -->
<div class="careerfy-main-section  p-t-20">
    <div class="container">
        <div class="row flex-order">
            <div class="careerfy-typo-wrap col-md-6 order-2">
                <div class="careerfy-about-thumb"><img src="{{ asset('uploads/'.$data['page']->sections[5]->img?? '') }}" alt="oncologyme"></div>
            </div>

            <div class="careerfy-typo-wrap col-md-6 order-1">
                <section class="careerfy-about-text">
                    <h3 class="m-b-10">{{$data['page']->sections[5]->title?? ''}}</h3>
                    <span class="careerfy-about-sub">{{$data['page']->sections[5]->subtitle?? ''}}</span>
                    <p>{!!$data['page']->sections[5]->content?? ''!!}</p>
                </section>

            </div>



        </div>
    </div>
</div>
<!-- Main Section -->

@endsection