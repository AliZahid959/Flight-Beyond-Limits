
@php
$setting = App\Models\SiteContent::first();

@endphp

<header id="header" class="header-transparent header-semi-transparent header-semi-transparent-dark" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 52, 'stickySetTop': '-52px'}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-top header-top-borders header-top-light-borders">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
                                        <span class="ws-nowrap text-light pl-0"><span class="opacity-7">Phone:</span> <a class="text-light" href="tel:+1234567890">{{$setting->academy_no}}</a></span>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2">
                                        <span class="ws-nowrap text-light"><span class="opacity-7">Email:</span> <a class="text-light" href="mailto:info@porto.com">{{$setting->academy_mail}}</a></span>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    {{-- <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
                                        <a href="#" class="text-light"><i class="far fa-user p-relative" style="top: 0;"></i> Login</a>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2 pr-0 dropdown">
                                        <a href="#" class="text-light pr-0"><i class="fas fa-pencil-alt"></i> Register</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="header-container header-container-height-sm container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{url('/')}}">
                                <img alt="IBN FIRNAS"src="{{asset('front/assets/img/white.png')}}" style="height: 76px; width:195px;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1 mt-3">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link active" href="{{url('/academy')}}">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('front.page.about')}}">
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('front.page.contact')}}">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
