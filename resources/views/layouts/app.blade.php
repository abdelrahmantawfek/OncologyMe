<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <link rel="icon" type="image/x-icon" href="{{ asset('front-assets/img/fav.png') }}">
    <!-- Css -->
    <link href="{{ asset('front-assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/css/slick-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/plugin-css/fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/plugin-css/plugin.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/css/responsive.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Wrapper -->
    <div class="careerfy-wrapper">

        <!-- Header -->
        <header id="careerfy-header" class="careerfy-header-one pos-rltv">
            @include('partials._header')
        </header>
        <!-- Header -->



        <!-- Main Content -->
        <div class="clearfix"></div>
        <div class="careerfy-main-content">

            <!-- Main Content -->

            @yield('content')

            <!-- Main Content -->

        </div>
        <!-- Main Content -->

        <!-- Footer -->
        <footer id="careerfy-footer" class="careerfy-footer-one">
            @include('partials._footer')
        </footer>
        <!-- Footer -->

        <!-- floating Icons -->
        @include('partials._floating-menu')




    </div>
    <!-- Wrapper -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('front-assets/script/jquery.js') }}"></script>
    <script src="{{ asset('front-assets/script/bootstrap.js') }}"></script>
    <script type="front-assets/application/javascript" src="{{ asset('js/cu-script.js') }}"></script>
    <script src="{{ asset('front-assets/script/slick-slider.js') }}"></script>
    <script src="{{ asset('front-assets/plugin-script/counter.js') }}"></script>
    <script src="{{ asset('front-assets/plugin-script/progressbar.js') }}"></script>
    <script src="{{ asset('front-assets/plugin-script/fancybox.pack.js') }}"></script>
    <script src="{{ asset('front-assets/plugin-script/isotope.min.js') }}"></script>
    <script src="{{ asset('front-assets/plugin-script/functions.js') }}"></script>
    <script src="{{ asset('front-assets/script/functions.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        $(document).ready(function() {
            $(".vid-carousel, .art-carousel").owlCarousel({
                items: 4,
                touchDrag: false,
                mouseDrag: false,
                autoplay: false,
                loop: true,
                autoplayTimeout: 7000,
                autoWidth: false,
                animateOut: 'fadeOut',
                dots: false,
                nav: true,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
            });


            // $(".vid-carousel").owlCarousel({
            //     navText: ["<i class='fa fa-chevron-right'></i>","<i class='fa fa-chevron-left'></i>"]
            // });

            $(".main-banner").owlCarousel({
                items: 1,
                touchDrag: false,
                mouseDrag: false,
                autoplay: true,
                loop: true,
                autoplayTimeout: 7000,
                autoWidth: false,
                animateOut: 'fadeOut',
                dots: false,
            });

            $(".top-banner").owlCarousel({
                items: 1,
                touchDrag: false,
                mouseDrag: false,
                autoplay: true,
                loop: true,
                autoplayTimeout: 7000,
                animateOut: 'fadeOut',
                dots: false,
            });

            $(".bottom-banner").owlCarousel({
                items: 1,
                touchDrag: false,
                mouseDrag: false,
                autoplay: true,
                loop: true,
                autoplayTimeout: 7000,
                animateOut: 'fadeOut',
                dots: false,
            });


            if ($(window).width() < 1055) {

                $('.navbar-nav li').each(function() {
                    $(this).children('ul').hide();
                    $(this).click(function() {
                        $(this).children('ul').toggle('hide');
                    });
                });
            }

            $('#category').select2();

            $('#category').on('change', function () {
                $('#select_topic').submit();
            });

            $('#category').on('change', function () {
                $('#select_category').submit();
            });

        });
    </script>
</body>

</html>