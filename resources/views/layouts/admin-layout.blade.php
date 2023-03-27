<!DOCTYPE html>
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default"
      data-assets-path="{{ asset('') }}assets/" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>@yield('title') - {{ config('app.name') }}</title>


    <meta name="description" content=""/>
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
          href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-advance.css') }}"/>
    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body>

<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
</noscript>

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">

        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

            <div class="app-brand demo">
                <a href="/admin" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <img src="{{ asset('assets/img/logo/uhst-logo.png') }}" width="25" height="25" alt="">
                    </span>
                    <span class="app-brand-text demo menu-text fw-bold">Admin {{ config('app.name') }}</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                    <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                    <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item dashboard-main-nav">
                    <a href="{{ route('dashboard') }}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-dashboard"></i>
                        <div data-i18n="Dashboard">Dashboard</div>
                    </a>
                </li>
                <!-- About Us -->
                <li class="menu-item about-main-nav">
                    <a href="" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-info-circle"></i>
                        <div data-i18n="About Us">About Us</div>
                        <div class="badge bg-label-primary rounded-pill ms-auto">5</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item history-sub-nav">
                            <a href="{{ route('about-us.history') }}" class="menu-link">
                                <div data-i18n="History">History</div>
                            </a>
                        </li>
                        <li class="menu-item mission-vision-sub-nav">
                            <a href="{{ (route('about-us.mission-vision')) }}" class="menu-link">
                                <div data-i18n="Mission & Vision">Mission & Vision</div>
                            </a>
                        </li>
                        <li class="menu-item president-message-sub-nav">
                            <a href="{{ (route('about-us.president-message')) }}" class="menu-link">
                                <div data-i18n="President Message">President Message</div>
                            </a>
                        </li>
                        <li class="menu-item management-team-sub-nav">
                            <a href="{{ (route('about-us.management-team')) }}" class="menu-link">
                                <div data-i18n="Management Team">Management Team</div>
                            </a>
                        </li>
                        <li class="menu-item partner-team-sub-nav">
                            <a href="{{ (route('about-us.partner')) }}" class="menu-link">
                                <div data-i18n="Partner">Partner</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- faculties -->
                <li class="menu-item faculties-main-nav">
                    <a href="" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-building-skyscraper"></i>
                        <div data-i18n="Faculties">Faculties</div>
                        <div class="badge bg-label-primary rounded-pill ms-auto">6</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item agriculture-sub-nav">
                            <a href="{{ route('faculties.agriculture') }}" class="menu-link">
                                <div data-i18n="Faculty of Agriculture">Faculty of Agriculture</div>
                            </a>
                        </li>
                        <li class="menu-item engineering-sub-nav">
                            <a href="{{ route('faculties.engineering') }}" class="menu-link">
                                <div data-i18n="Faculty of Engineering">Faculty of Engineering</div>
                            </a>
                        </li>
                        <li class="menu-item literature-anthropology-sub-nav">
                            <a href="{{ route('faculties.literature-anthropology') }}" class="menu-link">
                                <div data-i18n="Faculty of Literature and Anthropology">Faculty of Literature and Anthropology</div>
                            </a>
                        </li>
                        <li class="menu-item foreign-languages-sub-nav">
                            <a href="{{ route('faculties.foreign-languages') }}" class="menu-link">
                                <div data-i18n="Institute of Foreign Languages">Institute of Foreign Languages</div>
                            </a>
                        </li>
                        <li class="menu-item information-technology-sub-nav">
                            <a href="{{ route('faculties.information-technology') }}" class="menu-link">
                                <div data-i18n="Institute of Information Technology">Institute of Information Technology</div>
                            </a>
                        </li>
                        <li class="menu-item technical-vocational-training-sub-nav">
                            <a href="{{ route('faculties.technical-vocational-training') }}" class="menu-link">
                                <div data-i18n="Institute of Technical and Vocational Training">Institute of Technical and Vocational Training</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Study -->
                <li class="menu-item study-main-nav">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-notebook"></i>
                        <div data-i18n="Study">Study</div>
                        <div class="badge bg-label-primary rounded-pill ms-auto">6</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item admission-sub-nav">
                            <a href="{{ route('study.admission') }}" class="menu-link">
                                <div data-i18n="Admission">Admission</div>
                            </a>
                        </li>
                        <li class="menu-item scholarship-sub-nav">
                            <a href="{{ route('study.scholarship') }}" class="menu-link">
                                <div data-i18n="Scholarship">Scholarship</div>
                            </a>
                        </li>
                        <li class="menu-item associative-programs-sub-nav">
                            <a href="{{ route('study.associative-programs') }}" class="menu-link">
                                <div data-i18n="Associative Programs">Associative Programs</div>
                            </a>
                        </li>
                        <li class="menu-item bachelors-programs-sub-nav">
                            <a href="{{ route('study.bachelors-programs') }}" class="menu-link">
                                <div data-i18n="Bachelor’s Programs">Bachelor’s Programs</div>
                            </a>
                        </li>
                        <li class="menu-item masters-programs-sub-nav">
                            <a href="{{ route('study.masters-programs') }}" class="menu-link">
                                <div data-i18n="Master’s Programs">Master’s Programs</div>
                            </a>
                        </li>
                        <li class="menu-item short-courses-sub-nav">
                            <a href="{{ route('study.short-courses') }}" class="menu-link">
                                <div data-i18n="Short Courses">Short Courses</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Research & Innovation -->
                <li class="menu-item research-innovation-main-nav">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-search"></i>
                        <div data-i18n="Research">Research</div>
                        <div class="badge bg-label-primary rounded-pill ms-auto">5</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item projects-sub-nav">
                            <a href="{{ route('research-innovation.projects') }}" class="menu-link">
                                <div data-i18n="Projects">Projects</div>
                            </a>
                        </li>
                        <li class="menu-item publications-sub-nav">
                            <a href="{{ route('research-innovation.publications') }}" class="menu-link">
                                <div data-i18n="Publications">Publications</div>
                            </a>
                        </li>
                        <li class="menu-item books-sub-nav">
                            <a href="{{ route('research-innovation.books') }}" class="menu-link">
                                <div data-i18n="Books">Books</div>
                            </a>
                        </li>
                        <li class="menu-item training-workshop-sub-nav">
                            <a href="{{ route('research-innovation.training-workshop') }}" class="menu-link">
                                <div data-i18n="Training & Workshop">Training & Workshop</div>
                            </a>
                        </li>
                        <li class="menu-item conferences-sub-nav">
                            <a href="{{ route('research-innovation.conferences') }}" class="menu-link">
                                <div data-i18n="Conferences">Conferences</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Location -->
                <li class="menu-item location-main-nav">
                    <a href="{{ route('location') }}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-location"></i>
                        <div data-i18n="Location">Location</div>
                    </a>
                </li>
                <!-- Contact -->
                <li class="menu-item contact-main-nav">
                    <a href="{{ route('contact') }}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-address-book"></i>
                        <div data-i18n="Contact">Contact</div>
                    </a>
                </li>
                <!-- News & Activities -->
                <li class="menu-item news-activities-main-nav">
                    <a href="{{ route('news-activities') }}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-news"></i>
                        <div data-i18n="News & Activities">News & Activities</div>
                    </a>
                </li>
                <!-- Careers -->
                <li class="menu-item careers-main-nav">
                    <a href="{{ route('careers') }}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-building-bank"></i>
                        <div data-i18n="Careers">Careers</div>
                    </a>
                </li>
            </ul>

        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

            <!-- Navbar -->

            <nav
                class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="ti ti-menu-2 ti-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item navbar-search-wrapper mb-0">
                            <a class="nav-item nav-link search-toggler d-flex align-items-center px-0"
                               href="javascript:void(0);">
                                <i class="ti ti-search ti-md me-2"></i>
                                <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                            </a>
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">

                        <!-- Language -->
                        <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                               data-bs-toggle="dropdown">
                                <i class='fi fi-us fis rounded-circle me-1 fs-3'></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                                        <i class="fi fi-us fis rounded-circle me-1 fs-3"></i>
                                        <span class="align-middle">English</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="kh">
                                        <i class="fi fi-kh fis rounded-circle me-1 fs-3"></i>
                                        <span class="align-middle">Khmer</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Language -->

                        <!-- Style Switcher -->
                        <li class="nav-item me-2 me-xl-0">
                            <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                                <i class='ti ti-md'></i>
                            </a>
                        </li>
                        <!--/ Style Switcher -->

                        <!-- Notification -->
                        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                               data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="ti ti-bell ti-md"></i>
                                <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end py-0">
                                <li class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h5 class="text-body mb-0 me-auto">Notification</h5>
                                        <a href="javascript:void(0)" class="dropdown-notifications-all text-body"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i
                                                class="ti ti-mail-opened fs-4"></i></a>
                                    </div>
                                </li>
                                <li class="dropdown-notifications-list scrollable-container">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                                             class="h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                                    <p class="mb-0">Won the monthly best seller gold badge</p>
                                                    <small class="text-muted">1h ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                       class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                            class="ti ti-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span
                                                            class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Charles Franklin</h6>
                                                    <p class="mb-0">Accepted your connection</p>
                                                    <small class="text-muted">12hr ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                       class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                            class="ti ti-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-menu-footer border-top">
                                    <a href="javascript:void(0);"
                                       class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">
                                        View all notifications
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Notification -->

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                               data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="h-auto rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-account.html">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                                         class="h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block">John Doe</span>
                                                <small class="text-muted">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-profile-user.html">
                                        <i class="ti ti-user-check me-2 ti-sm"></i>
                                        <span class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-account.html">
                                        <i class="ti ti-settings me-2 ti-sm"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-billing.html">
                                      <span class="d-flex align-items-center align-middle">
                                        <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                                        <span class="flex-grow-1 align-middle">Billing</span>
                                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">2</span>
                                      </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-help-center-landing.html">
                                        <i class="ti ti-lifebuoy me-2 ti-sm"></i>
                                        <span class="align-middle">Help</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-faq.html">
                                        <i class="ti ti-help me-2 ti-sm"></i>
                                        <span class="align-middle">FAQ</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-pricing.html">
                                        <i class="ti ti-currency-dollar me-2 ti-sm"></i>
                                        <span class="align-middle">Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                                        <i class="ti ti-logout me-2 ti-sm"></i>
                                        <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->

                    </ul>
                </div>

                <!-- Search Small Screens -->
                <div class="navbar-search-wrapper search-input-wrapper d-none">
                    <input type="text" class="form-control search-input container-fluid border-0" placeholder="Search..." aria-label="Search...">
                    <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
                </div>

            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">

                @yield('content')

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-fluid">
                        <div
                            class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                            <div>
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                , made with ❤️ by UHST
                            </div>
                            <div>
                                <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>

<script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
<script src="{{ asset('assets/js/app-user-list.js') }}"></script>
@yield('script')
</body>
</html>

<!-- beautify ignore:end -->
