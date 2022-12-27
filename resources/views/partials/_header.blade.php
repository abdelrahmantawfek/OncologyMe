<div class="container ">
    <div class="row">
        <aside class="col-md-2 col-xs-5">
            <a href="/" class="careerfy-logo"><img src="{{ asset('front-assets/img/logo.png') }}" alt=""></a>
        </aside>
        <aside class="col-md-8 col-xs-2 pos-unset no-pd">
            <nav class="careerfy-navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#careerfy-navbar-collapse-1" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="careerfy-navbar-collapse-1">
                    <ul class="navbar-nav">

                        <li><a href="javascript:void(0)">About Us <i class="fa fa-angle-down"></i></a>
                            <ul class="sub-menu cs-sub-menu">
                                <li><a href="{{ route('about') }}">About OncologyMe</a></li>
                                <li><a href="{{ route('editorial') }}">Editorial Board</a></li>
                                <li><a href="{{ route('rights') }}">Rights and permissions</a></li>
                                <li><a href="{{ route('contact') }}">Contact us</a></li>
                            </ul>
                        </li>

                        <li><a href="javascript:void(0)">Topics <i class="fa fa-angle-down"></i></a>
                            <ul class="sub-menu cs-sub-menu">
                                @foreach ($topics as $topic)
                                <li><a href="{{ route('showTopic', $topic->slug ?? '') }}">{{$topic->title ?? ''}}</a></li>
                                @endforeach
                                <li><a href="{{ route('allTopics') }}">View All</a></li>
                            </ul>
                        </li>

                        <li class="pos-unset"><a href="javascript:void(0)">Oncology News <i class="fa fa-angle-down"></i></a>
                            <ul class="sub-menu cs-sub-menu">
                                @foreach ($news_categories as $category)
                                <li><a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}">{{$category->title ?? ''}}</a></li>
                                @endforeach
                                <li><a href="/all-news">View All</a></li>
                            </ul>


                        </li>

                        <li class="pos-unset"><a href="javascript:void(0)">Oncology Watch <i class="fa fa-angle-down"></i></a>
                            <ul class="sub-menu dsply-dsk">
                                <div class="owl-carousel vid-carousel cs-nav carousel slide">
                                    @foreach ($videos_categories as $category)
                                    <div class="">
                                        <div class="thumbnail">
                                            <a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}"> <img src="{{ asset('uploads/'.$category->featured_image) }}" alt="{{$category->featured_image}}"></a>
                                            <div class="caption">
                                                <h3><a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}">{{$category->title ?? ''}}</a></h3>

                                                <p><a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}">Read More</a></p>
                                            </div>
                                        </div>
                                    </div>  
                                    @endforeach
                                  </div>
                                  <div class="cs-readmore"><a href="/all-videos">View All</a></div>
                                {{-- <div id="myCarousel-3" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="row">
                                                @foreach ($videos_categories as $category)
                                                <div class="col-md-3">
                                                    <div class="thumbnail">
                                                        <a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}"> <img src="{{ asset('uploads/'.$category->featured_image) }}" alt="{{$category->featured_image}}"></a>
                                                        <div class="caption">
                                                            <h3><a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}">{{$category->title ?? ''}} Videos</a></h3>

                                                            <p><a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}">Read More</a></p>
                                                        </div>
                                                    </div>
                                                </div>    
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel-3" data-slide="prev"><i class="fa fa-chevron-left "></i></a>
                                    <a class="right carousel-control" href="#myCarousel-3" data-slide="next"><i class="fa fa-chevron-right "></i></a>

                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel-3" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel-3" data-slide-to="1"></li>
                                        <li data-target="#myCarousel-3" data-slide-to="2"></li>
                                    </ol>
                                </div> --}}
                            </ul>

                            <ul class="sub-menu cs-sub-menu dsply-mob">
                                @foreach ($videos_categories as $category)
                                <li><a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}">{{$category->title ?? ''}}</a></li>
                                @endforeach
                                <li><a href="/all-videos">View All</a></li>
                            </ul>
                        </li>

                        <li class="pos-unset"><a href="javascript:void(0)">Articles <i class="fa fa-angle-down"></i></a>
                            <ul class="sub-menu dsply-dsk">
                                <div class="owl-carousel art-carousel cs-nav carousel slide">
                                    @foreach ($articles_categories as $category)
                                    <div class="">
                                        <div class="thumbnail">
                                            <a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}"> <img src="{{ asset('uploads/'.$category->featured_image) }}" alt="{{$category->featured_image}}"></a>
                                            <div class="caption">
                                                <h3><a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}">{{$category->title ?? ''}} Videos</a></h3>

                                                <p><a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}">Read More</a></p>
                                            </div>
                                        </div>
                                    </div>  
                                    @endforeach
                                  </div>
                                  <div class="cs-readmore"><a href="/all-articles">View All</a></div>

                                {{-- <div id="myCarousel-1" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="row">

                                                @foreach ($articles_categories as $category)
                                                <div class="col-md-3">
                                                    <div class="thumbnail">
                                                        <a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}"> <img src="{{ asset('uploads/'.$category->featured_image) }}" alt="{{$category->featured_image ?? ''}}"></a>
                                                        <div class="caption">
                                                            <h3><a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}">{{$category->title ?? ''}}</a></h3>

                                                            <p><a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}">Read More</a></p>
                                                        </div>
                                                    </div>
                                                </div>    
                                                @endforeach
                
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel-1" data-slide="prev"><i class="fa fa-chevron-left "></i></a>
                                    <a class="right carousel-control" href="#myCarousel-1" data-slide="next"><i class="fa fa-chevron-right "></i></a>

                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel-1" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel-1" data-slide-to="1"></li>
                                        <li data-target="#myCarousel-1" data-slide-to="2"></li>
                                    </ol>
                                </div> --}}
                            </ul>

                            <ul class="sub-menu cs-sub-menu dsply-mob">
                                @foreach ($articles_categories as $category)
                                <li><a href="{{ route('showCategory', [$category->post_type, $category->slug]) }}">{{$category->title ?? ''}}</a></li>
                                @endforeach
                                <li><a href="/all-articles">View All</a></li>
                            </ul>
                        </li>

                        <li class="pos-unset"><a href="/all-podcasts">Podcasts</a></li>


                    </ul>
                </div>
            </nav>
        </aside>
        <aside class="col-md-2 col-xs-5 no-pd">
            <div class="careerfy-right">
                @if (Route::has('login'))
                <ul class="careerfy-user-section cs-acc-menu dsply-dsk">
                    @auth
                    <li class="logout-btn"><a class="careerfy-color careerfy-open-signin-tab" href="{{route('logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Log out</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @else
                    <li class="btn1"><a class="careerfy-color careerfy-open-signin-tab" href="{{route('login')}}">Log in</a></li>
                    @if (Route::has('register'))
                    <li class="btn2"><a class="careerfy-color careerfy-open-signup-tab" href="{{route('register')}}">Register Now </a></li>
                    @endif
                    @endauth
                </ul>
                <ul class="careerfy-user-section cs-acc-menu dsply-mob">
                    @auth
                    <li class="logout-btn"><a class="careerfy-color careerfy-open-signin-tab" href="{{route('logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i></a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @else
                    <li class="btn1"><a class="careerfy-color careerfy-open-signin-tab" href="{{route('login')}}"><i class="fa fa-sign-in"></i></a></li>
                    @if (Route::has('register'))
                    <li class="btn2"><a class="careerfy-color careerfy-open-signup-tab" href="{{route('register')}}"><i class="fa fa-user-o"></i></a></a></li>
                    @endif
                    @endauth
                </ul>

                @endif

                <div class="event__search__floater">
                    <div class="search__anchor">
                        <form id="event-search-form" method="GET" action="{{ route('searchPosts')}}">
                            <input type="text" class="search__bar" placeholder="Search" name="search" required>
                            <input class="search__submit" type="submit">
                            <div class="search__toggler"></div>
                        </form>

                    </div>
                </div>

            </div>
        </aside>
    </div>
</div>

