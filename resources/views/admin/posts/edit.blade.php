@extends('layouts.admin-app')

@section('content')
 <!--begin::Content-->
 <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard
                <!--begin::Separator-->
                <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                <!--end::Separator-->
                <!--begin::Description-->
                <span class="text-muted fs-7 fw-bold mt-2">Posts</span>
                <!--begin::Separator-->
                <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                <!--end::Separator-->
                <span class="text-muted fs-7 fw-bold mt-2">Edit</span>

                <!--end::Description--></h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

   <div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card">
                        <div class="card-body">
                            {!! Form::model($page, ['route' => ['admin.posts.update', $page->id], 'method' => 'patch']) !!}

                                  <div class="row">
                                      @include('admin.posts.fields')
                                  </div>

                            {!! Form::close() !!}
                          </div>
                      </div>
                  </div>
              </div>
         </div>
  </div>

</div>
<!--end::Content-->
     
@endsection