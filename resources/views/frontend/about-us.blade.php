@extends('layouts.app')


@section('meta')

    <title> {{ $data['page']->title }} -  </title>
    <meta name="title" content="{{ $data['page']->meta_title ?? '' }}">
    <meta name="description" content="{{ $data['page']->meta_desc ?? '' }}">
    <meta name="keywords" content="{{ $data['page']->meta_keywords ?? '' }}">

@endsection


@section('content')


<div class="careerfy-main-section careerfy-about-text-full orange-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h2>About OncologyMe</h2>
                <p>“Oncology Medical Education” is an oncology-specific healthcare education platform that creates a wide spectrum of virtual scientific activities through a user-friendly approach that is culturally adapted to the Middle-East
                    Arab practice</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a auctor urna, et porttitor lorem. Fusce at neque et orci rhoncus hendrerit. Praesent nec quam ac orci placerat semper.</p>
            </div>
        </div>
    </div>
</div>
<!-- Main Section -->
<div class="careerfy-main-section careerfy-about-text-full about-main-section">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-xs-12 careerfy-typo-wrap">
                <div class="careerfy-about-text">
                    <h3>Our Vision</h3>
                    <span class="careerfy-about-sub">Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.</span>
                    <p>In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur
                        lacus tibul.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a auctor urna, et porttitor lorem. Fusce at neque et orci rhoncus hendrerit. Praesent nec quam ac orci placerat semper.</p>

                </div>
            </div>
            <div class="col-md-3 col-xs-12 careerfy-typo-wrap gray-bg">
                <div class="careerfy-about-thumb">
                    <img src="img/icon1.png" alt="">
                    <h3>Our Mission</h3>
                    <span class="careerfy-about-sub">Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.</span>
                    <p>In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur
                        lacus tibul.</p>

                </div>
            </div>
            <div class="col-md-3 col-xs-12 careerfy-typo-wrap navy-bg">
                <div class="careerfy-about-thumb">
                    <img src="img/icon2.png" alt="">
                    <h3 style="color: #fff;">Our Goal</h3>

                    <p style="color: #fff;">In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur
                        lacus tibul.</p>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Main Section -->


<!-- Main Section -->
<div class="careerfy-main-section m-t-50 p-t-30">
    <div class="container">
        <div class="row">

            <div class="careerfy-typo-wrap col-md-6">
                <section class="careerfy-about-text">
                    <h3 class="m-b-10">Our Strategy</h3>

                    <span class="careerfy-about-sub">Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.</span>
                    <p>In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur
                        lacus tibul.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a auctor urna, et porttitor lorem. Fusce at neque et orci rhoncus hendrerit. Praesent nec quam ac orci placerat semper. In accumsan pulvinar maximus.
                    </p>
                </section>

            </div>

            <div class="careerfy-typo-wrap col-md-6">
                <img src="img/vid3.jpg">

            </div>

        </div>
    </div>
</div>
<!-- Main Section -->



<!-- Main Section -->
<div class="careerfy-main-section  p-t-20">
    <div class="container">
        <div class="row flex-order">
            <div class="careerfy-typo-wrap col-md-6 order-2">
                <img src="img/vid3.jpg">

            </div>

            <div class="careerfy-typo-wrap col-md-6 order-1">
                <section class="careerfy-about-text">
                    <h3 class="m-b-10">Our Services</h3>

                    <span class="careerfy-about-sub">Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.</span>
                    <p>In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur
                        lacus tibul.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a auctor urna, et porttitor lorem. Fusce at neque et orci rhoncus hendrerit. Praesent nec quam ac orci placerat semper. In accumsan pulvinar maximus.
                    </p>
                </section>

            </div>



        </div>
    </div>
</div>
<!-- Main Section -->

@endsection