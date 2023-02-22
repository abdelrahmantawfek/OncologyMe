@extends('layouts.app')


@section('meta')

<title> {{ $data['category']->title }} -  {{$general_info[0]->tagline}} </title>
<meta name="title" content="{{ $data['category']->meta_title ?? '' }}">
<meta name="description" content="{{ $data['category']->meta_desc ?? '' }}">

@endsection


@section('content')

@if (Request::is('all-videos/*') || Request::is('videos') || Request::is('videos*') || Request::is('search-videos*'))
<!-- Main Section -->
<div class="careerfy-main-section careerfy-counter-full topics-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="videos-filter categ-title">

                    <h2 class="cntr-title">{{$data['page']->sections[0]->title ?? ''}} <span>{{$data['page']->sections[0]->subtitle ?? ''}}</span></h2>
                    <p class="cntr-p">{!! $data['page']->sections[0]->content ??'' !!}</p>
                    @include('partials._posts_banner')
                    <div class="m-t-40"></div>
                    <div class="clearfix"></div>
                     <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                @if (count($data['other-categories']))
                                {!! Form::open(['route' => [ 'searchCategory', $data['category']->post_type], 'method' => 'GET', 'id' => 'select_category']) !!}
                                <div class="form-group">
                                    {!! Form::select('category', $data['other-categories'], null, ['class' => 'form-control', 'id' => 'category', 'placeholder' => 'Select a category'] ) !!}
                                </div>
                                {!! Form::close() !!}
                                @endif
                            </div>
                            <div class="col-md-3"></div>
                            <div class="clearfix"></div>
                    </div>
                    <hr style="margin-top: 10px;">
                </div>
                <div class="clearfix"></div>



                <div class="articles-section">
                    <div class="row">
                        <div class="articles-box ">
                            <div class="videos-only">
                                @foreach ($data['category']->posts as $post)
                                <div class="col-md-4 col-sm-6 col-xs-12 ">
                                    {{-- @if (count($post->postmeta->where('meta_key', '_featured_image')) ) --}}
                                    <div class="article-item">
                                        <div class="article-tags">
                                            <div class="video-thumbnail cs-all-vid pos-rltv">
                                                <a href="{{'/'.$post->post_type.'/'.$post->slug}}">
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
                                        <h2><a href="{{'/'.$post->post_type.'/'.$post->slug}}">{{ implode(' ', array_slice(explode(' ', $post->title), 0, 10)) }}@if ( str_word_count($post->title) > 10 )...@endif</a></h2>
                                        <h4>
                                            <span> {{ $post->author ?? ''}} </span>
                                            <text>@if($post->author) &nbsp;/&nbsp; @endif<span> {{ $post->created_at->format('M d, Y') ?? ''}} </span></text>
                                        </h4>
                                    </div>
                                </div>
                                {{-- @endif --}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- Main Section -->

{{-- @include('partials._pagination', ['records' => $data['posts']]) --}}

@else

<!-- Main Section -->
<div class="careerfy-main-section careerfy-counter-full topics-section">
    <div class="container">
        <div class="row">
            @if (count($highlights) || count($latest_news) || count($top_banners) || count($bottom_banners))
            <div class="col-md-8">
            @else
            <div class="col-md-12">
            @endif
            @include('partials._posts_banner')
            <div class="m-t-20"></div>

                <div class="careerfy-typo-wrap categ-title pos-rltv">
                    <h3><span>{{ ucfirst($data['category']->title) ?? '' }}</span></h3>
                    @if (count($data['other-categories']))
                    {!! Form::open(['route' => [ 'searchCategory', $data['category']->post_type], 'method' => 'GET', 'class' => 'all-category', 'id' => 'select_category']) !!}
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
                                @foreach ($post->postmeta->where('meta_key', '_featured_image') as $key => $value)
                                <img src="{{ asset('uploads/'.$value->meta_value )}}" alt="{{$value->meta_value}}">
                                @endforeach
                                <div class="new-post-sec">

                                    <div class="clearfix"></div>
                                    <div class="article-tags">
                                        @foreach ($post->topics as $topic)
                                        <span><a href="{{ route('showTopic', $topic->slug ?? '') }}">{{$topic->title ?? ''}}</a></span>
                                        @endforeach
                                    </div>
                                    <h2><a href="{{$post->post_type.'/'.$post->slug}}">{{ $post->title ?? ''}}</a></h2>

                                    <div class="article-img-text">
                                        @foreach ($post->postmeta->where('meta_key', '_featured_image') as $key => $value)
                                        <img src="{{ asset('uploads/'.$value->meta_value )}}" alt="{{$value->meta_value}}">
                                        @endforeach
                                        <p>{{ implode(' ', array_slice(explode(' ', $post->excerpt), 0, 20)) }}@if ( str_word_count($post->excerpt) > 20 )...@endif</p>
                                    </div>
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
                            <h2><a href="{{ '/'.$post->post_type.'/'.$post->slug }}">{{ $post->title ?? ''}}</a></h2>
                            <h4>
                                <span> {{ $post->author ?? ''}} </span>

                                <text>@if($post->author) &nbsp;/&nbsp; @endif<span> {{ $post->created_at->format('M d, Y') ?? ''}} </span></text>

                            </h4>
                            <div class="article-img-text">
                                @foreach ($post->postmeta->where('meta_key', '_featured_image') as $key => $value)
                                <img src="{{ asset('uploads/'.$value->meta_value )}}" alt="{{$value->meta_value}}">
                                @endforeach
                                <p class="wth-img">{{ implode(' ', array_slice(explode(' ', $post->excerpt), 0, 20)) }}@if ( str_word_count($post->excerpt) > 20 )...@endif</p>
                            </div>
                            @endif
                        </div>
                    @endforeach
                </div>
                </div>

            </div>
            <!-- sidebar -->
            @include('partials._sidebar')
        </div>
    </div>
</div>
<!-- Main Section -->


@include('partials._pagination', ['records' => $data['posts']])

@endif


@endsection