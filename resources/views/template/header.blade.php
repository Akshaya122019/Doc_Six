<div class="top-wrap">

    <!-- ===== MOBILE ONLY: one-line bar ===== -->
    <div class="mobile-topbar">
        <a href="{{ route('home') }}" class="mobile-logo">
            <img src="{{ asset('images/4.png') }}" alt="logo">
        </a>

        <a href="tel:9500020252" class="mobile-call">
            <i class="fa fa-phone"></i> +91 9500020252
        </a>

        <button class="mobile-menu-btn" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
    </div>

    <!-- ===== DESKTOP ONLY: full top row ===== -->
    <div class="container desktop-topbar">
        <div class="row">
            <div class="col-md col-xl-5 d-flex align-items-center">
                <img src="{{ asset('images/4.png') }}" alt="logo" height="50" width="70" class="mb-3">
            </div>

            <div class="col-md d-flex align-items-center">
                <div class="con d-flex">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <div class="text">
                        <span>Mail Us</span>
                        <strong><a href="mailto:support@docsix.com">support@docsix.com</a></strong>
                    </div>
                </div>
            </div>

            <div class="col-md d-flex align-items-center">
                <div class="con d-flex">
                    <div class="icon"><i class="fa fa-phone"></i></div>
                    <div class="text">
                        <span>Call Us</span>
                        <strong><a href="tel:9500020252">+91 9500020252</a></strong>
                    </div>
                </div>
            </div>

            <div class="col-md d-flex justify-content-end align-items-center">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a target="_blank" href="#" class="d-flex align-items-center justify-content-center"><i class="fab fa-facebook"></i></a>
                        <a target="_blank" href="#" class="d-flex align-items-center justify-content-center"><i class="fab fa-x-twitter"></i></a>
                        <a target="_blank" href="#" class="d-flex align-items-center justify-content-center"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="#" class="d-flex align-items-center justify-content-center"><i class="fab fa-linkedin"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="nav-trigger" style="height: 1px; background-color: #a0ccd1;"></div>

<nav class="navbar navbar-expand-lg ftco-navbar-light custom-navbar sticky-top bg-white shadow-sm">
    <div class="container-xl d-flex justify-content-between align-items-center px-0" id="get-assistance-container">

        <!-- Desktop "Get Assistance" button (hidden on mobile) -->
        <a class="btn-custom order-lg-last"
           role="button"
           data-bs-toggle="modal"
           data-bs-target="#assistanceModal">
            Get Assistance
        </a>

        <!-- Old toggler (hidden on mobile, we use the one in the top bar) -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav menu-list">

                <li class="nav-item"><a class="nav-link text-white" href="{{ route('home') }}">Home</a></li>

                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">Services <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">

                        <li class="dropdown-submenu">
                            <a class="dropdown-item toggle-submenu" href="#" role="button">Research Services <i class="fa fa-chevron-right"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('thesis-writing') }}">Thesis Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('research-proposal-writing') }}">Research Proposal Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('topic-selection') }}">Topic Selection</a></li>
                                <li><a class="dropdown-item" href="{{ route('dissertation-writing') }}">Dissertation Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('research-methodology') }}">Research Methodology</a></li>
                                <li><a class="dropdown-item" href="{{ route('literature-review-writing') }}">Literature Review Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('synopsis-writing') }}">Synopsis Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('review-paper-writing') }}">Review Paper Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('research-paper-writing') }}">Research Paper Writing Service</a></li>
                                <li><a class="dropdown-item" href="{{ route('conference-paper-writing') }}">Conference Paper Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('research-implementation') }}">Research Implementation</a></li>
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item toggle-submenu" href="#" role="button">Academic Help <i class="fa fa-chevron-right"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('proofreading-and-editing') }}">Proofreading and Editing</a></li>
                                <li><a class="dropdown-item" href="{{ route('plagiarism-removal-service') }}">Plagiarism Removal Service</a></li>
                                <li><a class="dropdown-item" href="{{ route('grammar-check') }}">Grammar Check</a></li>
                                <li><a class="dropdown-item" href="{{ route('data-analysis-assignment') }}">Data Analysis Assignment</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">Journal Support <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('journal-paper-publication') }}">Journal Paper Publication</a></li>
                        <li><a class="dropdown-item" href="{{ route('scopus-journal') }}">Scopus Journal</a></li>
                        <li><a class="dropdown-item" href="{{ route('sci-indexed-journal') }}">SCI Indexed Journals</a></li>
                        <li><a class="dropdown-item" href="{{ route('ugc-journal') }}">UGC Journal</a></li>
                        <li><a class="dropdown-item" href="{{ route('web-of-science-indexed-journals') }}">Web of Science Journals</a></li>
                        <li><a class="dropdown-item" href="{{ route('q1-journal') }}">Q1 Journal</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">Resources <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('blog') }}">Blog</a></li>
                        <li><a class="dropdown-item" href="{{ route('faqs') }}">FAQ</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link text-white" href="{{ route('coursework-assistance') }}">Coursework Assistance</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('about') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('contact') }}">Contact</a></li>

                <!-- Mobile only: Get Assistance inside the menu -->
                <li class="nav-item mobile-assist-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#assistanceModal">Get Assistance</a>
                </li>
            </ul>
        </div>
    </div>
</nav>