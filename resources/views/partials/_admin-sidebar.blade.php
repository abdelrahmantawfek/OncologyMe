<div id="kt_aside" class="aside aside aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="javascript:void(0);">
            <img alt="Logo" src="{{ asset('uploads/logo.png') }}" class="h-35px logo" />
        </a>
        <!--end::Logo-->
        {{-- <!--begin::Aside toggler-->
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
        <!--end::Aside toggler--> --}}
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

                <div class="menu-item {{ Request::is('admin') ? 'here show' : '' }}">
                    <a class="menu-link {{ Request::is('admin') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
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

                @can('admins view')
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
                        @can('admins view')
                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/admins') ? 'active' : '' }} " href="{{ route('admin.admins.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Admins</span>
                            </a>
                        </div>
                        @endcan
                        
                        @can('admins view')
                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/admins/create') ? 'active' : '' }}" href="{{ route('admin.admins.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>
                        @endcan

                        @can('roles view')
                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/roles*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Admin Roles</span>
                            </a>
                        </div>
                        @endcan
                    </div>
                </div>
                @endcan

                @can('users view')
                {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/users*') ? 'here show' : '' }} ">
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
                            <a class="menu-link {{ Request::is('admin/users') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Users</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.users.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>
                    </div>
                </div> --}}
                <div class="menu-item {{ Request::is('admin/users*') ? 'here show' : '' }}">
                    <a class="menu-link {{ Request::is('admin/users') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Weather/Thunder.svg-->
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"></path>
                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"></rect>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Users</span>
                    </a>
                </div>
                @endcan

                @can('pages view')
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

                    </div>
                </div> --}}
                <div class="menu-item {{ Request::is('admin/pages*') ? 'here show' : '' }}">
                    <a class="menu-link {{ Request::is('admin/pages') ? 'active' : '' }}" href="{{ route('admin.pages.index') }}">
                    <span class="menu-icon">
                       <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Weather/Thunder.svg-->
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
                    </a>
                </div>
                @endcan

                @can('topics view')
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
                            <a class="menu-link {{ Request::is('admin/topics') ? 'active' : '' }}" href="{{ route('admin.topics.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Topics</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/topics/create') ? 'active' : '' }}" href="{{ route('admin.topics.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>

                    </div>
                </div>
                @endcan

                @can('news view')
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
                            <a class="menu-link {{ Request::is('admin/news') ? 'active' : '' }}" href="{{ route('admin.news.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All News</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/news/create') ? 'active' : '' }}" href="{{ route('admin.news.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>


                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/newscategories*') ? 'active' : '' }}" href="{{ route('admin.newscategories.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Categories</span>
                            </a>
                        </div>


                    </div>
                </div>
                @endcan

                @can('videos view')
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
                            <a class="menu-link {{ Request::is('admin/videos') ? 'active' : '' }}" href="{{ route('admin.videos.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Videos</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/videos/create') ? 'active' : '' }}" href="{{ route('admin.videos.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>


                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/videoscategories*') ? 'active' : '' }}" href="{{ route('admin.videoscategories.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Categories</span>
                            </a>
                        </div>

                    </div>
                </div>
                @endcan

                @can('articles view')
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
                            <a class="menu-link {{ Request::is('admin/articles') ? 'active' : '' }}" href="{{ route('admin.articles.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Articles</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/articles/create') ? 'active' : '' }}" href="{{ route('admin.articles.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/articlescategories*') ? 'active' : '' }}" href="{{ route('admin.articlescategories.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Categories</span>
                            </a>
                        </div>

                    </div>
                </div>
                @endcan

                @can('podcasts view')
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
                            <a class="menu-link {{ Request::is('admin/podcasts') ? 'active' : '' }}" href="{{ route('admin.podcasts.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Podcasts</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/podcasts/create') ? 'active' : '' }}" href="{{ route('admin.podcasts.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/podcastscategories*') ? 'active' : '' }}" href="{{ route('admin.podcastscategories.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Categories</span>
                            </a>
                        </div>

                    </div>
                </div>
                @endcan

                @can('contacts view')
                {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/contacts*') ? 'here show' : '' }}">
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
                            <a class="menu-link {{ Request::is('admin/contacts') ? 'active' : '' }}" href="{{ route('admin.contacts.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Entries</span>
                            </a>
                        </div>

                    </div>
                </div> --}}
                <div class="menu-item {{ Request::is('admin/contacts*') ? 'here show' : '' }}">
                    <a class="menu-link {{ Request::is('admin/contacts') ? 'active' : '' }}" href="{{ route('admin.contacts.index') }}">
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
                    <span class="menu-title">Contact Entries</span>
                    </a>
                </div>
                @endcan

                @can('announcements view')
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
                            <a class="menu-link {{ Request::is('admin/announcements') ? 'active' : '' }}" href="{{ route('admin.announcements.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Ads</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/announcements/create') ? 'active' : '' }}" href="{{ route('admin.announcements.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>

                    </div>
                </div>
                @endcan

                @can('affiliations view')
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/affiliations*') ? 'here show' : '' }}">
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
                        <span class="menu-title">Affiliations</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/affiliations') ? 'active' : '' }}" href="{{ route('admin.affiliations.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Affiliations</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/affiliations/create') ? 'active' : '' }}" href="{{ route('admin.affiliations.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>

                    </div>
                </div>
                @endcan

                @can('specialities view')
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('admin/specialities*') ? 'here show' : '' }}">
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
                        <span class="menu-title">Specialities</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/specialities') ? 'active' : '' }}" href="{{ route('admin.specialities.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Specialities</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/specialities/create') ? 'active' : '' }}" href="{{ route('admin.specialities.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New</span>
                            </a>
                        </div>

                    </div>
                </div>
                @endcan


                @can('settings view')
                <div class="menu-item {{ Request::is('admin/settings*') ? 'here show' : '' }}">
                        <a class="menu-link {{ Request::is('admin/settings') ? 'active' : '' }}" href="{{ route('admin.settings.index') }}">
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
                        </a>
                </div>
                @endcan


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
            <!--end::Svg Icon-->
        </a>
        <form id="logout-f-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <!--end::Footer-->
</div>