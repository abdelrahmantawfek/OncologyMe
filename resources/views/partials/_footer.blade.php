<div class="container">
    <!-- Footer Widget -->
    <div class="careerfy-footer-widget">
        <div class="row">
            <aside class="widget col-md-4 widget_contact_info">
                <div class="widget_contact_wrap">
                    <a class="careerfy-footer-logo" href="/"><img src="{{ asset('front-assets/img/logo.png') }}" alt=""></a>
                    <p>{{$general_info[0]->about}}</p>
                    <p>{{$general_info[0]->short_description}}</p>

                </div>
            </aside>
            <aside class="widget col-md-2 widget_nav_manu">
                <div class="footer-widget-title">
                    <h2>Quick Links</h2>
                </div>
                <ul>
                    @if (count($topics))
                    <li><a href="{{ route('allTopics') }}">Topics</a></li>
                    @endif
                    @if (count($news_categories))
                    <li><a href="/all-news">Oncology News</a></li>
                    @endif

                    @if (count($videos_categories))
                    <li><a href="/all-videos">Oncology Watch</a></li>
                    @endif

                    @if (count($articles_categories))
                    <li><a href="/all-articles">Articles</a></li>
                    @endif

                    @if (count($podcasts_categories))
                    <li><a href="/all-podcasts">Podcasts</a></li>
                    @endif

                </ul>
            </aside>
            <aside class="widget col-md-2 widget_nav_manu">
                <div class="footer-widget-title">
                    <h2>Helpful Links</h2>
                </div>
                <ul>
                    <li><a href="{{ route('about') }}">About Us </a></li>
                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('rights') }}">Rights and permissions</a></li>

                </ul>
            </aside>
            <aside class="widget col-md-4 ">
                <div class="footer-widget-title">
                    <h2>Contact Information</h2>
                </div>
                <p class="cnct-item"><i class="fa fa-map-marker"></i><span> {{$general_info[0]->location}}</span></p>
                <p class="cnct-item"><i class="fa fa-phone"></i> <span><a href="tel:{{$general_info[0]->phone}}">{{$general_info[0]->phone}}</a></span></p>
                <p class="cnct-item"><i class="fa fa-envelope"></i> <span><a href="mailto:{{$general_info[0]->email}}">{{$general_info[0]->email}}</a></span></p>

            </aside>
        </div>
    </div>
    <!-- Footer Widget -->
    <!-- CopyRight -->
    <div class="careerfy-copyright">
        <p>Copyright © 2023 OncologyMe. All rights reserved. </p>

        <ul class="careerfy-social-network" style="float: none;">

            <li>
                <a href="{{$general_info[0]->fb}}" class="careerfy-bgcolorhover fa fa-facebook" target="_blank"></a>
            </li>
            <li>
                <a href="{{$general_info[0]->youtube}}" class="careerfy-bgcolorhover fa fa-youtube-play" target="_blank"></a>
            </li>
            <li>
                <a href="{{$general_info[0]->linkedin}}" class="careerfy-bgcolorhover fa fa-linkedin" target="_blank"></a>
            </li>
        </ul>

        <div class="careerfy-social-network">
            Designed by <a href="https://maxeseg.com/" target="_blank">Maxes</a>

        </div>
    </div>
    <!-- CopyRight -->
</div>