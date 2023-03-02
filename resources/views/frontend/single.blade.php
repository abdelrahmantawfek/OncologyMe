@extends('layouts.app')


@section('meta')

<title> {{ $data['post']->title }} - {{$general_info[0]->tagline}}  </title>
<meta name="title" content="{{ $data['post']->meta_title ?? '' }}">
<meta name="description" content="{{ $data['post']->meta_desc ?? '' }}">

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

                <div class=" articles-box single-news-post">

                    <div class="articles-only">
                        <div class="article-item">

                            @if (count($data['video']))
                            <video width="100%" controls>
                                <source src="{{ asset('uploads/'. $data['video'][0] ?? '') }}" type="video/mp4">
                                    Your browser does not support HTML video.
                            </video>
                            @endif

                            @if (count($data['youtube_video']))
                            <iframe width="100%" height="415" src="https://www.youtube.com/embed/{{$data['youtube_video'][0] ?? ''}}" frameborder="0" allowfullscreen></iframe>
                            @endif

                            @foreach ($data['post']->postmeta->where('meta_key', '_featured_image') as $key => $value)
                            <img src="{{ asset('uploads/'.$value->meta_value )}}" alt="{{$value->meta_value}}" width="100%" class="feature_image">
                            @endforeach

                            <div class="clearfix"></div>
                            <h2>{{ $data['post']->title  ?? ''}} </h2>
                            <h4>
                                <span href=""> {{$data['post']->author ?? '' }} </span>

                                <text>@if($data['post']->author) &nbsp;/&nbsp; @endif<span> {{ $data['post']->created_at->format('M d, Y') ?? ''}} </span></text>

                                
                                @if (count($data['pdf']))
                                <span class="flt-r">
                                    @auth
                                    <a href="{{ asset('uploads/'. $data['pdf'][0] ?? '') }}" download><i class="fa Example of file-pdf-o fa-file-pdf-o"></i> Download PDF</a>
                                    @else
                                    {{-- <a href="{{ route('login') }}"><i class="fa Example of file-pdf-o fa-file-pdf-o"></i> Download PDF</a> --}}
                                    <a href="#" type="button" data-toggle="modal" data-target="#note_modal"><i class="fa Example of file-pdf-o fa-file-pdf-o"></i> Download PDF</a>

                                    @endauth
                                </span>
                                @endif
                            </h4>
                            <div class="clearfix"></div>
                            @if (count($data['key_points']))
                            <div class="key-points">
                                <h3>KEY POINTS</h3>
                                <p>
                                    {{$data['key_points'][0]}}
                                </p>
                            </div>
                            @endif



                            <div class="post-body">
                                <p> 
                                    {!! $data['post']->content  ?? '' !!}  
                                </p>
                            </div>
                            @if (count($data['sound']))
                            <audio controls="">
                                {{-- <source src="horse.ogg" type="audio/ogg"> --}}
                                <source src="{{ asset('uploads/'. $data['sound'][0] ?? '') }}" type="audio/mpeg">
                              Your browser does not support the audio element.
                            </audio>
                            @endif
                            
                            @if (count($data['pdf']))
                            <div class="pdf-download" id="pdf-download">
                                <h5>Slideset PDF</h5>
                                <div class="pdf-holder">

                                    <img src="{{ asset('front-assets/img/pdf.jpg') }}">
                                    @auth
                                    <a href="{{ asset('uploads/'. $data['pdf'][0] ?? '') }}" download>Download slideset</a>
                                    @else
                                    {{-- <a href="{{ route('login') }}">Download slideset</a> --}}
                                    <a href="#" type="button" data-toggle="modal" data-target="#note_modal">Download PDF</a>
                                    @endauth


                                </div>
                            </div>
                            @endif
                            <div class="clearfix"></div>

                            @if (count($data['script']))
                            <hr style="margin-top: 40px;">
                            <h5>Transcript</h5>
                            <h6><strong>Disclaimer</strong>: This video transcript has not been proofread or edited and may contain errors.</h6>
                            <div class="trascript-container">
                                {{ $data['script'][0] ?? ''}}
                            </div>
                            @endif
                        </div>

                        <div class="cs-social-share">
                            <h5>Share on:</h5>

                            <a class="share-btn share-btn-inverse share-btn-twitter" href="https://twitter.com/share?url=http%3A%2F%2Fcodepen.io%2Fsunnysingh%2Fpen%2FOPxbgq&text=Share Buttons Demo&via=sunnyismoi" title="Share on Twitter">
                                <span class="share-btn-icon"></span>
                                <span class="share-btn-text">Twitter</span>
                            </a>

                            <a class="share-btn share-btn-inverse share-btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fcodepen.io%2Fsunnysingh%2Fpen%2FOPxbgq" title="Share on Facebook">
                                <span class="share-btn-icon"></span>
                                <span class="share-btn-text">Facebook</span>
                            </a>

                            <a class="share-btn share-btn-inverse share-btn-email" href="mailto:?subject=Share Buttons Demo&body=http%3A%2F%2Fcodepen.io%2Fsunnysingh%2Fpen%2FOPxbgq" title="Share via Email">
                                <span class="share-btn-icon"></span>
                                <span class="share-btn-text">Email</span>
                            </a>

                            <a class="share-btn share-btn-inverse share-btn-more" href="https://www.addtoany.com/share_save?linkurl=http%3A%2F%2Fcodepen.io%2Fsunnysingh%2Fpen%2FOPxbgq" title="More share options">
                                <span class="share-btn-icon"></span>
                                <span class="share-btn-text-sr">More</span>
                            </a>
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
@if (Request::is('videos/*'))
@if (count($data['related-posts']))
    
<div class="careerfy-main-section careerfy-counter-full topics-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <h4 class="m-t-60">Related Videos</h4>
                <div class="articles-section">
                    <div class="row">


                        <div class="articles-box ">
                            <div class="videos-only">
                                @foreach ($data['related-posts'] as $post)
                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                    {{-- @if (count($post->postmeta->where('meta_key', '_featured_image')) ) --}}
                                    <div class="article-item">
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
            </div>
        </div>
    </div>
</div>
@endif

@endif

<!-- Modal -->
<div id="note_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Member Feature!</h3>
        </div>
        <div class="modal-body post-body">
            <p>You must be logged in to enjoy this feature.</p>
            <p>You can login <a href="{{route('login')}}" class=""> From here</a></p>
            <p>If you are not previously registered with us, you can Register Now  <a href="{{route('register')}}" class="">From here</a></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
</div>

@endsection