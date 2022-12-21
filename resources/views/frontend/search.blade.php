@extends('layouts.app')


@section('meta')

{{-- <title> {{ $data['page']->title }} -  </title>
<meta name="title" content="{{ $data['page']->meta_title ?? '' }}">
<meta name="description" content="{{ $data['page']->meta_desc ?? '' }}">
<meta name="keywords" content="{{ $data['page']->meta_keywords ?? '' }}"> --}}

@endsection


@section('content')

<!-- Main Section -->
<div class="careerfy-main-section careerfy-counter-full topics-section">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="careerfy-typo-wrap categ-title">

                    <h3><span>Search Results</span></h3>
                    <h5>Your search for <strong>{{$data['result']}}</strong></h5>

                </div>

                <div class=" articles-box">

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

@endsection