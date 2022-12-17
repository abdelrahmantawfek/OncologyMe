@extends('layouts.app')


@section('meta')

<title> {{ $data['topic']->title ?? ''}} -  </title>
<meta name="title" content="{{ $data['topic']->meta_title ?? '' }}">
<meta name="description" content="{{ $data['topic']->meta_desc ?? '' }}">

@endsection


@section('content')

            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-counter-full topics-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-8">
                            <div class="banr-box">
                                <img src="{{ asset('front-assets/img/bnr1.jpg') }}">
                            </div>
                            <div class="m-t-20"></div>

                            <div class="careerfy-typo-wrap categ-title pos-rltv">

                                <h3><span>{{$data['topic']->title}}</span></h3>
                                <form class="all-category">
                                    <div class="form-group">

                                        <select class="form-control" id="category">
                                            <option>Select a category</option>
                                            <option>Select a topic</option>

                                    </select>
                                    </div>
                                </form>
                            </div>
                            <div class="row articles-box">
                                <div class=" @if( !count($data['videos']->where('meta_key', '_featured_image')) )col-md-8 @else col-md-12 @endif col-sm-6">
                                    <div class="articles-only br-nn">
                                        @foreach ($data['news'] as $post)
                                        <div class="article-item">
                                            <div class="article-tags">
                                                @foreach ($post->topics as $topic)
                                                    <span><a href="{{ route('showTopic', $topic->slug ?? '') }}">{{$topic->title ?? ''}}</a></span>
                                                @endforeach
                                            </div>
                                            <div class="clearfix"></div>
                                            <h2><a href="{{'/'.$post->post_type.'/'.$post->slug}}">{{ implode(' ', array_slice(explode(' ', $post->title), 0, 30)) }}@if ( str_word_count($post->title) > 30 )...@endif</a></h2>
                                            <h4>
                                                <span> {{ $post->author ?? ''}} </span>
                
                                                <text>&nbsp;/&nbsp;<span> {{ $post->created_at->format('M d, Y') ?? ''}} </span></text>
                
                                            </h4>
                                            <div class="article-img-text">
                                                @foreach ($post->postmeta->where('meta_key', '_featured_image') as $key => $value)
                                                <img src="{{ asset('uploads/'.$value->meta_value )}}" alt="{{$value->meta_value}}">
                                                @endforeach
                                                <p>{{ implode(' ', array_slice(explode(' ', $post->excerpt), 0, 20)) }}@if ( str_word_count($post->excerpt) > 20 )...@endif</p>
                                            </div>
                                        </div>    
                                        @endforeach
                                    </div>

                                </div>
                                <div class=" @if(!count($data['news'])) col-md-12 @else col-md-4 @endif col-sm-6">

                                    <div class="videos-only brdr-bf br-nn">
                                        @foreach ($data['videos'] as $post)
                                        @if (count($post->postmeta->where('meta_key', '_featured_image')) )
                                        <div class="article-item">
                                            <div class="article-tags">
                                                <div class="video-thumbnail pos-rltv">
                                                    <a href="{{'/'.$post->post_type.'/'.$post->slug}}">
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
                                            <h2><a href="{{'/'.$post->post_type.'/'.$post->slug}}">{{ implode(' ', array_slice(explode(' ', $post->title), 0, 10)) }}@if ( str_word_count($post->title) > 10 )...@endif</a></h2>
                                            <h4>
                                                <span> {{ $post->author ?? ''}} </span>
                
                                                <text>&nbsp;/&nbsp;<span> {{ $post->created_at->format('M d, Y') ?? ''}} </span></text>
                
                                            </h4>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>

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



            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-parallex-full articles-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 careerfy-typo-wrap">

                            <div class="careerfy-pagination-blog">
                                <ul class="page-numbers">
                                    <li><a class="prev page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                    <li><span class="page-numbers current">01</span></li>
                                    <li><a class="page-numbers" href="#">02</a></li>
                                    <li><a class="page-numbers" href="#">03</a></li>
                                    <li><a class="page-numbers" href="#">04</a></li>
                                    <li><a class="next page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                </ul>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Section -->

@endsection