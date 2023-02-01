@extends('layouts.app')


@section('meta')

<title> {{ $data['page']->page_title  }} - {{$general_info[0]->tagline}}  </title>
<meta name="title" content="{{ $data['page']->meta_title ?? '' }}">
<meta name="description" content="{{ $data['page']->meta_desc ?? '' }}">
<meta name="keywords" content="{{ $data['page']->meta_keywords ?? '' }}">

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
                
                <div class="careerfy-typo-wrap categ-title">

                    <h3><span>All Topics</span></h3>


                </div>

                @foreach ($data['parent_topics'] as $topic)
                <?php    
                $children = DB::table('topics')->where('parent_id', $topic->id)->orderBy('title')->get();
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

            <!-- sidebar -->
            @include('partials._sidebar')

        </div>
    </div>
</div>
<!-- Main Section -->

{{-- @include('partials._pagination', ['records' => $posts]) --}}


@endsection