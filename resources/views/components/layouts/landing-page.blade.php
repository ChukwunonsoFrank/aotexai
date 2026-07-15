<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cloudspaceaitrading">
    <meta name="description" content="Cloudspaceaitrading is an AI-powered automated trading platform with fast deposits, withdrawals, demo trading, and hands-free trading strategies.">
    <meta name="keywords" content="AI trading, automated trading, trading bot, forex trading, crypto trading, demo account">
    <title>Cloudspaceaitrading - AI Trading Platform</title>

    <link rel="shortcut icon" href="/xtrady/assets/images/logo/favicon.ico">
    <link rel="stylesheet" href="/xtrady/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/xtrady/assets/css/all.min.css">
    <link rel="stylesheet" href="/xtrady/assets/fonts/flaticon_xtrade.css">
    <link rel="stylesheet" href="/xtrady/assets/css/fancybox.css">
    <link rel="stylesheet" href="/xtrady/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/xtrady/assets/css/odometer.css">
    <link rel="stylesheet" href="/xtrady/assets/css/main.css">

    @vite([
        'resources/css/app.css',
        'resources/css/custom.css',
        'resources/js/app.js'
    ])

    <style>
        :root {
            --base: 214 98% 52%;
            --base-two: 145 65% 49%;
        }

        body {
            background: #050608;
        }

        .hero-blue-gradient {
            background:
                radial-gradient(circle at 76% 42%, rgba(55, 122, 247, 0.34) 0%, rgba(21, 71, 159, 0.23) 34%, rgba(4, 11, 28, 0.08) 62%),
                linear-gradient(135deg, #061832 0%, #071a3d 42%, #050b17 100%) !important;
        }

        .navbar-brand {
            align-items: center;
            display: inline-flex;
        }

        .site-logo {
            display: block;
            height: 58px;
            width: auto;
        }

        .offcanvas-title .site-logo {
            height: 46px;
        }

        .gtranslate-shell {
            align-items: center;
            display: flex;
            min-height: 40px;
        }

        .landing-legal .privacy-content p,
        .landing-legal .privacy-content li {
            color: #b8c0cc;
            font-size: 16px;
            line-height: 1.8;
        }

        .landing-legal .privacy-content h3,
        .landing-legal .privacy-content h4 {
            color: #fff;
        }

        .landing-legal .privacy-content a {
            color: hsl(var(--base));
        }

        .btn.btn--base,
        .btn.btn--base-two,
        .btn.btn-outline--base:hover,
        .btn.btn-outline--base:focus {
            color: #07100b !important;
            opacity: 1 !important;
        }

        .wrapper .btn {
            align-items: center !important;
            display: inline-flex !important;
            gap: 8px;
            justify-content: center;
            line-height: 1.1 !important;
            min-height: 44px;
            padding: 12px 24px !important;
            white-space: nowrap;
        }

        .wrapper .navbar-main .btn {
            min-height: 42px;
            padding: 11px 22px !important;
        }

        .wrapper .btn i {
            bottom: auto;
            line-height: 1;
            margin-left: 0;
        }

        .wrapper .btn.btn--base-two,
        .wrapper .btn.btn--base-two:hover,
        .wrapper .btn.btn--base-two:focus {
            background-color: hsl(var(--base)) !important;
            border-color: hsl(var(--base)) !important;
            color: #fff !important;
        }

        .btn.btn-outline--base {
            color: #fff !important;
            opacity: 1 !important;
        }

        .landing-legal .privacy-content ul,
        .landing-legal .privacy-content ol {
            display: grid;
            gap: 10px;
            margin-bottom: 0;
            padding-left: 22px;
        }

        .footer-brand {
            align-items: center;
            display: inline-flex;
            margin-bottom: 20px;
        }

        .footer-item__desc {
            max-width: 420px;
        }

        .mobile-sticky-cta {
            bottom: 18px;
            left: 16px;
            position: fixed;
            right: 16px;
            z-index: 999;
        }

        @media (min-width: 768px) {
            .mobile-sticky-cta {
                display: none;
            }
        }

        @media (max-width: 575px) {
            .site-logo {
                height: 48px;
            }

            .wrapper .btn {
                min-height: 42px;
                padding: 11px 18px !important;
            }
        }
    </style>

    @livewireStyles
</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-main">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}" aria-label="Cloudspaceaitrading home">
                        <img src="/assets/logo.png" alt="Cloudspaceaitrading logo" class="site-logo">
                    </a>

                    <div class="right-nav">
                        <div class="gtranslate-shell d-none d-lg-flex">
                            <div class="gtranslate_wrapper"></div>
                        </div>
                        <a href="{{ route('login') }}" class="btn btn-outline--base d-none d-sm-block">
                            Log In <i class="flaticon-arrow-upper-right"></i>
                        </a>
                        <a href="{{ route('register') }}" class="btn btn--base-two d-none d-sm-block">
                            Sign Up <i class="flaticon-arrow-upper-right"></i>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                            </svg>
                        </button>
                    </div>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                <img src="/assets/logo.png" alt="Cloudspaceaitrading logo" class="site-logo">
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="d-flex d-lg-none gap-3 pt-3 justify-content-center flex-wrap px-3">
                            <div class="gtranslate-shell w-100 justify-content-center">
                                <div class="gtranslate_wrapper"></div>
                            </div>
                            <a href="{{ route('login') }}" class="btn btn-outline--base d-sm-none">
                                Log In <i class="flaticon-arrow-upper-right"></i>
                            </a>
                            <a href="{{ route('register') }}" class="btn btn--base-two d-sm-none">
                                Sign Up <i class="flaticon-arrow-upper-right"></i>
                            </a>
                        </div>
                        <div class="offcanvas-body align-items-center">
                            <ul class="navbar-nav justify-content-center flex-grow-1">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('terms') }}">Terms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('privacy') }}">Privacy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            {{ $slot }}
        </main>

        <div class="mobile-sticky-cta">
            <a href="{{ route('register') }}" class="btn btn--base-two w-100">
                Start Trading <i class="flaticon-arrow-upper-right"></i>
            </a>
        </div>

        <footer class="footer-area">
            <div class="py-120">
                <div class="container position-relative">
                    <div class="row justify-content-center gy-5">
                        <div class="col-xl-4 col-lg-6">
                            <div class="footer-item footer-logo-con pe-xl-5">
                                <a class="footer-brand" href="{{ route('home') }}">
                                    <img src="/assets/logo.png" alt="Cloudspaceaitrading logo" class="site-logo">
                                </a>
                                <p class="footer-item__desc">
                                    AI-powered automated trading with fast deposits, withdrawals, and simple tools for hands-free market participation.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="footer-widget__content">
                                <div class="footer-item">
                                    <h5 class="footer-item__title">Account</h5>
                                    <ul class="footer-menu">
                                        <li class="footer-menu__item">
                                            <a href="{{ route('login') }}" class="footer-menu__link">Login</a>
                                        </li>
                                        <li class="footer-menu__item">
                                            <a href="{{ route('register') }}" class="footer-menu__link">Register</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-item">
                                    <h5 class="footer-item__title">Company</h5>
                                    <ul class="footer-menu">
                                        <li class="footer-menu__item">
                                            <a href="{{ route('faq') }}" class="footer-menu__link">FAQ</a>
                                        </li>
                                        <li class="footer-menu__item">
                                            <a href="{{ route('terms') }}" class="footer-menu__link">Terms</a>
                                        </li>
                                        <li class="footer-menu__item">
                                            <a href="{{ route('privacy') }}" class="footer-menu__link">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-item">
                                    <h5 class="footer-item__title">Contact</h5>
                                    <ul class="footer-contact-menu">
                                        <li class="footer-contact-menu__item">
                                            <div class="footer-contact-menu__item-icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="footer-contact-menu__item-content">
                                                <p>support@cloudspaceaitrading.com</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-footer py-4">
                <div class="container">
                    <div class="row gy-3 align-items-center">
                        <div class="col-md-6 order-1 order-md-0">
                            <div class="bottom-footer-text text-white text-center text-md-start">
                                <a href="{{ route('home') }}">Cloudspaceaitrading</a>
                                &copy; 2026. All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <nav class="d-flex justify-content-md-end gap-4 row-gap-2 justify-content-center flex-wrap">
                                <a href="{{ route('privacy') }}" class="fs-16 text-white">Privacy Policy</a>
                                <a href="{{ route('terms') }}" class="fs-16 text-white">Terms</a>
                                <a href="{{ route('faq') }}" class="fs-16 text-white">FAQ</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="/xtrady/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/xtrady/assets/js/boostrap.bundle.min.js"></script>
    <script src="/xtrady/assets/js/odometer.min.js"></script>
    <script src="/xtrady/assets/js/swiper-bundle.min.js"></script>
    <script src="/xtrady/assets/js/scrollreveal.min.js"></script>
    <script src="/xtrady/assets/js/fancybox.umd.js"></script>
    <script src="/xtrady/assets/js/gsap.min.js"></script>
    <script src="/xtrady/assets/js/ScrollTrigger.js"></script>
    <script src="/xtrady/assets/js/main.js"></script>
    <script>
        window.gtranslateSettings = {
            default_language: "en",
            detect_browser_language: true,
            wrapper_selector: ".gtranslate_wrapper",
            flag_size: 24,
            flag_style: "3d"
        };
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/popup.js" defer></script>

    @livewireScripts
    @stack('scripts')
</body>

</html>
