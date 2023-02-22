@extends('layouts.app')


@section('meta')

<title> {{ ucfirst($data['post_type'][0]) }} - {{$general_info[0]->tagline}}  </title>

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
                    <h2 class="cntr-title">{{$data['page']->sections->first()->title ?? ''}} <span>{{$data['page']->sections->first()->subtitle ?? ''}}</span></h2>
                    <p class="cntr-p">{!! $data['page']->sections->first()->content ??'' !!}</p>
                    @include('partials._posts_banner')
                    <div class="m-t-40"></div>
                    <div class="clearfix"></div>
                    @if (count($data['categories']))
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
                    @endif
                    <hr style="margin-top: 10px;">

                </div>

                <div class="clearfix"></div>

 
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
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <hr style="margin-top: 40px;">  
                @endif
                @endforeach
                @if (!count($data['categories']))
                <div class="articles-section">
                    <div class="row">
                        <div class="articles-box ">
                            <div class="videos-only">
                                @foreach ($posts as $post)
                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    <div class="article-item">
                                        <div class="article-tags">
                                            <div class="video-thumbnail pos-rltv">
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
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>


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
                    <h3><span>{{ ucfirst($data['posts'][0]->post_type) ?? '' }}</span></h3>
                    @if (count($data['other-categories']))
                        {!! Form::open(['route' => [ 'searchCategory', $data['posts'][0]->post_type ], 'method' => 'GET', 'class' => 'all-category', 'id' => 'select_category']) !!}
                        <div class="form-group">
                            {!! Form::select('category', $data['other-categories'], null, ['class' => 'form-control', 'id' => 'category', 'placeholder' => 'Select a category'] ) !!}
                        </div>
                        {!! Form::close() !!}
                    @endif
                </div>

                @if (Request::is('all-podcasts')) <div class="articles-section cs-all-podcasts"> @endif
                <div class="articles-box">

                    <div class="articles-only">
                    
                    @foreach ($data['posts'] as $post)

                    @if (Request::is('all-podcasts'))
                    <div class="article-item">

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
                                <h2><a href="{{'/'.$post->post_type.'/'.$post->slug}}">{{ $post->title ?? ''}}</a></h2>

                                <p>{{ implode(' ', array_slice(explode(' ', $post->excerpt), 0, 20)) }}@if ( str_word_count($post->excerpt) > 20 )...@endif</p>
                                <div class="podcast-link">
                                    <a href="{{ '/'.$post->post_type.'/'.$post->slug}}">Listen now <i class="fa fa-headphones"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    @else
                    <div class="article-item">
                        <div class="article-tags">
                            @foreach ($post->topics as $topic)
                            <span><a href="{{ route('showTopic', $topic->slug ?? '') }}">{{$topic->title ?? ''}}</a></span>
                            @endforeach
                        </div>
                        <div class="clearfix"></div>
                        <h2><a href="{{'/'.$post->post_type.'/'.$post->slug}}">{{ $post->title ?? ''}}</a></h2>
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
                    </div>
                    @endif
                    @endforeach


                    </div>
                </div>
                @if (Request::is('all-podcasts')) </div> @endif

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