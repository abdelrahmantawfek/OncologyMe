@extends('layouts.app')


@section('meta')

   {{-- <title>{{ @optional($general_setting)->title??'' }} - {{ @optional($general_setting)->tagline??'' }}</title> --}}
   <title> {{ $data['page']->page_title  }} - {{$general_info[0]->tagline}}  </title>
   <meta name="title" content="{{ $data['page']->meta_title ?? '' }}">
   {{-- <meta name="description" content="{{ $data['page']->meta_desc ?? '' }}">
   <meta name="keywords" content="{{ $data['page']->meta_keywords ?? '' }}"> --}}

@endsection

@section('content')

<!-- Main Section -->
<div class="careerfy-main-section careerfy-counter-full topics-section scrolly-box">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-sm-8 ">
                @include('partials._main_banner')

                <div class="m-t-20"></div>
                <div class="row articles-box">
                    @if (count($data['news']))
                     
                    @if (count($data['videos']))
                    <div class="col-md-8 col-sm-6">
                    @else    
                    <div class="col-md-12 col-sm-6">
                    @endif 
                        <div class="careerfy-typo-wrap categ-title">
                            <h3><span>Latest News</span></h3>
                        </div>
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
    
                                    <text>@if($post->author) &nbsp;/&nbsp; @endif<span> {{ $post->created_at->format('M d, Y') ?? ''}} </span></text>
    
                                </h4>
                                <div class="article-img-text">
                                    @foreach ($post->postmeta->where('meta_key', '_featured_image') as $key => $value)
                                    <img src="{{ asset('uploads/'.$value->meta_value )}}" alt="{{$value->meta_value}}">
                                    @endforeach
                                    @if (!count($post->postmeta->where('meta_key', '_featured_image')) )
                                    <img src="{{ asset('uploads/d-post.jpeg')}}" alt="oncologyme">
                                    @endif
                                    <p class="wth-img">{{ implode(' ', array_slice(explode(' ', $post->excerpt), 0, 20)) }}@if ( str_word_count($post->excerpt) > 20 )...@endif</p>
                                </div>
                            </div>    
                            @endforeach

                            
                        </div>
                    </div>
                    @endif
                    @if (count($data['videos']))
                    @if (count($data['news']))
                    <div class="col-md-4 col-sm-6">
                    @else  
                    <div class="col-md-12 col-sm-6">
                    @endif 
                        <div class="careerfy-typo-wrap categ-title">
                            <h3 class="text-right"><span>Latest Videos</span></h3>
                        </div>
                        <div class="videos-only brdr-bf br-nn">
                            @foreach ($data['videos'] as $post)
                            {{-- @if (count($post->postmeta->where('meta_key', '_featured_image')) ) --}}
                            <div class="article-item">
                                <div class="article-tags">
                                    <div class="video-thumbnail pos-rltv home-vid">
                                        <a href="{{$post->post_type.'/'.$post->slug}}">
                                            @foreach ($post->postmeta->where('meta_key', '_featured_image') as $key => $value)
                                            <img src="{{ asset('uploads/'.$value->meta_value )}}" alt="{{$value->meta_value}}">
                                            @endforeach
                                            @if (!count($post->postmeta->where('meta_key', '_featured_image')) )
                                            <img src="{{ asset('uploads/d-post.jpeg')}}" alt="oncologyme">
                                            @endif
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
    
                                    <text>@if($post->author) &nbsp;/&nbsp; @endif<span> {{ $post->created_at->format('M d, Y') ?? ''}} </span></text>
    
                                </h4>
                            </div>
                            {{-- @endif --}}
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @include('partials._sidebar')
        </div>
    </div>
</div>
<!-- Main Section -->

@if (count( $data['main_study_articles'] ) )
<!-- Main Section -->
<div class="careerfy-main-section careerfy-parallex-full articles-section cs-h-study">
    <div class="container">
        <div class="row">
            <div class="col-md-12 careerfy-typo-wrap">
                <h3><span>Latest Studying slides</span></h3>
            </div>
            <div class="articles-box ">
                <div class="articles-only">
                    <div class="col-md-4 col-sm-4 col-xs-12 articles-only">
                        <div class="article-item-main">
                            @foreach ($data['main_study_articles'][0]->postmeta->where('meta_key', '_featured_image') as $key => $value)
                            <a href="{{ $data['main_study_articles'][0]->post_type.'/'.$data['main_study_articles'][0]->slug}}"><img src="{{ asset('uploads/'.$value->meta_value )}}" alt="{{$value->meta_value}}"></a>
                            @endforeach
                            @if (!count($data['main_study_articles'][0]->postmeta->where('meta_key', '_featured_image')) )
                            <a href="{{$data['main_study_articles'][0]->post_type.'/'.$data['main_study_articles'][0]->slug}}"><img src="{{ asset('uploads/d-post.jpeg')}}" alt="oncologyme"></a>
                            @endif
                            <div class="article-tags">
                                @foreach ($data['main_study_articles'][0]->topics as $topic)
                                <span><a href="{{ route('showTopic', $topic->slug ?? '') }}">{{$topic->title ?? ''}}</a></span>
                                @endforeach
                            </div>
                            <div class="clearfix"></div>
                            <h2><a href="{{$data['main_study_articles'][0]->post_type.'/'.$data['main_study_articles'][0]->slug}}">{{ implode(' ', array_slice(explode(' ', $data['main_study_articles'][0]->title ?? ''), 0, 10)) }}@if ( str_word_count($data['main_podcast'][0]->title ?? '') > 10 )...@endif</a></h2>
                            <div class="article-img-text">
                                <p>{{ substr($data['main_study_articles'][0]->excerpt ?? '', 0, 170); }}@if ( strlen($data['main_study_articles'][0]->excerpt ?? '') > 170 )...@endif</p>

                            </div>
                            {{-- @endif --}}
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-12 articles-only">
                        @foreach ($data['study_articles'] as $post)
                        <div class="article-item col-md-6 col-sm-6 col-xs-12 ">
                            <h2><a href="{{$post->post_type.'/'.$post->slug ?? '' }}">{{ implode(' ', array_slice(explode(' ', $post->title ?? ''), 0, 10)) }}@if ( str_word_count($post->title ?? '') > 10 )...@endif</a></h2>
                            <div class="article-tags">
                                @foreach ($post->topics as $topic)
                                <span><a href="{{ route('showTopic', $topic->slug ?? '') }}">{{$topic->title ?? ''}}</a></span>
                                @endforeach
                            </div>
                            <div class="clearfix"></div>

                            <div class="article-img-text">
                                @foreach ($post->postmeta->where('meta_key', '_featured_image') as $key => $value)
                                <a href="{{ route('showTopic', $topic->slug ?? '') }}"><img src="{{ asset('uploads/'.$value->meta_value )}}" alt="{{$value->meta_value}}"></a>
                                @endforeach
                                @if (!count($post->postmeta->where('meta_key', '_featured_image')) )
                                    <a href="{{$post->post_type.'/'.$data['main_study_articles'][0]->slug}}"><img src="{{ asset('uploads/d-post.jpeg')}}" alt="oncologyme"></a>
                                @endif
                                <p class="wth-img">{{ substr($post->excerpt, 0, 64); }}@if ( strlen($post->excerpt ?? '') > 64 )...@endif</p>
                                
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Section -->
@endif

@if (count( $data['main_podcast'] ) )
<!-- Main Section -->
<div class="careerfy-main-section careerfy-parallex-full articles-section cs-h-pods">
    <div class="container">
        <div class="row">
            <div class="col-md-12 careerfy-typo-wrap">
                <h3><span>Latest Podcasts</span></h3>
            </div>
            <div class="articles-box ">
                <div class="articles-only">
                    <div class="col-md-4 col-sm-4 col-xs-12 articles-only">
                        <div class="article-item-main">
                            @foreach ($data['main_podcast'][0]->postmeta->where('meta_key', '_featured_image') as $key => $value)
                            <a href="{{ $data['main_podcast'][0]->post_type.'/'.$data['main_podcast'][0]->slug }}"><img src="{{ asset('uploads/'.$value->meta_value )}}" alt="{{$value->meta_value}}"></a>
                            @endforeach
                            @if (!count($data['main_podcast'][0]->postmeta->where('meta_key', '_featured_image')) )
                            <a href="{{$data['main_podcast'][0]->post_type.'/'.$data['main_podcast'][0]->slug}}"><img src="{{ asset('uploads/d-post.jpeg')}}" alt="oncologyme"></a>
                            @endif
                            <div class="article-tags">
                                @foreach ($data['main_podcast'][0]->topics as $topic)
                                <span><a href="{{ route('showTopic', $topic->slug ?? '') }}">{{$topic->title ?? ''}}</a></span>
                                @endforeach
                            </div>
                            <div class="clearfix"></div>
                            <h2><a href="{{$data['main_podcast'][0]->post_type.'/'.$data['main_podcast'][0]->slug}}">{{ implode(' ', array_slice(explode(' ', $data['main_podcast'][0]->title ?? ''), 0, 10)) }}@if ( str_word_count($data['main_podcast'][0]->title ?? '') > 10 )...@endif</a></h2>
                            <div class="article-img-text">
                                <p>{{ substr($data['main_podcast'][0]->excerpt ?? '', 0, 170); }}@if ( strlen($data['main_podcast'][0]->excerpt ?? '') > 170 )...@endif</p>

                                <div class="podcast-link">
                                    <a href="{{$data['main_podcast'][0]->post_type.'/'.$data['main_podcast'][0]->slug}}">Listen now <i class="fa fa-headphones"></i></a>
                                </div>
                            </div>
                            {{-- @endif --}}
                        </div>

                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-12 articles-only">
                        @foreach ($data['podcasts'] as $post)
                        
                        <div class="article-item col-md-6 col-sm-6 col-xs-12 ">
                            <h2><a href="{{$post->post_type.'/'.$post->slug ?? '' }}">{{ implode(' ', array_slice(explode(' ', $post->title ?? ''), 0, 5)) }}@if ( str_word_count($post->title ?? '') > 10 )...@endif</a></h2>
                            <div class="article-tags">
                                @foreach ($post->topics as $topic)
                                <span><a href="{{ route('showTopic', $topic->slug ?? '') }}">{{$topic->title ?? ''}}</a></span>
                                @endforeach
                            </div>
                            <div class="clearfix"></div>

                            <div class="article-img-text">
                                @foreach ($post->postmeta->where('meta_key', '_featured_image') as $key => $value)
                                <a href="{{$post->post_type.'/'.$post->slug}}"><img src="{{ asset('uploads/'.$value->meta_value )}}" alt="{{$value->meta_value}}"></a>
                                @endforeach
                                @if (!count($post->postmeta->where('meta_key', '_featured_image')) )
                                    <a href="{{$post->post_type.'/'.$post->slug}}"><img src="{{ asset('uploads/d-post.jpeg')}}" alt="oncologyme"></a>
                                @endif

                                <p class="wth-img">{{ substr($post->excerpt, 0, 64); }}@if ( strlen($post->excerpt ?? '') > 64 )...@endif</p>
                                <div class="podcast-link">
                                    <a href="{{$data['main_podcast'][0]->post_type.'/'.$data['main_podcast'][0]->slug}}">Listen now <i class="fa fa-headphones"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Main Section -->
@endif

@endsection