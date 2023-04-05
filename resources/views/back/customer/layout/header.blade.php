<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Home -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <a class="btn" href="{{ url('/') }}" target="_blank">IBN FIRNAS</a>
            </div>
        </div>
        <!-- /Home -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown float-end mt-2">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="bx bx-bell bx-sm"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" style="min-width: 22rem;overflow: hidden; ">
                    <li class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                            <h5 class="text-body mb-0 me-auto">Notification</h5>
                            <a href="javascript:void(0)" class="dropdown-notifications-all text-body"
                                data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Mark all as read"
                                data-bs-original-title="Mark all as read"><i class="bx bx-bell bx-sm"></i></a>
                        </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container navbar-nav-scroll"
                        style="overflow-y: scroll !important;height: 300px;">
                        <ul class="list-group list-group-flush " id="header_notifications">
                            @foreach (auth('web')->user()->unReadNotifications as $item)
                                <a href="{{ $item->data['link'] }}"
                                    class="d-flex align-items-center py-10px dropdown-item text-wrap">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="{{ $item->data['icon'] }}"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">{{ $item->data['title'] }}</h6>
                                        <div class="small">{{ $item->data['description'] }}</div>
                                    </div>
                                    <div class="ps-2 fs-16px">
                                        <i class="bi bi-chevron-right"></i>
                                    </div>
                                </a>
                            @endforeach
                        </ul>
                    </li>
                    <div class="dropdown-menu-footer border-top">
                        <a href="{{ route('customer.view-all-notifications.index') }}"
                            class="dropdown-item d-flex justify-content-center p-3">
                            View all notifications
                        </a>
                    </div>
                </ul>
            </li>
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ auth()->user()->user_image }}"
                            style="width:100% !important; height:100% !important;" alt
                            class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{ auth()->user()->user_image }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    {{-- <span class="fw-semibold d-block">{{ auth()->user()->user_name }}</span> --}}
                                    <small class="text-muted">{{ auth()->user()->user_name }}</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <form action="{{ route('customer.logout') }}">
                            @csrf
                            <button class="dropdown-item" type="submit">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>
