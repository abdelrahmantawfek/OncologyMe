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
{{-- <link href="{{ asset('front-assets/css/slick-slider.css') }}" rel="stylesheet"> --}}
<link href="{{ asset('front-assets/plugin-css/fancybox.css') }}" rel="stylesheet">
<link href="{{ asset('front-assets/plugin-css/plugin.css') }}" rel="stylesheet">
<link href="{{ asset('front-assets/css/color.css') }}" rel="stylesheet">
<link href="{{ asset('front-assets/style.css') }}" rel="stylesheet">
<link href="{{ asset('front-assets/css/responsive.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="@auth logged_in @endauth">

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
{{-- <script type="front-assets/application/javascript" src="{{ asset('js/cu-script.js') }}"></script> --}}
{{-- <script src="{{ asset('front-assets/script/slick-slider.js') }}"></script> --}}
{{-- <script src="{{ asset('front-assets/plugin-script/counter.js') }}"></script> --}}
{{-- <script src="{{ asset('front-assets/plugin-script/progressbar.js') }}"></script> --}}
{{-- <script src="{{ asset('front-assets/plugin-script/fancybox.pack.js') }}"></script> --}}
{{-- <script src="{{ asset('front-assets/plugin-script/isotope.min.js') }}"></script> --}}
{{-- <script src="{{ asset('front-assets/plugin-script/functions.js') }}"></script> --}}
{{-- <script src="{{ asset('front-assets/script/functions.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $(document).ready(function() {

        $(function(){
  
            var lastScrollTop = 0, delta = 5;
            $(window).scroll(function(){
                var nowScrollTop = $(this).scrollTop();
                if(Math.abs(lastScrollTop - nowScrollTop ) >= delta){
                if (nowScrollTop > lastScrollTop){
                    // SCROLLING DOWN 
                    $('#social_side_links, .feedback').addClass('fl-animation-4');
                } else {
                    // SCROLLING UP 
                    $('#social_side_links, .feedback').removeClass('fl-animation-4');
                }
                lastScrollTop = nowScrollTop;
                }
            });
        });

        $("select[name=governorate]").prop('required',true);
        $("#country").change(function() {
            if ($(this).val() == 'Egypt') {
                $('.other-gov').css('display', 'none');
                $('.cs-gov').css('display', 'block');
                $('input[name=other_governorate]').val('');
                $("select[name=governorate]").prop('required',true);
                $(".other-gov input[type=text][name=other_governorate]").prop('required',false);
            } else {
                $('.other-gov').css('display', 'block');
                $('select[name=governorate]').val('');
                $('.cs-gov').css('display', 'none');
                $(".other-gov input[type=text][name=other_governorate]").prop('required',true);
                $("select[name=governorate]").prop('required',false);


            }
        });

        if($("#country").val() == 'Egypt'){
            $('.cs-gov').css('display', 'block');
            $('.other-gov').css('display', 'none');
            $(".other-gov input[type=text][name=other_governorate]").prop('required',false);
            $("select[name=governorate]").prop('required',true);
        }else{
            $('.other-gov').css('display', 'block');
            $('.cs-gov').css('display', 'none');
            $(".other-gov input[type=text][name=other_governorate]").prop('required',true);
            $("select[name=governorate]").prop('required',false);
        }


        $('#affiliation').select2();
        $('#specialty').select2();

        $(".art-carousel, .vid-carousel").owlCarousel({
            // touchDrag: false,
            // mouseDrag: false,
            autoplay: false,
            loop: false,
            autoplayTimeout: 7000,
            // animateOut: 'fadeOut',
            dots: false,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        });

        $(".main-banner").owlCarousel({
            items: 1,
            touchDrag: false,
            mouseDrag: false,
            autoplay: true,
            loop: true,
            autoplayTimeout: 7000,
            // animateOut: 'fadeOut',
            autoplayHoverPause: true,
            nav: true,
            dots: false,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        });

        $(".top-banner").owlCarousel({
            items: 1,
            touchDrag: false,
            mouseDrag: false,
            autoplay: true,
            loop: true,
            autoplayTimeout: 7000,
            // animateOut: 'fadeOut',
            autoplayHoverPause: true,
            nav: true,
            dots: false,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        });

        $(".bottom-banner").owlCarousel({
            items: 1,
            touchDrag: false,
            mouseDrag: false,
            autoplay: true,
            loop: true,
            autoplayTimeout: 7000,
            // animateOut: 'fadeOut',
            autoplayHoverPause: true,
            nav: true,
            dots: false,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
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

        $('body').on('focus', '.select-list-group', function() {

            localStorage.setItem("currId", $(this).attr('id'));
            var count = 1;
            var group = document.getElementById($(this).attr('id'));
            var list_group = group.querySelector('li ul');
            var list_array = group.querySelectorAll('li ul li');
            var search = group.getElementsByTagName('input')[0];

            search.addEventListener('input', function(e) {
                for (var i = 0; i < list_array.length; i++) {
                    matching(list_array[i])
                }
                show_list(list_group);
                key_up_down();
            });

            search.addEventListener('click', function(e) {
                init_list();
                show_list(list_group);
                key_up_down();
            });

            search.addEventListener('keypress', function(e) {
                if (e.keyCode == 13) {

                    e.target.value = list_group.querySelector('[data-highlight="true"]').innerHTML;

                    console.log($(this).siblings().attr('class'));

                    $('#' + localStorage.getItem("currId") + " li ul li").each(function(i) {
                        console.log(localStorage.getItem("currId"));
                        console.log($('#' + localStorage.getItem("currId") + " li ul"));
                        if ($(this).html() == e.target.value) { // This is your rel value
                            $(this).addClass('active').siblings().removeClass('active');

                        }
                    });


                }
                hide_list(list_group)
                    //init_list();
            });

            function matching(item) {
                var str = new RegExp(search.value, 'gi');
                if (item.innerHTML.match(str)) {
                    item.dataset.display = 'true'
                } else {
                    item.dataset.display = 'false';
                    item.dataset.highlight = 'false';
                    count = 0
                }
            }

            function init_list() {
                count = 0;
                for (var i = 0; i < list_array.length; i++) {
                    init_item(list_array[i]);
                    list_array[i].addEventListener('click', copy_paste);
                }
            }

            function init_item(item) {
                item.dataset.display = 'true';
                item.dataset.highlight = 'false';
            }

            function copy_paste() {
                search.value = this.innerHTML;
                // todo : check match of list text and input value for .current 
                init_list();
                hide_list(list_group);
            }

            function hide_list(ele) {
                ele.dataset.toggle = 'false'
            }

            function show_list(ele) {
                ele.dataset.toggle = 'true'
            }

            function key_up_down() {

                var items = group.querySelectorAll('li[data-display="true"]');
                var last = items[items.length - 1];
                var first = items[0];

                search.onkeydown = function(e) {

                    if (e.keyCode === 38) {
                        count--;
                        count = count <= 0 ? items.length : count;
                        items[count - 1].dataset.highlight = items[count - 1] ? 'true' : 'false';
                        if (items[count]) {
                            items[count].dataset.highlight = 'false';
                        } else {
                            first.dataset.highlight = 'false';
                        }
                    }

                    if (e.keyCode === 40) {
                        items[count].dataset.highlight = items[count] ? 'true' : 'false';
                        if (items[count - 1]) {
                            items[count - 1].dataset.highlight = 'false';
                        } else if (items.length == 1 && typeof items.length != 'undefined') {
                            items[count].dataset.highlight = 'true';
                        } else {
                            last.dataset.highlight = 'false';
                        }
                        count++;
                        count = count >= items.length ? 0 : count;
                    }
                };
            }

            group.addEventListener('mouseleave', function(event) {

                if (event.target != list_group && event.target.parentNode != list_group) {
                    list_group.dataset.toggle = 'false'
                }
            });

            $('.select-list-group-list li').click(function() {
                $(this).addClass('active').siblings().removeClass('active');
            });

            $('.select-list-group').on('keydown', function(e) {
                if (e.keyCode === 8) {
                    $(this).find(".select-list-group-list li").removeClass('active');
                }
            });

            $('.select-list-group').on('keydown', function(e) {
                if (e.keyCode === 46) {
                    $(this).find(".select-list-group-list li").removeClass('active');
                }
            });

            $('.select-list-group-list li').on('keydown', function(e) {
                console.log($(this).attr('class'));
                if (e.keyCode === 40) {
                    $(this).addClass('active').siblings().removeClass('active');
                }
            });

            $('.select-list-group-list li').on('keydown', function(e) {
                console.log($(this).attr('data-highlight'));

            });

        });

    });
</script>


{{-- <?php if(count($videos_categories) < 4){ ?>
    <script>
        $(".vid-carousel").owlCarousel({
        items: {{ count($videos_categories) }},
    });
    </script>
<?php }else{ ?>
    <script>
    $(".vid-carousel").owlCarousel({
        items: 4,
    });
    </script>
<?php } ?>

<?php if(count($articles_categories) < 4){ ?>
    <script>
        $(".art-carousel").owlCarousel({
        items: {{count($articles_categories)}},
    });
    </script>
<?php }else{ ?>
<script>
    $(".art-carousel").owlCarousel({
        items: 4,
    });
</script>
<?php } ?> --}}

</body>

</html>