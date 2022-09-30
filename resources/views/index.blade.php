<!DOCTYPE html>
<html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">



<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="{{ __('index.meta_tags.description') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    {{-- Open Graph meta tags --}}
    <meta property="og:title" content="{{ __('index.meta_tags.title') }}" />
    <meta property="og:image" content="{{ asset('/assets/images/logo.png') }}?br={{ rand(2020200202, 202020) }}" />
    <meta name="robots" content="index,follow" />
    <!--====== Title ======-->
    <title>{{ __('index.meta_tags.title') }}</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}?br={{ rand(2020200202, 202020) }}" />

    <!--====== Livewire css ======-->
    @livewireStyles

    <!--====== Bootstrap css ======-->

    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet"
            href="{{ asset('/assets/css/bootstrap-rtl.min.css') }}?br={{ rand(2020200202, 202020) }}" />
    @else
        <link rel="stylesheet"
            href="{{ asset('/assets/css/bootstrap.min.css') }}?br={{ rand(2020200202, 202020) }}" />
    @endif




    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/lineicons.css') }}?br={{ rand(2020200202, 202020) }}" />

    <!--====== Tiny Slider css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/tiny-slider.css') }}?br={{ rand(2020200202, 202020) }}" />

    <!--====== gLightBox css ======-->
    <link rel="stylesheet"
        href="{{ asset('/assets/css/glightbox.min.css') }}?br={{ rand(2020200202, 202020) }}" />

    <link rel="stylesheet" href="{{ asset('/assets/css/style.en.css') }}?br={{ rand(2020200202, 202020) }}" />

    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('/assets/css/style.ar.css') }}?br={{ rand(2020200202, 202020) }}" />
    @endif
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5Q65KQYSS3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5Q65KQYSS3');
    </script>
    <link rel="stylesheet" href="{{ asset('/assets/css/dark-mode.css') }}?br={{ rand(2020200202, 202020) }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body id="body">

    <!--====== NAVBAR NINE PART START ======-->

    <section class="navbar-area navbar-nine ">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center d-lg-block d-none">
                    <img width="170" class="mx-auto"
                        src="{{ asset('/assets/images/logo.png') }}?br={{ rand(2020200202, 202020) }}"
                        alt="Logo" />
                </div>
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNine" aria-controls="navbarNine" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img width="170" class="d-block d-lg-none"
                                src="{{ asset('/assets/images/logo.png') }}?br={{ rand(2020200202, 202020) }}"
                                alt="Logo" />
                        </a>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="page-scroll active" href="#hero-area">{{ __('index.navbar.home') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll" href="#About-us">{{ __('index.navbar.about') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll" href="#services">{{ __('index.navbar.services') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll" href="#pricing">{{ __('index.navbar.pricing') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#contact">{{ __('index.navbar.contact') }}</a>
                                </li>
                            </ul>
                        </div>



                        <div class=" d-flex light-rounded-buttons">
                            <a href="{{ route('language', ['locale' => app()->getLocale() == 'en' ? 'ar' : 'en']) }}"
                                class="btn btn-sm primary-btn-outline me-2 ">
                                @if (app()->getLocale() == 'en')
                                    ع
                                @else
                                    en
                                @endif
                            </a>
                            <label for="darkModeSwitcher" class="btn btn-sm primary-btn-outline ">
                                <input id="darkModeSwitcher" onclick="darkModeSwitcher()" style="display:none"
                                    class="form-check-input" type="checkbox">
                                <div id="light-icon" style="display: none" class="mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-brightness-high" viewBox="0 0 16 16">
                                        <path
                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                    </svg>
                                </div>
                                <div id="dark-icon" style="display: none" class="mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-moon" viewBox="0 0 16 16">
                                        <path
                                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                                    </svg>
                                </div>
                            </label>
                        </div>
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!--====== NAVBAR NINE PART ENDS ======-->
    >

    <!-- Start header Area -->
    <section id="hero-area" class="header-area header-eight">
        <div class="container">
            <div class="row align-items-center py-4" style="overflow: hidden">
                <div data-aos="fade-right" class="col-lg-6 col-md-12 col-12 order-1 ">
                    <div class="header-content text-center">
                        <h1>{{ __('index.hero.title') }}</h1>
                        <div class="header-image  d-block d-sm-none">
                            <img src="{{ asset('/assets/images/hero.jpg') }}?br={{ rand(2020200202, 202020) }}"
                                alt="#" />
                        </div>

                        <p>
                            <b>
                                {{ __('index.hero.desc') }}</b>
                        </p>
                        <div class="button">
                            <a href="#call-action" class="btn primary-btn">{{ __('index.common.get_started') }}</a>

                        </div>
                    </div>
                </div>
                <div data-aos="fade-left" class="col-lg-6 col-md-12 col-12 order-2 ">

                    <div class="header-image  d-none d-md-block d-sm-block">
                        <img src="{{ asset('/assets/images/hero.jpg') }}?br={{ rand(2020200202, 202020) }}"
                            alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End header Area -->

    <section id="call-action" class="call-action">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 py-4" style="overflow: hidden">
                    <div class="inner-content text-center" data-aos="zoom-in">
                        <h2>{{ __('index.common.join_telegram') }}</h2>
                        <p>{{ __('index.meta_tags.description') }}</p>
                        <div class="light-rounded-buttons">
                            <a href="#contact"
                                class="btn primary-btn-outline">{{ __('index.common.get_started') }}</a>
                            <a href="https://t.me/crypto_rcc" target="_blank"
                                class="btn primary-btn-outline">{{ __('index.common.join_free_channel') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== ABOUT FIVE PART START ======-->
    <section class="about-area about-five" id="About-us">
        <div class="container">
            <div class="row align-items-center py-4" style="overflow: hidden">
                <div data-aos="fade-right" class="col-lg-6 col-12">
                    <div class="about-image-five">
                        <svg class="shape" width="106" height="134" viewBox="0 0 106 134" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="1.66654" cy="1.66679" r="1.66667" fill="#DADADA" />
                            <circle cx="1.66654" cy="16.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="1.66654" cy="31.0001" r="1.66667" fill="#DADADA" />
                            <circle cx="1.66654" cy="45.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="1.66654" cy="60.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="1.66654" cy="88.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="1.66654" cy="117.667" r="1.66667" fill="#DADADA" />
                            <circle cx="1.66654" cy="74.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="1.66654" cy="103" r="1.66667" fill="#DADADA" />
                            <circle cx="1.66654" cy="132" r="1.66667" fill="#DADADA" />
                            <circle cx="16.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                            <circle cx="16.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="16.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                            <circle cx="16.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="16.333" cy="60.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="16.333" cy="88.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="16.333" cy="117.667" r="1.66667" fill="#DADADA" />
                            <circle cx="16.333" cy="74.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="16.333" cy="103" r="1.66667" fill="#DADADA" />
                            <circle cx="16.333" cy="132" r="1.66667" fill="#DADADA" />
                            <circle cx="30.9998" cy="1.66679" r="1.66667" fill="#DADADA" />
                            <circle cx="74.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
                            <circle cx="30.9998" cy="16.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="74.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="30.9998" cy="31.0001" r="1.66667" fill="#DADADA" />
                            <circle cx="74.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
                            <circle cx="30.9998" cy="45.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="74.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="31" cy="60.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="74.6668" cy="60.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="31" cy="88.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="74.6668" cy="88.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="31" cy="117.667" r="1.66667" fill="#DADADA" />
                            <circle cx="74.6668" cy="117.667" r="1.66667" fill="#DADADA" />
                            <circle cx="31" cy="74.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="74.6668" cy="74.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="31" cy="103" r="1.66667" fill="#DADADA" />
                            <circle cx="74.6668" cy="103" r="1.66667" fill="#DADADA" />
                            <circle cx="31" cy="132" r="1.66667" fill="#DADADA" />
                            <circle cx="74.6668" cy="132" r="1.66667" fill="#DADADA" />
                            <circle cx="45.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
                            <circle cx="89.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                            <circle cx="45.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="89.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="45.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
                            <circle cx="89.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                            <circle cx="45.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="89.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="45.6665" cy="60.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="89.3333" cy="60.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="45.6665" cy="88.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="89.3333" cy="88.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="45.6665" cy="117.667" r="1.66667" fill="#DADADA" />
                            <circle cx="89.3333" cy="117.667" r="1.66667" fill="#DADADA" />
                            <circle cx="45.6665" cy="74.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="89.3333" cy="74.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="45.6665" cy="103" r="1.66667" fill="#DADADA" />
                            <circle cx="89.3333" cy="103" r="1.66667" fill="#DADADA" />
                            <circle cx="45.6665" cy="132" r="1.66667" fill="#DADADA" />
                            <circle cx="89.3333" cy="132" r="1.66667" fill="#DADADA" />
                            <circle cx="60.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                            <circle cx="104" cy="1.66679" r="1.66667" fill="#DADADA" />
                            <circle cx="60.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="104" cy="16.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="60.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                            <circle cx="104" cy="31.0001" r="1.66667" fill="#DADADA" />
                            <circle cx="60.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="104" cy="45.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="60.333" cy="60.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="104" cy="60.3335" r="1.66667" fill="#DADADA" />
                            <circle cx="60.333" cy="88.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="104" cy="88.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="60.333" cy="117.667" r="1.66667" fill="#DADADA" />
                            <circle cx="104" cy="117.667" r="1.66667" fill="#DADADA" />
                            <circle cx="60.333" cy="74.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="104" cy="74.6668" r="1.66667" fill="#DADADA" />
                            <circle cx="60.333" cy="103" r="1.66667" fill="#DADADA" />
                            <circle cx="104" cy="103" r="1.66667" fill="#DADADA" />
                            <circle cx="60.333" cy="132" r="1.66667" fill="#DADADA" />
                            <circle cx="104" cy="132" r="1.66667" fill="#DADADA" />
                        </svg>
                        <img src="{{ asset('assets/images/about.jpg') }}?br={{ rand(2020200202, 202020) }}"
                            alt="about" />
                    </div>
                </div>




                <div data-aos="fade-left" class="col-lg-6 col-12">
                    <div class="about-five-content text-center">
                        <h6 class="small-title text-lg">{{ __('index.common.out_story') }}</h6>
                        <h2 class="main-title fw-bold">{{ __('index.about_us.title') }}</h2>
                        <p>{{ __('index.about_us.desc') }}</p>
                        <h4 class="main-title fw-bold">{{ __('index.about_us.title2') }}</h4>
                        <p>{{ __('index.about_us.desc2') }}</p>
                        <p class="mt-4">{{ __('index.about_us.desc2-1') }}</p>
                        <p class="mt-4">{{ __('index.about_us.desc3') }}</p>



                        <div>
                            <ul class="d-flex justify-content-center mt-3">
                                <li class="mt-4 mx-4  footer-icons ">
                                    <a target="_blank" href="https://instagram.com/crypto_rcc"><i
                                            class="lni lni-instagram-filled font-color-primary bg-white-dark p-2 rounded-circle border border-gray"
                                            style="font-size: 30px;"></i></a>
                                </li>
                                <li class="mt-4 mx-4  footer-icons">
                                    <a target="_blank" href="https://twitter.com/crypto_rcc"><i
                                            class="lni lni-twitter-original font-color-primary bg-white-dark p-2 rounded-circle border border-gray"
                                            style="font-size: 30px;"></i></a>
                                </li>
                                <li class="mt-4 mx-4  footer-icons">
                                    <a target="_blank" href="https://t.me/crypto_rcc"><i
                                            class="lni lni-telegram-original font-color-primary bg-white-dark p-2 rounded-circle border border-gray"
                                            style="font-size: 30px;"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </section>

    <!--====== ABOUT FIVE PART ENDS ======-->

    <!-- ===== service-area start ===== -->
    <section id="services" class="services-area services-eight">
        <!--======  Start Section Title Five ======-->
        <div class="section-title-five">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h6>{{ __('index.navbar.services') }}</h6>
                            <h2 class="fw-bold">{{ __('index.common.our_best_services') }}</h2>
                            {{-- <p>
                                {{ __('index.lorem.paragraph') }}
                            </p> --}}

                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!--======  End Section Title Five ======-->
        <div class="container">
            <div class="row py-4" style="overflow: hidden">
                <div data-aos="flip-left" class="col-lg-4 col-md-6">
                    <div class="single-services">
                        {{-- <div class="service-icon">
                            <i class="lni lni-capsule"></i>
                        </div> --}}
                        <div class="service-content text-center">
                            <h4>{{ __('index.services.title') }}</h4>
                            <p>
                                {{ __('index.services.desc') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div data-aos="flip-right" class="col-lg-4 col-md-6">
                    <div class="single-services">
                        {{-- <div class="service-icon">
                            <i class="lni lni-bootstrap"></i>
                        </div> --}}
                        <div class="service-content text-center">
                            <h4>{{ __('index.services.title2') }}</h4>
                            <p>
                                {{ __('index.services.desc2') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div data-aos="flip-left" class="col-lg-4 col-md-6">
                    <div class="single-services">
                        {{-- <div class="service-icon">
                            <i class="lni lni-shortcode"></i>
                        </div> --}}
                        <div class="service-content text-center">
                            <h4>{{ __('index.services.title3') }}</h4>
                            <p>
                                {{ __('index.services.desc3') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div data-aos="flip-right" class="col-lg-4 col-md-6">
                    <div class="single-services">
                        {{-- <div class="service-icon">
                            <i class="lni lni-dashboard"></i>
                        </div> --}}
                        <div class="service-content text-center">
                            <h4>{{ __('index.services.title4') }}</h4>
                            <p>
                                {{ __('index.services.desc4') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div data-aos="flip-left" class="col-lg-4 col-md-6">
                    <div class="single-services">
                        {{-- <div class="service-icon">
                            <i class="lni lni-layers"></i>
                        </div> --}}
                        <div class="service-content text-center">
                            <h4>{{ __('index.services.title5') }}</h4>
                            <p>
                                {{ __('index.services.desc5') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div data-aos="flip-right" class="col-lg-4 col-md-6">
                    <div class="single-services">
                        {{-- <div class="service-icon">
                            <i class="lni lni-reload"></i>
                        </div> --}}
                        <div class="service-content text-center">
                            <h4>{{ __('index.services.title6') }}</h4>
                            <p>
                                {{ __('index.services.desc6') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== service-area end ===== -->


    <!-- Start Pricing  Area -->
    <section id="pricing" class="pricing-area pricing-fourteen">
        <!--======  Start Section Title Five ======-->
        <div class="section-title-five">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h6>{{ __('index.navbar.pricing') }}</h6>
                            <h2 class="fw-bold">{{ __('index.common.pricing_and_plans') }}</h2>
                            {{-- <p>
                                {{ __('index.lorem.paragraph') }}
                            </p> --}}
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!--======  End Section Title Five ======-->
        <div class="container">
            <div class="row py-4" style="overflow: hidden">
                <div data-aos="zoom-in" class="col-lg-12 col-md-12 col-12">
                    <div class="pricing-container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-4 ol-12  mb-4 text-center">
                                <p class="mb-4 h4 font-color-primary text-blod"> {{ __('index.pricing.desc') }}</p>
                                <div>
                                    <span class="text-danger"><del>60 </del></span>
                                    <span class="h3">30 {{ __('index.common.usd') }} </span>
                                    <span class="h5 "> / {{ __('index.common.monthly') }}</span>
                                </div>
                                <div>
                                    <span class="text-danger"><del>150 </del></span>

                                    <span class="h3">75 {{ __('index.common.usd') }}</span>
                                    <span class="h5 "> / {{ __('index.common.three-month') }}</span>
                                </div>
                                <div>
                                    <span class="text-danger"><del>500</del></span>

                                    <span class="h3">250 {{ __('index.common.usd') }}</span>
                                    <span class="h5 "> / {{ __('index.common.yearly') }}</span>
                                </div>
                            </div>
                            <div class=" col-md-8 col-12 mb-4">
                                <div class="text-center">
                                    <div class="h5 " class="mb-2"><i
                                            class="lni lni-checkmark-circle"></i>
                                        {{ __('index.pricing.title') }}
                                    </div>
                                    <div class="h5 " class="mb-2"><i
                                            class="lni lni-checkmark-circle"></i>
                                        {{ __('index.pricing.title2') }}
                                    </div>
                                    <div class="h5 " class="mb-2"><i
                                            class="lni lni-checkmark-circle"></i>
                                        {{ __('index.pricing.title3') }}
                                    </div>
                                    <div class="h5 " class="mb-2"><i
                                            class="lni lni-checkmark-circle"></i>
                                        {{ __('index.pricing.title4') }}
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class=" col-md-12 col-12 mb-4">
                                <div class="text-center">
                                    <p class="mb-4 h4 font-color-primary text-blod"> {{ __('index.pricing.desc2') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
    </section>
    <!--/ End Pricing  Area -->


    <!-- ========================= contact-section start ========================= -->
    <section id="contact" class="contact-section">


        <section>
            <!--======  Start Section Title Five ======-->
            <div class="section-title-five">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="content">
                                <h6>{{ __('index.navbar.contact') }}</h6>
                                <h2 class="fw-bold">{{ __('index.common.our_best_contact') }}</h2>
                                {{-- <p>
                                    {{ __('index.lorem.paragraph') }}
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <div style="overflow: hidden py-4" class="container py-4">
            <div class="row " data-aos="zoom-in-down">
                <div class="col-xl-4 mb-4">
                    <div class="contact-item-wrapper">
                        <div class="row">
                            <div class="col-12 col-md-6 col-xl-12 mb-4 ">
                                <!-- Single Widget -->
                                <div class="f-about d-flex justify-content-center">
                                    <div class="logo">
                                        <img width="250"
                                            src="{{ asset('/assets/images/logo.png') }}?br={{ rand(2020200202, 202020) }}"
                                            alt="#" class="img-fluid" />
                                    </div>
                                    {{-- <p class="mt-4">
                                        {{ __('index.lorem.big-paragraph') }}
                                    </p> --}}

                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-12 col-md-6 col-xl-12">
                                <div cl ass="mb-4">

                                    <div class="text-center mb-4 contact-info">
                                        <h4 class="mb-4">{{ __('index.navbar.contact') }}</h4>
                                        <a class="color-white-link" target="_blank"
                                            href="https://t.me/Info_Royalcoin"><i
                                                class="lni lni-telegram-original font-color-primary  "></i>
                                            info_royalcoin</a>
                                        <a href="mailto: info@royalcoin.cash"
                                            class="pt-2 d-block color-white-link">info@royalcoin.cash</a>
                                    </div>

                                    <div
                                        class="border-top mt-4 d-flex justify-content-center align-items-center flex-column contact-info">
                                        <h6 class="mt-4">{{ __('index.common.join_us_now') }}</h6>
                                        <ul class="d-flex justify-content-center mt-3">
                                            <li class="mt-4 mx-4  footer-icons ">
                                                <a target="_blank" href="https://instagram.com/crypto_rcc"><i
                                                        class="lni lni-instagram-filled font-color-primary bg-white-dark p-2 rounded-circle border border-gray"
                                                        style="font-size: 30px;"></i></a>
                                            </li>
                                            <li class="mt-4 mx-4  footer-icons">
                                                <a target="_blank" href="https://twitter.com/crypto_rcc"><i
                                                        class="lni lni-twitter-original font-color-primary bg-white-dark p-2 rounded-circle border border-gray"
                                                        style="font-size: 30px;"></i></a>
                                            </li>
                                            <li class="mt-4 mx-4  footer-icons">
                                                <a target="_blank" href="https://t.me/crypto_rcc"><i
                                                        class="lni lni-telegram-original font-color-primary bg-white-dark p-2 rounded-circle border border-gray"
                                                        style="font-size: 30px;"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="contact-form-wrapper">
                        <div class="row">
                            <div class="col-xl-10 col-lg-8 mx-auto">
                                <div class="section-title text-center">
                                    <span> {{ __('index.common.get_in_touch') }}</span>
                                    {{-- <p>
                                        {{ __('index.lorem.big-paragraph') }}
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                        @livewire('forms.contact-us')

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= contact-section end ========================= -->


    <!-- Start Footer Area -->


    <a href="#" class="scroll-top btn-hover">
        <i style="color:#fff" class="lni lni-chevron-up"></i>
    </a>

    <!--====== js ======-->
    @livewireScripts

    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}?br={{ rand(2020200202, 202020) }}"></script>
    <script src="{{ asset('/assets/js/glightbox.min.js') }}?br={{ rand(2020200202, 202020) }}"></script>
    <script src="{{ asset('/assets/js/main.js') }}?br={{ rand(2020200202, 202020) }}"></script>
    <script src="{{ asset('/assets/js/tiny-slider.js') }}?br={{ rand(2020200202, 202020) }}"></script>
    <script src="{{ asset('/assets/js/dark-mode-switch.js') }}?br={{ rand(2020200202, 202020) }}"></script>
    <script src="{{ asset('/assets/js/dark-mode-switch.min.js') }}?br={{ rand(2020200202, 202020) }}"></script>




    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        var body = document.getElementById("body");
        // This function will execute itself when the script is loaded
        (function() {
            // Then set the 'data-theme' attribute to whatever is in localstorage
            var theme = localStorage.getItem('theme') ? localStorage.getItem('theme') : 'dark';
            body.setAttribute('data-theme', theme);

            var dark_icon = document.getElementById("dark-icon");
            var light_icon = document.getElementById("light-icon");

            if (localStorage.getItem('theme') === 'light') {
                dark_icon.style.display = "block";
                light_icon.style.display = "none";
            } else {
                dark_icon.style.display = "none";
                light_icon.style.display = "block";
            }

        })();

        function darkModeSwitcher() {
            console.log("runs")
            // Check what is the current theme and get the opposite one
            var targetTheme = body.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';

            var dark_icon = document.getElementById("dark-icon");
            var light_icon = document.getElementById("light-icon");

            if (targetTheme === 'light') {
                dark_icon.style.display = "block";
                light_icon.style.display = "none";
            } else {
                dark_icon.style.display = "none";
                light_icon.style.display = "block";
            }

            // Set the attribute 'data-theme' to the targetTheme
            body.setAttribute('data-theme', targetTheme);

            // Save the targetTheme to the localstorage
            localStorage.setItem('theme', targetTheme);
        }
    </script>
</body>

</html>
