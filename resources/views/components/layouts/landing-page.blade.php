<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <!-- Primary meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ ucwords(config('app.name')) }} - AI Trading Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="description"
        content="Trade 700&#x2B; instruments including stocks and ETFs. Get up to 1:300 leverage, 0% commission, and start risk-free with a free demo account." />
    <meta name="keywords"
        content="Trade US Stocks, Global Stocks Trading, 24/5 Stock Trading, Zero Commission Trading, Free Trading Bonus, Short Selling Stocks, Online Stock Trading, Invest in US Stocks, Trade Global Markets, Stock Investment, Index Trading, Trading App, Equity Trading, Stocks, ETFs, Invest, Trade" />
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://{{ config('app.name') }}.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description"
        content="Trade 700&#x2B; instruments including stocks and ETFs. Get up to 1:300 leverage, 0% commission, and start risk-free with a free demo account.">
    <meta property="og:image" content="https://cdn.{{ config('app.name') }}.com/website/images/AppPreviewIcon.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="https://{{ config('app.name') }}.com/">
    <meta property="twitter:url" content="https://{{ config('app.name') }}.com/">
    <meta name="twitter:title" content="{{ config('app.name') }}">
    <meta name="twitter:description"
        content="Trade 700&#x2B; instruments including stocks and ETFs. Get up to 1:300 leverage, 0% commission, and start risk-free with a free demo account.">

    <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'locale',
            'locale': 'Client Country: CY &#xA;Client Language: en &#xA;IP Country: CY &#xA;IP Language: en &#xA;',
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", async () => {

            const titlesResponse = await fetch('https://50k.trade/Index?handler=StickyButtonTitlesTexts', {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            const subtitleResponse = await fetch('https://50k.trade/Index?handler=StickyButtonSubtitlesTexts', {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            const buttonTitlesTexts = await titlesResponse.json();
            const buttonSubTitlesTexts = await subtitleResponse.json();
            console.log(buttonTitlesTexts);
            console.log(buttonSubTitlesTexts);

            const buttonTitle = document.querySelector(".trade-money-text-title");
            const buttonSubTitle = document.querySelector(".deposit-text");
            const textsContainer = document.querySelector(".sticky-slide");

            let currentIndex = 0;

            // function animateText() {
            //     textsContainer.classList.remove("active");
            //     textsContainer.classList.add("slide-down-exit");

            //     setTimeout(() => {
            //         currentIndex = (currentIndex + 1) % buttonTitlesTexts.length;
            //         buttonTitle.textContent = buttonTitlesTexts[currentIndex];
            //         buttonSubTitle.textContent = buttonSubTitlesTexts[currentIndex];
            //         textsContainer.classList.remove("slide-down-exit");
            //         textsContainer.classList.add("slide-down-enter");

            //         setTimeout(() => {
            //             textsContainer.classList.remove("slide-down-enter");
            //             textsContainer.classList.add("active");
            //         }, 50);
            //     }, 500);
            // }

            // buttonTitle.textContent = buttonTitlesTexts[currentIndex];
            // buttonSubTitle.textContent = buttonSubTitlesTexts[currentIndex];
            // textsContainer.classList.add("active");
            // setInterval(animateText, 3500);

        });
    </script>

    <!-- Pre-Connects -->


    <link
      href="/images/favicon.png"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <link
      href="/images/favicon.png"
      rel="apple-touch-icon"
    />

    <!-- Fonts -->
    <link rel="stylesheet"
        href="/homepage/assets/dist/core.a011f950cd09d011595f.min%EF%B9%96v=Oip6JH82vP1I9t3JtexHFb8RnuydazzE3Bv0IMbQY_U.css" />


    <link href="/homepage/assets/styles/reward-sticky-button.css" rel="stylesheet">

    <link rel="stylesheet"
        href="/homepage/assets/dist/invest.f65bcb74c8fede431512.min%EF%B9%96v=jc98CmwIHq-zri0Z4BQtDxrITQorrpf3C-m3MkUblt4.css" />
    <link rel="stylesheet"
        href="/homepage/assets/dist/main.20664f4fd99f97e0eba1.min%EF%B9%96v=H84c22m3tItbPAEwpCKhyOAQYTGTQ68HGMra4tt-K9I.css" />

    @if (request()->routeIs('faq'))
      <link rel="stylesheet"
          href="/homepage/assets/css/InvestFAQ﹖v=fQtkcU54KMvhFvhPI0oK4kYBoX8oIUpBeh_JANK5GTU.css" />
    @endif

        <style>
            .mobileContainer__wdSTq.__tablet__dIlXn {
                width:100% !important;
            }
        </style>


    <script defer
        src="/homepage/assets/dist/core.634134864c709b2c3486.min%EF%B9%96v=v40E5k3MFHwJdzlABPjeySsACeeNqW5uyn7ECkuZ0A0.js"></script>
    @vite(
        [
            'resources/css/app.css',
            'resources/css/custom.css',
            'resources/js/app.js'
        ])

      @livewireStyles

</head>

<body class="main">
<header class="risk-bg">
    {{-- <div b-hri9lm5c95 class="risk-container">
        <script>
            window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'error_popup',
                    'message': 'Unfortunately, {{ config('mail.APP_NAME') }} is not available in your region. Please note that {{ config('mail.APP_NAME') }} does not provide services to U.S. persons.',
                    'locale': 'Client Country: CY &#xA;Client Language: en &#xA;IP Country: CY &#xA;IP Language: en &#xA;'
                });
        </script>
        <div b-hri9lm5c95 class="country-support-row">
            <p b-hri9lm5c95 class="risk-text">Unfortunately, {{ config('mail.APP_NAME') }} is not available in your region. Please note that
                {{ config('mail.APP_NAME') }} does not provide services to U.S. persons.</p>
        </div>
    </div>--}}
    <nav b-hri9lm5c95 style="padding-top:10px;">
        <div b-hri9lm5c95 id="top" class="wrapper">
            <div b-hri9lm5c95 class="row-items">
                <div b-hri9lm5c95 class="invest-logo !w-auto">
                    <a b-hri9lm5c95 href="/">
                        <div b-hri9lm5c95 style="display: flex; align-items: center; gap: 10px; font-size: 24px; font-weight: bold;">
                            {{-- <img
                                src="/homepage/assets/img/logo.png" loading="eager"
                                alt="{{ config('mail.APP_NAME') }} logo, the platform for crypto trading and automated bots."
                                class="image-31 !w-[150px]" /> --}}
                            <img src="/images/aotexailogo.png" loading="eager"
                                alt="{{ config('mail.APP_NAME') }} logo, the platform for crypto trading and automated bots." style="width: 40px" alt="">
                            <span>AOTEXAI</span>

                        </div>
                    </a>
                </div>
            </div>
            <input b-hri9lm5c95 type="radio" name="slider" id="menu-btn"
                oninput="document.body.style.overflowY = 'hidden'">
            <input b-hri9lm5c95 type="radio" name="slider" id="close-btn"
                oninput="document.body.style.overflowY = 'visible'">

            <ul b-hri9lm5c95 class="nav-links item-center flex flex-row">
                <label b-hri9lm5c95 for="close-btn" class="btn close-btn">
                    <svg b-hri9lm5c95 b-hri9lm5c95="" class="svg-inline--fa fa-xmark" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="xmark" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                        <path b-hri9lm5c95 fill="currentColor"
                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z">
                        </path>
                    </svg>
                </label>
                <li b-hri9lm5c95>
                    <a b-hri9lm5c95 id="invest-link" href="/">Home</a>
                </li>
                <li b-hri9lm5c95>
                    <a b-hri9lm5c95 class="" id="market-radar-link" href="/faq">
                       FAQ's
                    </a>
                </li>
                {{-- <li b-hri9lm5c95>
                    <a b-hri9lm5c95 href="#" class="desktop-item">Academy</a>
                    <input b-hri9lm5c95 type="checkbox" id="showDrop2">
                    <label b-hri9lm5c95 for="showDrop2" class="mobile-item">Academy</label>
                    <ul b-hri9lm5c95 class="drop-menu">
                        <li b-hri9lm5c95>
                            <a b-hri9lm5c95 href="Articles.html">Articles</a>
                        </li>
                        <li b-hri9lm5c95>
                            <a b-hri9lm5c95 href="FAQ.html">FAQ</a>
                        </li>
                    </ul>
                </li>
                <li b-hri9lm5c95>
                    <a b-hri9lm5c95 href="#" class="desktop-item">Company</a>
                    <input b-hri9lm5c95 type="checkbox" id="showDrop3">
                    <label b-hri9lm5c95 for="showDrop3" class="mobile-item">Company</label>
                    <ul b-hri9lm5c95 class="drop-menu">
                        <li b-hri9lm5c95>
                            <a b-hri9lm5c95 href="About.html"> About</a>
                        </li>
                        <li b-hri9lm5c95>
                            <a b-hri9lm5c95 href="Fees.html"> Commissions</a>
                        </li>
                        <li b-hri9lm5c95>
                            <a b-hri9lm5c95 href="Legal.html"> Legal</a>
                        </li>
                        <li b-hri9lm5c95>
                            <a b-hri9lm5c95 href="ContactUs.html"> Contact Us</a>
                        </li>
                    </ul>
                </li> --}}
                <li b-hri9lm5c95>
                   <div class="lg:flex ml-3 hidden">
                        <div class="gtranslate_wrapper"></div>
                    </div>
                </li>
                <li b-hri9lm5c95>
                    <a b-hri9lm5c95 href="{{ route('login') }}" class="mid-type-button store_link_button !w-auto">Login</a>
                </li>
                <li b-hri9lm5c95 class="lg:!ml-3">
                    <a b-hri9lm5c95 href="{{ route('register') }}" class="mid-type-button store_link_button !w-auto">Sign Up</a>
                </li>
            </ul>

            <label for="" class="lg:hidden block">
                <div class="flex ml-3">
                        <div class="gtranslate_wrapper d-lg-none d-sm-block"></div>
                </div>
            </label>
            <label b-hri9lm5c95 for="menu-btn" class="btn menu-btn ">
                <svg b-hri9lm5c95 b-hri9lm5c95="" class="svg-inline--fa fa-bars" aria-hidden="true" focusable="false"
                    data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512" data-fa-i2svg="">
                    <path b-hri9lm5c95 fill="currentColor"
                        d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z">
                    </path>
                </svg>
            </label>
        </div>
    </nav>
</header>

    <main b-hri9lm5c95 role="main" class="pb-3" dir="ltr">
      {{ $slot }}
    </main>

    <!-- Sticky button -->
    <div b-hri9lm5c95 class="reward-sticky-button-container">
        <div b-hri9lm5c95 class="reward-sticky-button-background"></div>
        <div b-hri9lm5c95 class="reward-sticky-button-wrapper">
            <a href="{{ route('register') }}" class="get-app-sticky-button store_link_button">
                <span b-hri9lm5c95 class="get-app-text !text-white">Start Trading</span>
            </a>
        </div>
    </div>

    <footer b-hri9lm5c95 class="footer-container-fluid  ">
        <div b-hri9lm5c95 class="footer-container">
            <div b-hri9lm5c95 class="footer-columns">
                <div b-hri9lm5c95 class="footer-column4">
                    <div b-hri9lm5c95>
                        <a b-hri9lm5c95 href="/" style="display: flex; align-items: center; gap: 10px; font-size: 24px; font-weight: bold;">

                             <img src="/images/aotexailogo.png" loading="eager"
                                    alt="{{ config('mail.APP_NAME') }} logo, the platform for crypto trading and automated bots." style="width: 40px" alt="">
                                <span>AOTEXAI</span>
                        </a>
                    </div>
                    {{-- <div b-hri9lm5c95 class="network-div">
                        <a b-hri9lm5c95 href="https://www.instagram.com/50k_trade" target="_blank">
                            <img b-hri9lm5c95 class="network-icon"
                                src="https://cdn.50k.trade/website/icons/instagram-icon-v2.svg" alt="instagram Icon"
                                loading="lazy" />
                        </a>
                        <a b-hri9lm5c95 href="https://www.tiktok.com/@50k_trade" target="_blank">
                            <img b-hri9lm5c95 class="network-icon" src="https://cdn.50k.trade/website/icons/tiktok.svg"
                                alt="Tiktok Icon" loading="lazy" />
                        </a>
                        <a b-hri9lm5c95 href="https://x.com/50K_trade" target="_blank">
                            <img b-hri9lm5c95 class="network-icon" src="https://cdn.50k.trade/website/icons/X.svg"
                                alt="X Icon" loading="lazy" />
                        </a>
                    </div>
                    <div b-hri9lm5c95 class="network-div">
                        <a b-hri9lm5c95 href="https://www.facebook.com/50K.TRADE" target="_blank">
                            <img b-hri9lm5c95 class="network-icon"
                                src="https://cdn.50k.trade/website/icons/facebook-icon-v2.svg" alt="Facebook Icon"
                                loading="lazy" />
                        </a>
                        <a b-hri9lm5c95 href="https://youtube.com/@50k_trade?si=BYbirkEAyO9VTDq_" target="_blank">
                            <img b-hri9lm5c95 class="network-icon"
                                src="https://cdn.50k.trade/website/icons/youtube-icon-v2.svg" alt="Youtube Icon"
                                loading="lazy" />
                        </a>
                    </div> --}}
                    <div b-hri9lm5c95 class="social-icons !gap-3">
                        <a b-hri9lm5c95 href="/aoitexaiapp.apk" class="store_link_button !mt-3">
                            <img b-hri9lm5c95 class="social-icon !p-0" src="/images/google.PNG"
                                alt="Appstore" loading="lazy" />
                        </a>
                        <a b-hri9lm5c95 href="#" class="store_link_button bg-[#08190c] rounded-lg">
                            <img b-hri9lm5c95 class="social-icon" src="/images/apple.svg"
                                alt="Google Play" loading="lazy" />
                        </a>
                    </div>
                </div>
            </div>
            <div b-hri9lm5c95 class="space"></div>

            <div b-hri9lm5c95 class="footer-pages-container">
                <ul b-hri9lm5c95 class="footer-column2">
                    <li b-hri9lm5c95 class="footer-headline">Account</li>
                    <li b-hri9lm5c95 class="footer-sub">
                        <a b-hri9lm5c95 class="footer-sub" href="{{ route('login') }}">Login</a>
                    </li>
                    <li b-hri9lm5c95 class="footer-sub">
                        <a b-hri9lm5c95 class="footer-sub" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
                <ul b-hri9lm5c95 class="footer-column3">
                    <li b-hri9lm5c95 class="footer-headline">Company</li>
                    <li b-hri9lm5c95 class="footer-sub">
                        <a b-hri9lm5c95 class="footer-sub" href="/terms">Terms</a>
                    </li>
                    <li b-hri9lm5c95 class="footer-sub">
                        <a b-hri9lm5c95 class="footer-sub" href="/faq">FAQ</a>
                    </li>
                    <li b-hri9lm5c95 class="footer-sub">
                        <a b-hri9lm5c95 class="footer-sub" href="/privacy">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
        <p b-hri9lm5c95 class="disclaimer-text">
            {{ config('mail.APP_NAME') }} (BMAW) </br>
            150 Frazer hills Street, </br>
            1150 Vishon,  </br>
            Austria. </br>
            support{{'@'}}{{ config('mail.APP_NAME') }}.com </br>
            Chamber of Commerce number: 8875422

        </p>

        <p b-hri9lm5c95 class="rights">
            Copyright © 2025 {{ config('mail.APP_NAME') }}, All rights reserved.
        </p>

        <div b-hri9lm5c95 class="space-400"></div>
    </footer>

    <!-- Floating Chat Widget -->
    <div class="fixed bottom-20 w-[90%] lg:w-[30%] h-auto right-4 flex flex-col items-end space-y-2 z-[11111]" x-data="{ chatOpen: false }" x-cloak>

        <!-- Chat Modal -->
        <div
            x-show="chatOpen"
            x-transition
            class="mb-2 w-full h-[80vh] bg-white shadow-xl rounded-lg overflow-hidden border border-gray-300"
        >
            <iframe
                src="https://tawk.to/chat/68f58872abd1d819558fbc48/1j7vhq0gt"
                class="w-full h-full"
                frameborder="0"
            ></iframe>
            {{-- <iframe
                src="https://tawk.to/chat/6894b3e3bd3585192d5d29c3/1j22gu7pt"
                class="w-full h-full"
                frameborder="0"
            ></iframe> --}}
        </div>

        <!-- Floating Button -->
        <button
            @click="chatOpen = !chatOpen"
            class="h-14 rounded-full bg-gray-100 flex items-center justify-center shadow-lg hover:bg-gray-200 transition !p-2"
        >
            <img x-show="!chatOpen" src="/images/chaticon.png" class="h-full" alt="">
            <span x-show="!chatOpen" class="text-gray-800 text-xl">Need Help?</span>
            <svg x-show="chatOpen" xmlns="http://www.w3.org/2000/svg" class="h-full text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

    </div>




    <script defer
        src="/homepage/assets/dist/secondary.28d5bf7798502e2400fc.min%EF%B9%96v=1Gq5_6Ee2EabD_d5_bgS_sm5h8Dv2QPZdc_olipFpi4.js"></script>
    <script defer
        src="/homepage/assets/dist/main.afa4a8ee09f77a5b89af.min%EF%B9%96v=2SjfiVr5FJioFQMxO6e1Bz83MWMOv7qGFaXk-dKhIzI.js"></script>
    <script defer
        src="/homepage/assets/dist/sticky-button-script.a4a300f8419e81220867.min%EF%B9%96v=RpaLpAowlmpsDrgZgEHZoviXc5ZzgGr1m-jnzXZhxOw.js"></script>

    {{-- <script>
        const track = document.querySelector('.carousel-track');
        const slides = Array.from(track.children);
        const nextButton = document.querySelectorAll('.carousel-arrow')[1];
        const prevButton = document.querySelectorAll('.carousel-arrow')[0];
        let currentIndex = 0;
        let slidesToShow = 3;

        function checkSlidesToShow() {
            if (window.innerWidth <= 768) {
                slidesToShow = 1;
            } else if (window.innerWidth <= 1080) {
                slidesToShow = 2;
            } else {
                slidesToShow = 3;
            }
        }

        window.addEventListener('resize', () => {
            checkSlidesToShow();
            updateCarousel();
        });

        checkSlidesToShow();

        nextButton.addEventListener('click', () => {
            if (currentIndex < slides.length - slidesToShow) {
                currentIndex++;
                updateCarousel();
            }
        });

        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        function updateCarousel() {
            const slideWidth = slides[0].getBoundingClientRect().width;
            track.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
        }
    </script> --}}
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const track = document.querySelector('.marquee-track');
            const originalItems = Array.from(track.children);

            function duplicateMarqueeItems() {
                let trackWidth = track.scrollWidth;
                const screenWidth = window.innerWidth;

                while (trackWidth < screenWidth * 2) {
                    originalItems.forEach(item => {
                        const clone = item.cloneNode(true);
                        track.appendChild(clone);
                    });
                    trackWidth = track.scrollWidth;
                }
            }

            duplicateMarqueeItems();
        });
    </script>




    <script>window.gtranslateSettings = {"default_language":"en","detect_browser_language":true,"wrapper_selector":".gtranslate_wrapper","flag_size":24,"flag_style":"3d"}</script>
    <script src="https://cdn.gtranslate.net/widgets/latest/popup.js" defer></script>

    <!--End of Tawk.to Script-->
    @livewireScripts
    @stack('scripts')

</body>

</html>
