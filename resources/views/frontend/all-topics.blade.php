@extends('layouts.app')


@section('meta')

<title> {{ $data['page']->title }} -  </title>
<meta name="title" content="{{ $data['page']->meta_title ?? '' }}">
<meta name="description" content="{{ $data['page']->meta_desc ?? '' }}">
<meta name="keywords" content="{{ $data['page']->meta_keywords ?? '' }}">

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
                
                <div class="careerfy-typo-wrap categ-title">

                    <h3><span>All Topics</span></h3>


                </div>

                @foreach ($data['parent_topics'] as $topic)
                <?php    
                $children = DB::table('topics')->where('parent_id', $topic->id)->get();
                ?>
                @if (count($children) != 0)
                <div class="topics-list">
                    <div class="topics-list-catg">
                        <h3>{{ $topic->title }}</h3>
                        <ul>
                            @foreach ($children as $child)

                            <li><a href="{{ route('showTopic', $child->slug) }}">{{$child->title}}</a></li>
                            
                            @endforeach
                        </ul>
                    </div>

                </div>
                @endif
                @endforeach

            </div>

            <div class="col-md-4 tblt-nn">
                @include('partials._sidebar')
            </div>

        </div>
    </div>
</div>
<!-- Main Section -->

{{-- @include('partials._pagination', ['records' => $posts]) --}}


@endsection