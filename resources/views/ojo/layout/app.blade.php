<!doctype html>
<html lang="mm">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OJO DIGITAL MARKETING</title>
    <meta name="description"
        content="OJO Digital Marketing - Elevating Your Online Presence with Expert SEO Services. Boost visibility, drive organic traffic, and achieve top search rankings. Let's optimize your digital success!">
    <meta name="keywords"
        content="OJO Digital Marketing, SEO services, online visibility, search rankings, digital success">
    <meta name="author" content="OJO Digital Marketing">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.ojodigitalmarketing.com/">
    <link rel="shortcut icon" href="{{ asset('img/logo/logo.png')}}" />

    <!-- css include -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/odometer.css')}}">
    <link rel="stylesheet" href="{{ asset('css/imageRevealHover.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
</head>

<body>

    <!-- backtotop - start -->
    <div class="xb-backtotop">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- preloader start -->
    <div id="xb-loadding" class="xb-loader">
        <div class="loading-spin"></div>
    </div>
    <!-- preloader end -->

    <div class="body_wrap">
        

        <!-- overlay menu start -->
        <div class="overlay-menu">
            <div class="close">
                <div class="xb-close"></div>
            </div>
            <div class="row overlay-wrap">
                <div class="col-xl-8 col-md-7 left-area">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About</a>

                            </li>
                            <li>
                                <a href="{{ route('portfolio') }}">Portfolio</a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}">Services</a>
                            </li>
                            <li>
                                <a href="{{ route('news') }}">News</a>
                            </li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-4 col-md-5 right-area">
                    <ul>
                        <li><span class="title">Brief us</span></li>
                        <li><a href="mailto:info@ojodigitalmarketing.com"
                                target="_blank">info@ojodigitalmarketing.com</a></li>
                        <li><a target="_blank">Tel. +959 79 807 1294</a></li>
                    </ul>
                    <ul>
                        <li><span class="title">Our Office</span></li>
                        <li>
                            <p>No-35, Bo Aung Kyaw str, Bo Tun San ward,<br> Dawbon, Yangon</p>
                        </li>
                    </ul>
                    <ul>
                        <li><span class="title">Follow us</span></li>
                        <li>
                            <ul class="social-links">
                                <li><a href="#" target="_blank">Facebook</a></li>
                                <li><a href="#" target="_blank">Instagram</a></li>
                                <li><a href="#" target="_blank">Tiktok</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- overlay menu end -->



        @yield('content')


        <!-- footer strt -->
        <footer class="dm-footer pos-rel">
            <div class="dm-footer-line pt-125 pb-120">
                <div class="container">
                    <div class="row mt-none-40">
                        <div class="col-lg-4 col-md-6 footer-col mt-40">
                            <div class="footer-widget">
                                <div class="footer-logo mb-30">
                                    <a href="{{route('index')}}"><img src="{{ asset('img/logo/logo.svg')}}" alt=""></a>
                                </div>
                                <p>Auxa, creativity knows no limits, and we are <br> committed to bringing your brand's
                                    story to life in <br> ways that resonate and endure."</p>
                                <ul class="social-list ul_li mt-40">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-col mt-40">
                            <div class="footer-widget">
                                <h3 class="widget-title">About US</h3>
                                <ul class="footer-links">
                                    <li><a href="{{ route('about') }}">About US</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li><a href="{{ route('faq') }}">Faq</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-col mt-40">
                            <div class="footer-widget">
                                <h3 class="widget-title">MORE INFO</h3>
                                <ul class="footer-links">
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                    <li><a href="{{ route('news') }}">News</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-copyright text-center">
                    Copyright © 2024 OJO. All rights reserved. Build by <a style="color: #ffce37;"
                        href="https://www.eeaio.com" target="_blank">eeaio</a>.
                </div>
            </div>
            <div class="dm-footer-bg_icon">
                <img style="opacity: 10%;" src="{{ asset('img/logo/logo.png')}}" alt="">
            </div>
        </footer>
        <!-- footer end -->

    </div>

    <!-- jquery include -->
    <script src="{{ asset('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/swiper.min.js')}}"></script>
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <script src="{{ asset('js/gsap.min.js')}}"></script>
    <script src="{{ asset('js/ScrollSmoother.min.js')}}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js')}}"></script>
    <script src="{{ asset('js/SplitText.min.js')}}"></script>
    <script src="{{ asset('js/appear.js')}}"></script>
    <script src="{{ asset('js/odometer.min.js')}}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('js/jquery.marquee.min.js')}}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/touchspin.js')}}"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/imageRevealHover.js')}}"></script>
    <script src="{{ asset('js/TweenMax.min.js')}}"></script>
    <script src="{{ asset('js/easing.min.js')}}"></script>
    <script src="{{ asset('js/scrollspy.js')}}"></script>
    <script src="{{ asset('js/ukiyo.min.js')}}"></script>
    <script src="{{ asset('js/lenis.js')}}"></script>
    <script src="{{ asset('js/matter.js')}}"></script>
    <script src="{{ asset('js/throwable.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>

</body>

</html>
