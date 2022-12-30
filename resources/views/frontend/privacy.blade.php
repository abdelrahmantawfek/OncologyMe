@extends('layouts.app')


@section('meta')

<title> {{ $data['page']->title }} -  </title>
<meta name="title" content="{{ $data['page']->meta_title ?? '' }}">
<meta name="description" content="{{ $data['page']->meta_desc ?? '' }}">
<meta name="keywords" content="{{ $data['page']->meta_keywords ?? '' }}">

@endsection


@section('content')

<!-- Main Section -->
<div class="careerfy-main-section careerfy-about-text-full">
    <div class="container">
        <div class="row">

            @if (count($highlights) || count($latest_news) || count($top_banners) || count($bottom_banners))
            <div class="col-md-8 careerfy-typo-wrap">
            @else
            <div class="col-md-12 careerfy-typo-wrap">
            @endif
            
            <div class="careerfy-about-text">
                    <h2>About Our Company</h2>
                    <span class="careerfy-about-sub">Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.</span>
                    <p>In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur
                        lacus tibul.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a auctor urna, et porttitor lorem. Fusce at neque et orci rhoncus hendrerit. Praesent nec quam ac orci placerat semper.</p>
                    <span class="careerfy-about-sub">Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.</span>
                    <p>In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur
                        lacus tibul.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a auctor urna, et porttitor lorem. Fusce at neque et orci rhoncus hendrerit. Praesent nec quam ac orci placerat semper. In accumsan pulvinar maximus. Phasellus
                        elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur lacus tibul. In accumsan pulvinar
                        maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur lacus tibul.
                        In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id
                        consectetur lacus tibul. In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In
                        in fringilla massa, id consectetur lacus tibul.</p>
                </div>
            </div>
            <!-- sidebar -->
            @include('partials._sidebar')

        </div>
    </div>
</div>
<!-- Main Section -->

@endsection