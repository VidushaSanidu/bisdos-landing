<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
    <!-- Character Encoding -->
    <meta charset="utf-8">

    <!-- Responsive Layout for Mobile -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- Page Title for SEO + Browser Tab -->
    <title>BisDos - Digital Business Card in Sri Lanka | NFC + QR Code Enabled</title>

    <!-- SEO Meta Description (Google snippet) -->
    <meta name="description"
        content="Create your professional one time digital business card with BisDos. NFC + QR code enabled cards for Sri Lankan entrepreneurs, freelancers, and business owners. Free delivery, portfolio link & affordable plans.">

    <!-- SEO Keywords (not very useful today but still included) -->
    <meta name="keywords"
        content="digital business card, create digital business card, NFC business card Sri Lanka, QR code business card, online business card, best digital business card 2024, Sri Lankan entrepreneurs, affordable business card, BisDos Colombo, free delivery digital card, business profile card">

    <!-- Author name -->
    <meta name="author" content="BisDos">

    <!-- ✅ OPEN GRAPH (for Facebook, LinkedIn, Instagram previews) -->
    <meta property="og:type" content="website"> <!-- Defines the type of content -->
    <meta property="og:title" content="BisDos - The Best Digital Business Card in Sri Lanka">
    <!-- Shown as the title in link previews -->
    <meta property="og:description"
        content="Modern, contactless digital business cards with NFC & QR code. Tailored for Sri Lankan professionals. Includes free delivery & personal portfolio.">
    <!-- Link preview description -->
    <meta property="og:image" content="/assets/img/sm-header.png">
    <!-- Full URL to OG image (1200x630px recommended) -->
    <meta property="og:url" content="https://www.bisdos.com"> <!-- Canonical URL of the page -->
    <meta property="og:site_name" content="BisDos"> <!-- Optional - name of the site -->

    <!-- ✅ TWITTER CARD (used when sharing on Twitter/X) -->
    <meta name="twitter:card" content="summary_large_image"> <!-- Tells Twitter to show a big image preview -->
    <meta name="twitter:title" content="BisDos - Best Digital Business Card in Sri Lanka">
    <meta name="twitter:description"
        content="Get your digital business card with NFC & QR code. Designed for Sri Lankan entrepreneurs. Free delivery and premium features.">
    <meta name="twitter:image" content="/assets/img/sm-header.png">

    <!-- ✅ Additional: Mobile & App Icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" href="assets/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/app-icons/icon-180x180.png">
    <link rel="icon" type="image/png" href="assets/app-icons/icon-32x32.png" sizes="32x32">

    {{-- <!-- Theme switcher (color modes) --> --}}
    <script src="assets/js/theme-switcher.js"></script>

    {{-- <!-- Preloaded local web font (Inter) --> --}}
    <link rel="preload" href="assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin="">

    {{-- <!-- Font icons --> --}}
    <link rel="preload" href="assets/icons/cartzilla-icons.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="stylesheet" href="assets/icons/cartzilla-icons.min.css">

    {{-- <!-- Vendor styles --> --}}
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendor/glightbox/glightbox.min.css">

    {{-- <!-- Bootstrap + Theme styles --> --}}
    <link rel="preload" href="assets/css/theme.min.css" as="style">
    <link rel="preload" href="assets/css/theme.rtl.min.css" as="style">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="theme-styles">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <!-- Customizer --> --}}
    <script src="assets/js/customizer.min.js"></script>
</head>

{{-- <!-- Body --> --}}

<body>
    {{-- <!-- Shopping cart offcanvas (Empty state) --> --}}
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1"
        aria-labelledby="shoppingCartLabel" style="width: 500px">
        <div class="offcanvas-header pt-lg-4 py-3">
            <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body text-center">
            <svg class="d-block mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 29.5 30">
                <path class="text-body-tertiary"
                    d="M17.8 4c.4 0 .8-.3.8-.8v-2c0-.4-.3-.8-.8-.8-.4 0-.8.3-.8.8v2c0 .4.3.8.8.8zm3.2.6c.4.2.8 0 1-.4l.4-.9c.2-.4 0-.8-.4-1s-.8 0-1 .4l-.4.9c-.2.4 0 .9.4 1zm-7.5-.4c.2.4.6.6 1 .4s.6-.6.4-1l-.4-.9c-.2-.4-.6-.6-1-.4s-.6.6-.4 1l.4.9z"
                    fill="currentColor"></path>
                <path class="text-body-emphasis"
                    d="M10.7 24.5c-1.5 0-2.8 1.2-2.8 2.8S9.2 30 10.7 30s2.8-1.2 2.8-2.8-1.2-2.7-2.8-2.7zm0 4c-.7 0-1.2-.6-1.2-1.2s.6-1.2 1.2-1.2 1.2.6 1.2 1.2-.5 1.2-1.2 1.2zm11.1-4c-1.5 0-2.8 1.2-2.8 2.8a2.73 2.73 0 0 0 2.8 2.8 2.73 2.73 0 0 0 2.8-2.8c0-1.6-1.3-2.8-2.8-2.8zm0 4c-.7 0-1.2-.6-1.2-1.2s.6-1.2 1.2-1.2 1.2.6 1.2 1.2-.6 1.2-1.2 1.2zM8.7 18h16c.3 0 .6-.2.7-.5l4-10c.2-.5-.2-1-.7-1H9.3c-.4 0-.8.3-.8.8s.4.7.8.7h18.3l-3.4 8.5H9.3L5.5 1C5.4.7 5.1.5 4.8.5h-4c-.5 0-.8.3-.8.7s.3.8.8.8h3.4l3.7 14.6a3.24 3.24 0 0 0-2.3 3.1C5.5 21.5 7 23 8.7 23h16c.4 0 .8-.3.8-.8s-.3-.8-.8-.8h-16a1.79 1.79 0 0 1-1.8-1.8c0-1 .9-1.6 1.8-1.6z"
                    fill="currentColor"></path>
            </svg>
            <h6 class="mb-2">Your shopping cart is currently empty!</h6>
            <p class="fs-sm mb-4">Add item(s) to the cart to proceed with your purchase.</p>
            <button type="button" class="btn btn-dark rounded-pill" data-bs-dismiss="offcanvas"
                aria-label="Close">Continue shopping</button>
        </div>
    </div>

    {{-- <!-- Navigation bar (Page header) --> --}}
    <header class="navbar-sticky sticky-top z-fixed container mt-3 px-2" data-sticky-element="">
        <div class="navbar navbar-expand-lg bg-body rounded-pill mx-1 flex-nowrap ps-0 shadow">
            <div class="position-absolute w-100 h-100 bg-dark rounded-pill d-none d-block-dark start-0 top-0 z-0">
            </div>

            {{-- <!-- Mobile offcanvas menu toggler (Hamburger) --> --}}
            <button type="button" class="navbar-toggler ms-3" data-bs-toggle="offcanvas"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- <!-- Navbar brand (Logo) --> --}}
            <a class="navbar-brand position-relative z-1 ms-sm-5 ms-lg-4 me-sm-0 me-lg-3 me-2 ms-4"
                href="index.html">BisDos</a>

            {{-- <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) --> --}}
            <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
                <div class="offcanvas-header py-3">
                    <h5 class="offcanvas-title" id="navbarNavLabel">Browse Cartzilla</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body py-lg-0 mx-lg-auto pb-4 pt-3">
                    <ul class="navbar-nav position-relative">
                        <li class="nav-item me-lg-n2 me-xl-0">
                            <a class="nav-link fs-sm" href="/">Home</a>
                        </li>
                        <li class="nav-item me-lg-n2 me-xl-0">
                            <a class="nav-link fs-sm" href="/teams">Team Cards</a>
                        </li>
                        <li class="nav-item me-lg-n2 me-xl-0">
                            <a class="nav-link fs-sm" href="/faqs">FAQ</a>
                        </li>
                        <li class="nav-item me-lg-n2 me-xl-0">
                            <a class="nav-link fs-sm" href="/about">About</a>
                        </li>
                        <li class="nav-item me-lg-n2 me-xl-0">
                            <a class="nav-link fs-sm" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>

            {{-- <!-- Button group --> --}}
            <div class="d-flex gap-sm-1 position-relative z-1">
                {{-- <!-- Theme switcher (light/dark/auto) --> --}}
                <div class="dropdown me-1" style="display:none;">
                    <button type="button"
                        class="theme-switcher btn btn-icon btn-outline-secondary fs-lg rounded-circle animate-scale border-0"
                        data-bs-toggle="dropdown" data-bs-display="dynamic" aria-expanded="false"
                        aria-label="Toggle theme (light)">
                        <span class="theme-icon-active d-flex animate-target">
                            <i class="ci-sun"></i>
                        </span>
                    </button>
                    <ul class="dropdown-menu start-50 translate-middle-x"
                        style="--cz-dropdown-min-width: 9rem; --cz-dropdown-spacer: 1rem">
                        <li>
                            <button type="button" class="dropdown-item active" data-bs-theme-value="light"
                                aria-pressed="false">
                                <span class="theme-icon d-flex fs-base me-2">
                                    <i class="ci-sun"></i>
                                </span>
                                <span class="theme-label">Light</span>
                                <i class="item-active-indicator ci-check ms-auto"></i>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item" data-bs-theme-value="dark"
                                aria-pressed="true">
                                <span class="theme-icon d-flex fs-base me-2">
                                    <i class="ci-moon"></i>
                                </span>
                                <span class="theme-label">Dark</span>
                                <i class="item-active-indicator ci-check ms-auto"></i>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item" data-bs-theme-value="auto"
                                aria-pressed="false">
                                <span class="theme-icon d-flex fs-base me-2">
                                    <i class="ci-auto"></i>
                                </span>
                                <span class="theme-label">Auto</span>
                                <i class="item-active-indicator ci-check ms-auto"></i>
                            </button>
                        </li>
                    </ul>
                </div>

                <style>
                    .fs-lg {
                        font-size: 1.5rem !important;
                    }
                </style>
                <div class="dropdown me-1" style="display: none;">
                    <button type="button"
                        class="theme-switcher btn btn-icon btn-outline-secondary fs-lg rounded-circle animate-scale border-0"
                        data-bs-toggle="dropdown" data-bs-display="dynamic" aria-expanded="false"
                        aria-label="Toggle theme (light)">
                        <span class="theme-icon-active d-flex animate-target">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </header>


    {{-- <!-- Page content --> --}}
    <main class="content-wrapper">
        @yield('content')
    </main>


    {{-- <!-- Page footer --> --}}
    <footer class="footer pb-4">
        <div class="pb-sm-2 pb-md-3 container">
            <div class="position-relative pe-lg-3 pe-xxl-0 px-4 py-3">
                <div class="row align-items-center position-relative z-1">
                    <div class="col-lg-4 col-xxl-5 order-lg-2 mb-lg-0 mx-auto mb-2">
                        <p class="fs-xs mb-0 text-center">
                            © All rights reserved. Made by <span class="animate-underline"><a
                                    class="animate-target text-dark-emphasis text-decoration-none"
                                    href="https://www.bisdos.com" target="_blank" rel="noreferrer">BisDos</a></span>
                        </p>
                    </div>
                </div>
                <div class="position-absolute w-100 h-100 d-lg-none start-0 top-0">
                    <span
                        class="position-absolute w-100 h-100 rounded-5 d-none-dark start-0 top-0 bg-white shadow"></span>
                    <span
                        class="position-absolute w-100 h-100 bg-body-tertiary rounded-5 d-none d-block-dark start-0 top-0"></span>
                </div>
                <div class="position-absolute w-100 h-100 d-none d-lg-block start-0 top-0">
                    <span
                        class="position-absolute w-100 h-100 rounded-pill d-none-dark start-0 top-0 bg-white shadow"></span>
                    <span
                        class="position-absolute w-100 h-100 bg-body-tertiary rounded-pill d-none d-block-dark start-0 top-0"></span>
                </div>
            </div>
        </div>
    </footer>


    {{-- <!-- Back to top button --> --}}
    <div class="floating-buttons position-fixed top-50 z-sticky me-xl-4 end-0 me-3 pb-4">
        <a class="btn-scroll-top btn btn-sm bg-body rounded-pill animate-slide-end border-0 shadow" href="#top">
            Top
            <i class="ci-arrow-right fs-base me-n1 animate-target ms-1"></i>
            <span class="position-absolute w-100 h-100 rounded-pill start-0 top-0 z-0 border"></span>
            <svg class="position-absolute w-100 h-100 z-1 start-0 top-0" viewBox="0 0 62 32" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor"
                    stroke-width="1.5" stroke-miterlimit="10"></rect>
            </svg>
        </a>
    </div>

    {{-- <!-- Vendor scripts --> --}}
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/glightbox.min.js"></script>

    {{-- <!-- Bootstrap + Theme scripts --> --}}
    <script src="assets/js/theme.min.js"></script>
</body>

</html>
