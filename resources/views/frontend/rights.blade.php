@extends('layouts.app')


@section('meta')

<title> {{ $data['page']->page_title  }} - {{$general_info[0]->tagline}}  </title>
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
                    <h2>{{$data['page']->sections->first()->title ?? ''}}</h2>
                    <span class="careerfy-about-sub">{{$data['page']->sections->first()->subtitle?? ''}}</span>
                    <p>{!!$data['page']->sections->first()->content?? ''!!}</p>
                </div>
            </div>
            <!-- sidebar -->
            @include('partials._sidebar')

        </div>
    </div>
</div>
<!-- Main Section -->

@endsection