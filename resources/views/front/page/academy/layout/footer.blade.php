<footer id="footer" class="m-0 mt-3 border-0 bg-color-dark overflow-hidden pt-4">
    <div class="container">
        <div class="row py-5 custom-row-footer">
            <div
                class="col-12 col-sm-12 col-lg-3 d-flex align-items-start flex-column footer-column custom-footer-column-logo">
                <img alt="FIRNAS" style="position: relative;bottom:70px;margin-top:30px;" height="90px;"
                    src="{{ asset('front/assets/img/white.png') }}">
                <p class="d-block m-0 text-color-light">Dar Al Manal Building, Office Number 402 4th Floor Madinat
                    Sultan Qaboos OM, 100, Oman</p>
            </div>
            <div class="col-12 col-sm-12 col-lg-9 footer-column">
                <div
                    class="d-flex align-items-start align-sm-items-end justify-content-between flex-column h-100 mt-4 mt-sm-0">
                    <div
                        class="d-flex flex-nowrap flex-lg-wrap justify-content-start justify-content-lg-end align-items-start align-items-lg-center w-100 flex-column flex-lg-row mt-4 mt-lg-0 custom-container-info-socials">
                        <ul class="nav nav-pills justify-content-between h-100 mb-4 mb-lg-0">
                            <li class="nav-item d-inline-flex flex-column flex-lg-row">
                                <span
                                    class="footer-nav-phone py-2 d-flex align-items-center text-color-secondary font-weight-semibold text-uppercase justify-content-start mb-2 mb-lg-0">
                                    <span>
                                        {{-- <i class="icon-phone icons"></i> --}}
                                    </span>
                                    <a class="font-weight-bold text-color-light text-decoration-none"
                                        href="">(+968) 9177 1779</a>
                                </span>

                            </li>
                        </ul>
                        {{-- <ul class="social-icons custom-social-icons">
                            <li class="nav-link text-color-secondary font-weight-bold letter-spacing-05 text-color-hover-primarysocial-icons-instagram">
                                <a class="custom-bg-color-light-grey" href="http://www.instagram.com/" target="_blank" title="Instagram">
                                    <i class="fab fa-instagram text-4 font-weight-semibold text-color-secondary"></i>
                                </a>
                            </li>
                            <li class="social-icons-twitter">
                                <a class="custom-bg-color-light-grey" href="http://www.twitter.com/" target="_blank" title="Twitter">
                                    <i class="fab fa-twitter text-4 font-weight-semibold text-color-secondary"></i>
                                </a>
                            </li>
                            <li class="social-icons-facebook">
                                <a class="custom-bg-color-light-grey" href="http://www.facebook.com/" target="_blank" title="Facebook">
                                    <i class="fab fa-facebook-f text-4 font-weight-semibold text-color-secondary"></i>
                                </a>
                            </li>
                        </ul> --}}
                    </div>
                    <nav class="nav-footer w-100 d-none d-lg-block mt-3">
                        <ul class="nav nav-pills justify-content-end" id="mainNav">
                            <li class="dropdown-secondary">
                                <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary"
                                    href="{{ url('/') }}">
                                    Home
                                </a>
                            </li>
                            <li class="dropdown-secondary">
                                <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary"
                                    href="{{ route('front.page.about') }}">
                                    About Us
                                </a>
                            </li>
                            <li class="dropdown-secondary">
                                <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary"
                                    href="{{ route('front.page.services') }}">
                                    Services
                                </a>
                            </li>
                            <li class="dropdown-secondary">
                                <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary"
                                    href="{{ route('front.page.blogs') }}">
                                    Blog
                                </a>
                            </li>
                            <li class="dropdown-secondary">
                                <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary"
                                    href="{{ route('front.page.contact') }}">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright container bg-color-dark">
        <div class="row">
            <div class="col-lg-12 text-center m-0">
                <p class="text-color-light">IBN FIRNAS © 2021. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
