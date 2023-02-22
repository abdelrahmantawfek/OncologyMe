<!doctype html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<title>OncologyMe - Admin Panel</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="icon" type="image/x-icon" href="{{ asset('front-assets/img/admin-favico.png') }}">
		<link rel="shortcut icon" href="{{ asset('uploads/admin-favico.png') }}" />
		{{-- <link rel="icon" type="image/x-icon" href="{{ asset('front-assets/img/fav.png') }}"> --}}
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('front-assets/css/flaticon.css') }}" rel="stylesheet">
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/admin-app.css') }}" rel="stylesheet" type="text/css">
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled  @if (Request::is('admin/login')) login-bg @elseif (Request::is('login')) login-bg @else aside-fixed @endif " style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				@admin
				@include('partials._admin-sidebar')
				@endadmin
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid @if (Request::is('admin/login')) justify-content-center @elseif (Request::is('login')) justify-content-center @endif" id="kt_wrapper">
					<!--begin::Header-->
					@admin
					@include('partials._admin-header')
					@endadmin
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
						@yield('content')
						<!--end::Post-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					@admin
					@include('partials._admin-footer')
					@endadmin
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		{{-- <script>var hostUrl = "assets/";</script> --}}
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		{{-- <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script> --}}
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		{{-- <script src="assets/js/custom/apps/user-management/users/list/table.js"></script> --}}
		{{-- <script src="assets/js/custom/apps/user-management/users/list/export-users.js"></script> --}}
		{{-- <script src="assets/js/custom/apps/user-management/users/list/add.js"></script> --}}
		{{-- <script src="assets/js/widgets.bundle.js"></script> --}}
		{{-- <script src="assets/js/custom/widgets.js"></script> --}}
		{{-- <script src="assets/js/custom/apps/chat/chat.js"></script> --}}
		{{-- <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script> --}}
		{{-- <script src="assets/js/custom/utilities/modals/create-app.js"></script> --}}
		{{-- <script src="assets/js/custom/utilities/modals/users-search.js"></script> --}}
		{{-- <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script> --}}
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
		<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

		<script>
		$(document).ready(function() {
			$('.js-example-basic-multiple').select2();
		});
		// ClassicEditor
        //     .create( document.querySelector( '#content' ) )
        //     .then( editor => {
        //             console.log( editor );
        //     } )
        //     .catch( error => {
        //             console.error( error );
        //     } );

		document.querySelectorAll('.ckeditor').forEach(function (val) {
		ClassicEditor
			.create(val, {
				// toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList'],
				ckfinder: {
						uploadUrl: "{{route('image.upload').'?_token='.csrf_token()}}",
				}
			})
			.catch(error => {
				console.log(error);
			});
		});

		// 	ClassicEditor
        //     .create( document.querySelector( '.ckeditor' ),{
        //         ckfinder: {
        //             uploadUrl: "{{route('image.upload').'?_token='.csrf_token()}}",
        // }
        //     })
        //     .catch( error => {
        //         console.error( error );
        //     } );	

		</script>


		<script>



		// var topics = [];

		// $('input.cs-topics').each(function(){
		// 	$(this).on('change', function() {
		// 		var topic = $('.cs-topics:checked').length;
		// 		// alert(topic);
		// 		topics.push(topic);
		// 	});

		// });

		// console.log(topics);



		// $('.cs_save_btn').click(function(e){
		// 	e.preventDefault();

		// 	var title = $('#title');
		// 	var content = $('#content');
		// 	var topic = $('.cs-topics:checked').length;
		// 	var category = $('.cs-categories:checked').length;

		// 	// console.log(topic);
		// 	if(title.val()  == ''){
		// 		$('.cs-validate-title').html('field is required');
		// 	}
		// 	if(content.val()  == ''){
		// 		$('.cs-validate-content').html('field is required');
		// 	}
		// 	if(topic == 0){
		// 		$('.cs-validate-topic').html('field is required');
		// 	}
		// 	if(category == 0){
		// 		$('.cs-validate-category').html('field is required');
		// 	}
		// 	else{
		// 		$("form").submit();
		// 	}
		// });

		// topic fields script
		$('#parent_field').hide();
		$('#main_field').hide();
		$('input[type=radio][name=is_parent]').change(function() {
			if (this.value == '1') {
				$('#parent_field').hide();
				$('#main_field').hide();
				$('#parent_id').prop('required',false);
				$('input[type=radio][name=is_main]').prop('required',false);
			}
			else if (this.value == '0') {
				$('#parent_field').show();
				$('#main_field').show();
				$('#parent_id').prop('required',true);
				$('input[type=radio][name=is_main]').prop('required',true);
			}
		});
		const isParent = $('input[type=radio][name=is_parent]:checked').val();
		if(isParent == '0'){
			$('#parent_field').show();
			$('#main_field').show();
			$('#parent_id').prop('required',true);
			$('input[type=radio][name=is_main]').prop('required',true);
		}else{
			$('#parent_field').hide();
			$('#main_field').hide();
			$('#parent_id').prop('required',false);
			$('input[type=radio][name=is_main]').prop('required',false);
		}
		$("#cs_select_all").click(function(){
			$('input:checkbox').not(this).prop('checked', this.checked);
		});

		$('.cs-vid-type input').change(function(){
			if($(this).val() == 'video'){
				$('.cs-vid').css('display', 'block');
				$('.cs-youtube').css('display', 'none');
			}else{
				$('.cs-youtube').css('display', 'block');
				$('.cs-vid').css('display', 'none');
			}
		});

		if ($(".post_vid")[0]){
    		$('[value="video"]').prop("checked", true);
			$('.cs-vid').css('display', 'block');
		} else {
    		$('[value="youtube"]').prop("checked", true);
			$('.cs-youtube').css('display', 'block');
		}

		</script>

		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
		
	</body>
	<!--end::Body-->
</html>

