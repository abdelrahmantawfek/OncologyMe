<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="">
            <img alt="Logo" src="{{ asset('uploads/logo.png') }}" class="h-25px logo" />
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
                    <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">

                {{-- <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Crafted</span>
                    </div>
                </div> --}}

                <div class="menu-item">
                    <a class="menu-link" href="{{ route('admin.dashboard') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/admins*') ? 'here show' : '' }} {{ Request::is('admin/roles*') ? 'here show' : '' }} ">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"></path>
                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Admins</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.admins.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Admins</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.admins.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.roles.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Admin Roles</span>
                            </a>
                        </div>

                        {{-- <div class="menu-item">
                            <div class="menu-content">
                                <a class="btn btn-flex btn-color-success fs-base p-0 ms-2 mb-2 collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_aside_menu_collapse" data-kt-toggle-text="Show Less">
                                    <span data-kt-toggle-text-target="true">Show 10 More</span>
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr082.svg-->
                                    <span class="svg-icon ms-2 svg-icon-3 rotate-180">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.5" d="M12.5657 9.63427L16.75 5.44995C17.1642 5.03574 17.8358 5.03574 18.25 5.44995C18.6642 5.86416 18.6642 6.53574 18.25 6.94995L12.7071 12.4928C12.3166 12.8834 11.6834 12.8834 11.2929 12.4928L5.75 6.94995C5.33579 6.53574 5.33579 5.86416 5.75 5.44995C6.16421 5.03574 6.83579 5.03574 7.25 5.44995L11.4343 9.63427C11.7467 9.94669 12.2533 9.94668 12.5657 9.63427Z" fill="currentColor" />
                                            <path d="M12.5657 15.6343L16.75 11.45C17.1642 11.0357 17.8358 11.0357 18.25 11.45C18.6642 11.8642 18.6642 12.5357 18.25 12.95L12.7071 18.4928C12.3166 18.8834 11.6834 18.8834 11.2929 18.4928L5.75 12.95C5.33579 12.5357 5.33579 11.8642 5.75 11.45C6.16421 11.0357 6.83579 11.0357 7.25 11.45L11.4343 15.6343C11.7467 15.9467 12.2533 15.9467 12.5657 15.6343Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/users*') ? 'here show' : '' }} ">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"></path>
                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Users</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.users.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Users</span>
                            </a>
                        </div>

                        {{-- <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.users.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div> --}}
                    </div>
                </div>
                
                {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/pages*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Text/Article.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Pages</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.pages.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Pages</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.pages.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>

                    </div>
                </div> --}}

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/topics*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Text/Article.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Topics</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.topics.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Topics</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.topics.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>

                    </div>
                </div>

                {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/categories*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Text/Article.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Categories</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.categories.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Categories</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.categories.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>

                    </div>
                </div> --}}

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/news*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Text/Article.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">News</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.news.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All News</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.news.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>


                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.newscategories.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Categories</span>
                            </a>
                        </div>


                    </div>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/videos*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Text/Article.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Videos</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.videos.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Videos</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.videos.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>


                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.videoscategories.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Categories</span>
                            </a>
                        </div>

                    </div>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/articles*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Text/Article.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Articles</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.articles.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Articles</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.articles.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.articlescategories.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Categories</span>
                            </a>
                        </div>

                    </div>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/podcasts*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Text/Article.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Podcasts</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.podcasts.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Podcasts</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.podcasts.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.podcastscategories.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Categories</span>
                            </a>
                        </div>

                    </div>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/contacts*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Text/Article.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Contact Entries</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.contacts.list') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Entries</span>
                            </a>
                        </div>

                    </div>
                </div>

                {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/posts*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Text/Article.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Posts</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.posts.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Posts</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.posts.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.departments.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Departments</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.categories.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Categories</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.tags.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Tags</span>
                            </a>
                        </div>
                    </div>
                </div> --}}

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/announcements*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                           <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Weather/Thunder.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <polygon fill="#000000" opacity="0.3" points="10.0888887 24 14.5333331 18 12.3111109 18 12.3111109 14 7.86666648 20 10.0888887 20"/>
                                    <path d="M5.74714567,14.0425758 C4.09410362,12.9740356 3,11.1147886 3,9 C3,5.6862915 5.6862915,3 9,3 C11.7957591,3 14.1449096,4.91215918 14.8109738,7.5 L17.25,7.5 C19.3210678,7.5 21,9.17893219 21,11.25 C21,13.3210678 19.3210678,15 17.25,15 L8.25,15 C7.28817895,15 6.41093178,14.6378962 5.74714567,14.0425758 Z" fill="#000000"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Ads</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.announcements.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Ads</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.announcements.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>

                    </div>
                </div>

                {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/settings*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                           <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Weather/Thunder.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <polygon fill="#000000" opacity="0.3" points="10.0888887 24 14.5333331 18 12.3111109 18 12.3111109 14 7.86666648 20 10.0888887 20"/>
                                    <path d="M5.74714567,14.0425758 C4.09410362,12.9740356 3,11.1147886 3,9 C3,5.6862915 5.6862915,3 9,3 C11.7957591,3 14.1449096,4.91215918 14.8109738,7.5 L17.25,7.5 C19.3210678,7.5 21,9.17893219 21,11.25 C21,13.3210678 19.3210678,15 17.25,15 L8.25,15 C7.28817895,15 6.41093178,14.6378962 5.74714567,14.0425758 Z" fill="#000000"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">General Settings</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Header</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Footer</span>
                            </a>
                        </div>

                    </div>
                </div> --}}

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
        <a href="{{ route('admin.logout') }}" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="Logout from your account"
        onclick="event.preventDefault();
        document.getElementById('logout-f-form').submit();">
        {{ __('Sign Out') }}

            {{-- <span class="btn-label">Sign Out</span> --}}
            <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
            {{-- <span class="svg-icon btn-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
                    <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
                    <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
                    <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                </svg>
            </span> --}}
            <!--end::Svg Icon-->
        </a>
        <form id="logout-f-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <!--end::Footer-->
</div>