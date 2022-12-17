@extends('layouts.app')


@section('meta')

<title> {{ $data['page']->title }} -  </title>
<meta name="title" content="{{ $data['page']->meta_title ?? '' }}">
<meta name="description" content="{{ $data['page']->meta_desc ?? '' }}">
<meta name="keywords" content="{{ $data['page']->meta_keywords ?? '' }}">

@endsection


@section('content')

@if (Request::is('videos'))
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
                        <form>
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <div class="form-group">

                                    <select class="form-control" id="meeting">
                                <option>Select a meeting</option>
                                <option>Select a meeting</option>

                            </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">

                                    <select class="form-control" id="topic">
                                <option>Select a topic</option>
                                <option>Select a topic</option>

                            </select>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="clearfix"></div>
                        </form>
                    </div>


                </div>

                <div class="clearfix"></div>
                <div class="banr-box">
                    <img src="img/bnr1.jpg">

                </div>

                <hr style="margin-top: 40px;">
                <div class="articles-section">
                    <div class="row">
                        <h2 class="cntr-title">Most Recent</h2>

                        <div class="articles-box ">
                            <div class="videos-only">
                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    <div class="article-item">
                                        <div class="video-thumbnail pos-rltv">
                                            <a href="single-video.html">
                                                <img src="img/vid1.jpg" class="">
                                                <img class="pos-abslt" src="img/play.png">
                                            </a>
                                        </div>
                                        <div class="article-tags">

                                            <span><a href="all-tags.html">Colorectal Cancer</a></span>

                                        </div>
                                        <div class="clearfix"></div>
                                        <h2><a href="single-video.html">S.M. Qasim Hussaini, MD, on Colon Cancer Treatment Outcomes and Historical Housing Discrimination</a></h2>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    <div class="article-item">
                                        <div class="video-thumbnail pos-rltv">
                                            <a href="single-video.html">
                                                <img src="img/vid1.jpg" class="">
                                                <img class="pos-abslt" src="img/play.png">
                                            </a>
                                        </div>
                                        <div class="article-tags">

                                            <span><a href="all-tags.html">Colorectal Cancer</a></span>

                                        </div>
                                        <div class="clearfix"></div>
                                        <h2><a href="single-video.html">S.M. Qasim Hussaini, MD, on Colon Cancer Treatment Outcomes and Historical Housing Discrimination</a></h2>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    <div class="article-item">
                                        <div class="video-thumbnail pos-rltv">
                                            <a href="single-video.html">
                                                <img src="img/vid1.jpg" class="">
                                                <img class="pos-abslt" src="img/play.png">
                                            </a>
                                        </div>
                                        <div class="article-tags">

                                            <span><a href="all-tags.html">Colorectal Cancer</a></span>

                                        </div>
                                        <div class="clearfix"></div>
                                        <h2><a href="single-video.html">S.M. Qasim Hussaini, MD, on Colon Cancer Treatment Outcomes and Historical Housing Discrimination</a></h2>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    <div class="article-item">
                                        <div class="video-thumbnail pos-rltv">
                                            <a href="single-video.html">
                                                <img src="img/vid1.jpg" class="">
                                                <img class="pos-abslt" src="img/play.png">
                                            </a>
                                        </div>
                                        <div class="article-tags">

                                            <span><a href="all-tags.html">Colorectal Cancer</a></span>

                                        </div>
                                        <div class="clearfix"></div>
                                        <h2><a href="single-video.html">S.M. Qasim Hussaini, MD, on Colon Cancer Treatment Outcomes and Historical Housing Discrimination</a></h2>

                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <hr style="margin-top: 40px;">
                <div class="articles-section">
                    <div class="row">
                        <h2 class="cntr-title">Breast Cancer</h2>

                        <div class="articles-box ">
                            <div class="videos-only">
                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    <div class="article-item">
                                        <div class="video-thumbnail pos-rltv">
                                            <a href="single-video.html">
                                                <img src="img/vid1.jpg" class="">
                                                <img class="pos-abslt" src="img/play.png">
                                            </a>
                                        </div>
                                        <div class="article-tags">

                                            <span><a href="all-tags.html">Colorectal Cancer</a></span>

                                        </div>
                                        <div class="clearfix"></div>
                                        <h2><a href="single-video.html">S.M. Qasim Hussaini, MD, on Colon Cancer Treatment Outcomes and Historical Housing Discrimination</a></h2>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    <div class="article-item">
                                        <div class="video-thumbnail pos-rltv">
                                            <a href="single-video.html">
                                                <img src="img/vid1.jpg" class="">
                                                <img class="pos-abslt" src="img/play.png">
                                            </a>
                                        </div>
                                        <div class="article-tags">

                                            <span><a href="all-tags.html">Colorectal Cancer</a></span>

                                        </div>
                                        <div class="clearfix"></div>
                                        <h2><a href="single-video.html">S.M. Qasim Hussaini, MD, on Colon Cancer Treatment Outcomes and Historical Housing Discrimination</a></h2>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    <div class="article-item">
                                        <div class="video-thumbnail pos-rltv">
                                            <a href="single-video.html">
                                                <img src="img/vid1.jpg" class="">
                                                <img class="pos-abslt" src="img/play.png">
                                            </a>
                                        </div>
                                        <div class="article-tags">

                                            <span><a href="all-tags.html">Colorectal Cancer</a></span>

                                        </div>
                                        <div class="clearfix"></div>
                                        <h2><a href="single-video.html">S.M. Qasim Hussaini, MD, on Colon Cancer Treatment Outcomes and Historical Housing Discrimination</a></h2>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    <div class="article-item">
                                        <div class="video-thumbnail pos-rltv">
                                            <a href="single-video.html">
                                                <img src="img/vid1.jpg" class="">
                                                <img class="pos-abslt" src="img/play.png">
                                            </a>
                                        </div>
                                        <div class="article-tags">

                                            <span><a href="all-tags.html">Colorectal Cancer</a></span>

                                        </div>
                                        <div class="clearfix"></div>
                                        <h2><a href="single-video.html">S.M. Qasim Hussaini, MD, on Colon Cancer Treatment Outcomes and Historical Housing Discrimination</a></h2>

                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <hr style="margin-top: 40px;">
                <div class="articles-section">
                    <div class="row">
                        <h2 class="cntr-title">ESMO Congress 2022</h2>

                        <div class="articles-box ">
                            <div class="videos-only">
                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    <div class="article-item">
                                        <div class="video-thumbnail pos-rltv">
                                            <a href="single-video.html">
                                                <img src="img/vid1.jpg" class="">
                                                <img class="pos-abslt" src="img/play.png">
                                            </a>
                                        </div>
                                        <div class="article-tags">

                                            <span><a href="all-tags.html">Colorectal Cancer</a></span>

                                        </div>
                                        <div class="clearfix"></div>
                                        <h2><a href="single-video.html">S.M. Qasim Hussaini, MD, on Colon Cancer Treatment Outcomes and Historical Housing Discrimination</a></h2>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    <div class="article-item">
                                        <div class="video-thumbnail pos-rltv">
                                            <a href="single-video.html">
                                                <img src="img/vid1.jpg" class="">
                                                <img class="pos-abslt" src="img/play.png">
                                            </a>
                                        </div>
                                        <div class="article-tags">

                                            <span><a href="all-tags.html">Colorectal Cancer</a></span>

                                        </div>
                                        <div class="clearfix"></div>
                                        <h2><a href="single-video.html">S.M. Qasim Hussaini, MD, on Colon Cancer Treatment Outcomes and Historical Housing Discrimination</a></h2>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    <div class="article-item">
                                        <div class="video-thumbnail pos-rltv">
                                            <a href="single-video.html">
                                                <img src="img/vid1.jpg" class="">
                                                <img class="pos-abslt" src="img/play.png">
                                            </a>
                                        </div>
                                        <div class="article-tags">

                                            <span><a href="all-tags.html">Colorectal Cancer</a></span>

                                        </div>
                                        <div class="clearfix"></div>
                                        <h2><a href="single-video.html">S.M. Qasim Hussaini, MD, on Colon Cancer Treatment Outcomes and Historical Housing Discrimination</a></h2>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    <div class="article-item">
                                        <div class="video-thumbnail pos-rltv">
                                            <a href="single-video.html">
                                                <img src="img/vid1.jpg" class="">
                                                <img class="pos-abslt" src="img/play.png">
                                            </a>
                                        </div>
                                        <div class="article-tags">

                                            <span><a href="all-tags.html">Colorectal Cancer</a></span>

                                        </div>
                                        <div class="clearfix"></div>
                                        <h2><a href="single-video.html">S.M. Qasim Hussaini, MD, on Colon Cancer Treatment Outcomes and Historical Housing Discrimination</a></h2>

                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>


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
                <div class="banr-box">
                    <img src="{{ asset('front-assets/img/bnr1.jpg') }}">

                </div>
                <div class="m-t-20"></div>
                <div class="careerfy-typo-wrap categ-title pos-rltv">

                    <h3><span>{{ ucfirst($data['posts'][0]->post_type) ?? '' }}</span></h3>

                    <form class="all-category">
                        <div class="form-group">

                            <select class="form-control" id="category">
                                <option>Select a category</option>
                                <option>Select a topic</option>

                        </select>
                        </div>
                    </form>
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

@endif


@endsection