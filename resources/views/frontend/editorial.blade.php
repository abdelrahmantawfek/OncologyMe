@extends('layouts.app')


@section('meta')

<title> {{ $data['page']->page_title }} - {{$general_info[0]->tagline}}  </title>
<meta name="title" content="{{ $data['page']->meta_title ?? '' }}">
<meta name="description" content="{{ $data['page']->meta_desc ?? '' }}">
<meta name="keywords" content="{{ $data['page']->meta_keywords ?? '' }}">

@endsection


@section('content')

<!-- Main Section -->
@foreach($data['page']->sections as $section)

<div class="careerfy-main-section careerfy-about-text-full">
    <div class="container">
        <div class="row">

            @if ($section->layout == 1)
            <div class="col-md-6 careerfy-typo-wrap">
                <div class="careerfy-about-thumb"><img src="{{ asset('uploads/'.$section->img?? '') }}" alt="oncologyme"></div>
            </div>
            @endif

            <div class="col-md-6 careerfy-typo-wrap">
                <div class="careerfy-about-text">
                    <h2>{{$section->title ?? ''}}</h2>
                    <span class="careerfy-about-sub">{{$section->subtitle?? ''}}</span>
                    <p>{!!$section->content?? ''!!}</p>
            </div>
            </div>
            @if ($section->layout == 0)
            <div class="col-md-6 careerfy-typo-wrap">
                <div class="careerfy-about-thumb"><img src="{{ asset('uploads/'.$section->img?? '') }}" alt="oncologyme"></div>
            </div>
            @endif


        </div>
    </div>
</div>

<!-- Main Section -->
@endforeach


@endsection