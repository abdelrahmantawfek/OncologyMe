@extends('layouts.app')


@section('meta')

<title> {{ $data['topic']->title ?? ''}} - {{$general_info[0]->tagline}} </title>
<meta name="title" content="{{ $data['topic']->meta_title ?? '' }}">
<meta name="description" content="{{ $data['topic']->meta_desc ?? '' }}">

@endsection


@section('content')

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
                                <h3><span>{{$data['topic']->title}}</span></h3>
                                @if (count($data['other-topics']))
                                {!! Form::open(['route' => ['searchTopic', $data['topic']->slug ], 'method' => 'GET', 'class' => 'all-category', 'id' => 'select_topic']) !!}
                                    <div class="form-group">
                                        {!! Form::select('topics', $data['other-topics'], null, ['class' => 'form-control', 'id' => 'category', 'placeholder' => 'Select a topic'] ) !!}
                                    </div>
                                {!! Form::close() !!}
                                @endif
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
                                                {{-- <span> {{ $post->author ?? ''}} </span> --}}
                
                                                {{-- <text>@if($post->author) &nbsp;/&nbsp; @endif<span> {{ $post->created_at->format('M d, Y') ?? ''}} </span></text> --}}
                
                                            </h4>
                                            <div class="article-img-text">
                                                @foreach ($post->postmeta->where('meta_key', '_featured_image') as $key => $value)
                                                <img src="{{ asset('uploads/'.$value->meta_value )}}" alt="{{$value->meta_value}}">
                                                @endforeach
                                                <p class="wth-img">{{ implode(' ', array_slice(explode(' ', $post->excerpt), 0, 20)) }}@if ( str_word_count($post->excerpt) > 20 )...@endif</p>
                                            </div>
                                        </div>    
                                        @endforeach
                                    </div>

                                </div>
                                <div class=" @if(!count($data['news'])) col-md-12 @else col-md-4 @endif col-sm-6 cs-vid-only">

                                    <div class="videos-only brdr-bf br-nn">
                                        @foreach ($data['videos'] as $post)
                                        {{-- @if (count($post->postmeta->where('meta_key', '_featured_image')) ) --}}
                                        <div class="article-item @if(!count($data['news'])) col-md-4 @else col-md-12 @endif p-0">
                                            <div class="article-tags">
                                                <div class="video-thumbnail pos-rltv">
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
                                                {{-- <span> {{ $post->author ?? ''}} </span> --}}
                
                                                {{-- <text>@if($post->author) &nbsp;/&nbsp; @endif<span> {{ $post->created_at->format('M d, Y') ?? ''}} </span></text> --}}
                
                                            </h4>
                                        </div>
                                        {{-- @endif --}}
                                        @endforeach
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



{{-- @include('partials._pagination', ['records' => $data['posts']]) --}}


@endsection