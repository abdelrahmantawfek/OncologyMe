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


    <script>
        $(document).ready(function() {

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