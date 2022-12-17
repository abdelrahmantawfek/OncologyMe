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

            <div class="col-md-6 careerfy-typo-wrap">
                <div class="careerfy-about-text">
                    <h2>About Our Company</h2>
                    <span class="careerfy-about-sub">Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.</span>
                    <p>In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur
                        lacus tibul.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a auctor urna, et porttitor lorem. Fusce at neque et orci rhoncus hendrerit. Praesent nec quam ac orci placerat semper.</p>

                </div>
            </div>
            <div class="col-md-6 careerfy-typo-wrap">
                <div class="careerfy-about-thumb"><img src="img/vid3.jpg"></div>
            </div>


        </div>
    </div>
</div>
<!-- Main Section -->


<!-- Main Section -->
<div class="careerfy-main-section gray-bg p-t-80">
    <div class="container">
        <div class="row">

            <div class="careerfy-typo-wrap col-md-12">
                <section class="careerfy-about-text">
                    <h2>Our Featured Services</h2>
                    <p>A better career is out there. We'll help you find it to use.</p>
                    <span class="careerfy-about-sub">Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.</span>
                    <p>In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur
                        lacus tibul.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a auctor urna, et porttitor lorem. Fusce at neque et orci rhoncus hendrerit. Praesent nec quam ac orci placerat semper. In accumsan pulvinar maximus. Phasellus
                        elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur lacus tibul. In accumsan pulvinar
                        maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur lacus tibul.
                        In accumsan pulvinar maximus. </p>
                </section>

            </div>

        </div>
    </div>
</div>
<!-- Main Section -->


<!-- Main Section -->
<div class="careerfy-main-section careerfy-about-text-full p-t-80">
    <div class="container">
        <div class="row">

            <div class="col-md-6 careerfy-typo-wrap">
                <div class="careerfy-about-text">
                    <h2>About Our Company</h2>
                    <span class="careerfy-about-sub">Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.</span>
                    <p>In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur
                        lacus tibul.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a auctor urna, et porttitor lorem. Fusce at neque et orci rhoncus hendrerit. Praesent nec quam ac orci placerat semper.</p>

                </div>
            </div>
            <div class="col-md-6 careerfy-typo-wrap">
                <div class="careerfy-about-thumb"><img src="img/vid3.jpg"></div>
            </div>


        </div>
    </div>
</div>
<!-- Main Section -->

@endsection