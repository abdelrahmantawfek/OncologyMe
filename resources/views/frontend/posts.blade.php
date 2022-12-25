@extends('layouts.app')


@section('meta')

<title> {{ $data['page']->title }} -  </title>
<meta name="title" content="{{ $data['page']->meta_title ?? '' }}">
<meta name="description" content="{{ $data['page']->meta_desc ?? '' }}">
<meta name="keywords" content="{{ $data['page']->meta_keywords ?? '' }}">

@endsection


@section('content')

@if (Request::is('all-videos') || Request::is('videos'))
<!-- Main Section -->
<div class="careerfy-main-section careerfy-counter-full topics-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="videos-filter categ-title">
                    <h2 class="cntr-title">OncologyMe <span>Newsreels</span></h2>
                    <p class="cntr-p">OncologyMe Newsreels help clinicians stay up to date on news in the world of clinical oncology and hematology. Newsreels feature leading authorities presenting high-impact clinical findings from major oncology meetings
                        and on timely topics.</p>
                    <div class="clearfix"></div>
                    <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                {!! Form::open(['route' => [ 'searchCategory', $data['posts'][0]->post_type ], 'method' => 'GET', 'id' => 'select_category']) !!}
                                <div class="form-group">
                                    {!! Form::select('category', $data['other-categories'], null, ['class' => 'form-control', 'id' => 'category', 'placeholder' => 'Select a category'] ) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <div class="col-md-3"></div>
                            <div class="clearfix"></div>
                    </div>
                </div>

                <div class="clearfix"></div>
                @include('partials._main_banner')


                <hr style="margin-top: 40px;">
                @foreach ($data['categories'] as $category)
                @if (count($category->posts))
                <div class="articles-section">
                    <div class="row">
                        <h2 class="cntr-title">{{$category->title ?? '' }}</h2>
                        <div class="articles-box ">
                            <div class="videos-only">

                                @foreach ($category->posts as $post)
                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    {{-- @if (count($post->postmeta->where('meta_key', '_featured_image')) ) --}}
                                    <div class="article-item">
                                        <div class="article-tags">
                                            <div class="video-thumbnail pos-rltv">
                                                <a href="{{$post->post_type.'/'.$post->slug}}">
                                                    @foreach ($post->postmeta->where('meta_key', '_featured_image') as $key => $value)
                                                    <img src="{{ asset('uploads/'.$value->meta_value )}}" alt="{{$value->meta_value}}">
                                                    @endforeach
                                                 
                                                    <img class="pos-abslt" src="{{ asset('front-assets/img/play.png') }}">
                                                </a>
                                            </div>
                                            @foreach ($post->topics as $topic)
                                            <span><a href="{{ route('showTopic', $topic->slug ?? '') }}">{{$topic->title ?? ''}}</a></span>
                                            @endforeach
        
                                        </div>
                                        <div class="clearfix"></div>
                                        <h2><a href="{{$post->post_type.'/'.$post->slug}}">{{ implode(' ', array_slice(explode(' ', $post->title), 0, 10)) }}@if ( str_word_count($post->title) > 10 )...@endif</a></h2>
                                        <h4>
                                            <span> {{ $post->author ?? ''}} </span>
            
                                            <text>&nbsp;/&nbsp;<span> {{ $post->created_at->format('M d, Y') ?? ''}} </span></text>
            
                                        </h4>
                                    </div>
                                    {{-- @endif --}}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="margin-top: 40px;">  
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>


@else

<!-- Main Section -->
<div class="careerfy-main-section careerfy-counter-full topics-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include('partials._main_banner')

                <div class="m-t-20"></div>
                <div class="careerfy-typo-wrap categ-title pos-rltv">
                    <h3><span>{{ ucfirst($data['posts'][0]->post_type) ?? '' }}</span></h3>
                    @if (count($data['other-categories']))
                        {!! Form::open(['route' => [ 'searchCategory', $data['posts'][0]->post_type ], 'method' => 'GET', 'class' => 'all-category', 'id' => 'select_category']) !!}
                        <div class="form-group">
                            {!! Form::select('category', $data['other-categories'], null, ['class' => 'form-control', 'id' => 'category', 'placeholder' => 'Select a category'] ) !!}
                        </div>
                        {!! Form::close() !!}
                    @endif
                </div>

                <div class=" {{ Request::is('podcasts') ? 'articles-section' : '' }} articles-box">
                    <div class="articles-only">
                    @foreach ($data['posts'] as $post)
                        <div class="article-item">
                            @if (Request::is('podcasts'))
                            <div class="article-img-text combined-txt-img">
                                <img src="{{ asset('front-assets/img/team1.jpg') }}" alt="">
                                <div class="new-post-sec">

                                    <div class="clearfix"></div>
                                    <div class="article-tags">
                                        @foreach ($post->topics as $topic)
                                        <span><a href="{{ route('showTopic', $topic->slug ?? '') }}">{{$topic->title ?? ''}}</a></span>
                                        @endforeach
                                    </div>
                                    <h2><a href="{{'/'.$post->post_type.'/'.$post->slug}}">{{ $post->title ?? ''}}</a></h2>

                                    <p>{{ $post->excerpt ?? ''}}</p>
                                    <div class="podcast-link">
                                            <a href="{{ '/'.$post->post_type.'/'.$post->slug}}">Listen now <i class="fa fa-headphones"></i></a>
                                        </div>
                                    
                                </div>
                            </div>
                            @else
                            <div class="article-tags">
                                @foreach ($post->topics as $topic)
                                <span><a href="{{ route('showTopic', $topic->slug ?? '') }}">{{$topic->title ?? ''}}</a></span>
                                @endforeach
                            </div>
                            <div class="clearfix"></div>
                            <h2><a href="{{'/'.$post->post_type.'/'.$post->slug}}">{{ $post->title ?? ''}}</a></h2>
                            <h4>
                                <span> {{ $post->author ?? ''}} </span>

                                <text>&nbsp;/&nbsp;<span> {{ $post->created_at->format('M d, Y') ?? ''}} </span></text>

                            </h4>
                            <p>{{ $post->excerpt ?? ''}}</p>
                            @endif
                        </div>
                    @endforeach
                </div>
                </div>

            </div>

            <div class="col-md-4 tblt-nn">
                @include('partials._sidebar')
            </div>

        </div>
    </div>
</div>
<!-- Main Section -->



@include('partials._pagination', ['records' => $data['posts']])


@endif


@endsection