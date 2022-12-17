<!--begin::Table-->
<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
    <!--begin::Table head-->
    <thead>
        <!--begin::Table row-->
        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                </div>
            </th>
            <th class="min-w-125px">title</th>
            <th class="min-w-125px">slug</th>
            <th class="min-w-125px">meta title</th>
            <th class="min-w-125px">meta description</th>
            <th class="min-w-125px">Published date</th>
            <th class="min-w-100px text-end">actions</th>
        </tr>
        <!--end::Table row-->
    </thead>
    <!--end::Table head-->
    <!--begin::Table body-->
    <tbody class="text-gray-600 fw-bold">
        @foreach ($pages as $page)
        <!--begin::Table row-->
        <tr>
            <!--begin::Checkbox-->
            <td>
                <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1" />
                </div>
            </td>
            <!--end::Checkbox-->
            <!--begin::User=-->
            <td class="d-flex align-items-center">
                {{-- <!--begin:: Avatar -->
                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                    <a href="{{ route('admin.pages.edit', $page->id) }}">
                        <div class="symbol-label fs-3 bg-light-danger text-danger">{{ strtoupper(substr($page->title ?? '', 0, 1)) }}</div>
                    </a>
                </div>
                <!--end::Avatar--> --}}
                <!--begin::User details-->
                <div class="d-flex flex-column">
                    <a href="{{ route('admin.pages.edit', $page->id) }}" class="text-gray-800 text-hover-primary mb-1">{{ $page->title ?? ''}}</a>
                </div>
                <!--begin::User details-->
            </td>
            <!--end::User=-->
            <!--begin::Role=-->
            <td>{{ $page->slug ?? ''}}</td>
            <!--end::Role=-->
            <!--begin::Last login=-->
            <td>
                {{ $page->meta_keywords ?? ''}}
            </td>
            <!--end::Last login=-->
            <!--begin::Two step=-->
            <td> {{ $page->meta_desc ?? ''}}</td>
            <!--end::Two step=-->
            <!--begin::Joined-->
            <td>{{ $page->created_at->format('M, d, Y') ?? ''}}</td>
            <!--begin::Joined-->
            <!--begin::Action=-->
            <td class="text-end">
                <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                <span class="svg-icon svg-icon-5 m-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon--></a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="../../demo1/dist/apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </td>
            <!--end::Action=-->
        </tr>
        <!--end::Table row-->
        
        @endforeach
    </tbody>
    <!--end::Table body-->
</table>
<!--end::Table-->