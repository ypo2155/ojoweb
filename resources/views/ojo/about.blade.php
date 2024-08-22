@extends('ojo.layout.app')
@section('content')


<!-- header start -->
<header id="xb-header-area" class="header-area header-style-four is-sticky">
    <div class="xb-header">
        <div class="container mxw_1785">
            <div class="header__wrap ul_li_between">
                <div class="header-logo">
                    <a href="{{ route('index') }}"><img style="width: 100px;height: auto;"
                            src="{{ asset('img/logo/logo.png')}}" alt=""></a>
                </div>
                <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                    <nav class="main-menu collapse navbar-collapse">
                        <ul>
                            <li class="menu-item-has-children {{ request()->is('/') ? 'active' : '' }}">
                                <a href="{{ route('index') }}"><span>HOME</span></a>

                            </li>
                            <li class="menu-item-has-children {{ request()->is('about') ? 'active' : '' }}">
                                <a href="{{ route('about') }}"><span>About</span></a>
                            </li>
                            <li
                                class="menu-item-has-children {{ request()->is('portfolio') ? 'active' : '' }}">
                                <a href="{{ route('portfolio') }}"><span>Portfolio</span></a>
                            </li>
                            <li
                                class="menu-item-has-children {{ request()->is('services') ? 'active' : '' }}">
                                <a href="{{ route('services') }}"><span>Services</span></a>
                            </li>
                            <li class="menu-item-has-children {{ request()->is('news') ? 'active' : '' }}">
                                <a href="{{ route('news') }}"><span>NEWS</span></a>
                            </li>
                            <li class="{{ request()->is('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}"><span>Contact</span></a>
                            </li>
                        </ul>
                    </nav>
                    <div class="xb-header-wrap">
                        <div class="xb-header-menu">
                            <div class="xb-header-menu-scroll">
                                <div class="xb-menu-close xb-hide-xl xb-close"></div>
                                <div class="xb-logo-mobile xb-hide-xl">
                                    <a href="{{ route('index') }}" rel="home"><img src="{{ asset('img/logo/logo.svg')}}"
                                            alt=""></a>
                                </div>
                                <nav class="xb-header-nav">
                                    <ul class="xb-menu-primary clearfix">
                                        <li class="menu-item">
                                            <a href="{{ route('index') }}"><span>Home</span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('about') }}"><span>About</span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('portfolio') }}"><span>Portfolio</span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('services') }}"><span>Services</span></a>

                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('news') }}"><span>News</span></a>
                                        </li>
                                        <li class="menu-item"><a
                                                href="{{ route('contact') }}"><span>Contact</span></a></li>
                                        <li class="menu-item"><a
                                                href="{{ route('faq') }}"><span>FAQ</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="xb-header-menu-backdrop"></div>
                    </div>
                </div>
                <div class="ul_li">
                    <div class="xb-header_btn d-none d-lg-block">
                        <a href="{{ route('contact') }}">Get In Touch</a>
                    </div>
                    <div class="side-menu-4 d-none d-lg-block">
                        <a href="javascript:void(0);" class="burger-menu">
                            <img src="{{ asset('img/digital-marketing/icon/menu01.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="header-bar-mobile side-menu d-lg-none">
                    <a class="xb-nav-mobile" href="javascript:void(0);"><img
                            src="{{ asset('img/digital-marketing/icon/menu01.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

 <!-- main area start  -->
 <main>
    <!-- breadcrumb start  -->
    <section class="breadcrumb pt-90 pb-120">
        <div class="container">
            <div class="breadcrumb__content text-center">
                <h2 class="breadcrumb__title">About Us</h2>
                <ul class="breadcrumb__list">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">HOme</a></li>
                    <li class="breadcrumb-item">About us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- breadcrumb end  -->

    <!-- about section start  -->
    <section class="about-area pt-110">
        <div class="container">
            <div class="section-title mb-55">
                <span class="sub-title wow fadeInRight" data-wow-duration=".7s">About Auxa</span>
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <h3 class="title wow skewIn mb-35">Crafting Digital <br> <span>Excellence</span></h3>
                <p class="section-content wow fadeInRight" data-wow-delay="200ms" data-wow-duration=".7s">Our vision is to be a trailblazing force in the world of web design and development, recognized for our unwavering commitment to excellence, integrity, and customer satisfaction. </p>
            </div>
            <div class="about-img pos-rel">
                <img src="img/about/img02.jpg" alt="">
                <div class="about-year">
                    <h2 class="xb-odm"><span class="xbo" data-count="1">00</span></h2>
                    <p>Year of <br>Experience</p>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-xl-8 offset-xl-4">
                    <p class="section-content section-content-bottom mb-80">Our mission is to empower businesses and individuals by harnessing the full potential of the digital landscape. We are committed to delivering innovative web solutions that not only meet but exceed our clients' expectations. Through creativity, collaboration. </p>
                    <div class="row mt-none-30">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt-30">
                            <div class="xb-funfact text-center">
                                <h3 class="xb-item--number xb-odm"><span class="xbo"
                                        data-count="90">00</span><span class="suffix">+</span></h3>
                                <h6 class="xb-item--title">Project Delivered</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt-30">
                            <div class="xb-funfact text-center">
                                <h3 class="xb-item--number xb-odm"><span class="xbo" data-count="13">00</span>
                                </h3>
                                <h6 class="xb-item--title">Awards</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt-30">
                            <div class="xb-funfact text-center">
                                <h3 class="xb-item--number xb-odm">
                                    <span class="xbo" data-count="90">00</span>
                                    <span class="suffix">+</span>
                                </h3>
                                <h6 class="xb-item--title">Years Experience</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt-30">
                            <div class="xb-funfact text-center">
                                <h3 class="xb-item--number xb-odm">
                                    <span class="xbo" data-count="88">00</span>
                                    <span class="suffix">+</span>
                                </h3>
                                <h6 class="xb-item--title">Happy Clients</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end  -->

    <!-- why-us section start  -->
    <section class="why_us pt-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why_us-image">
                        <img src="img/why-us/img01.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title mb-30">
                        <span class="sub-title wow fadeInRight" data-wow-duration=".7s">WHY US</span>
                        <div class="clearfix"></div>
                        <h3 class="title wow skewIn mb-20">Discover Our <br> <span>Capabilities</span></h3>
                        <p>connecting businesses with their audiences, and individuals with their <br> dreams. Our path forward is one of continuous growth</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- why-us section end  -->


    <!-- brand area start  -->
    <div class="brand-style-three about-brand pb-150">
        <div class="container">
            <div class="brand-slider about-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide xb-brand">
                        <a href="#!"><img src="img/brand/brand01.png" alt=""></a>
                    </div>
                    <div class="swiper-slide xb-brand">
                        <a href="#!"><img src="img/brand/brand02.png" alt=""></a>
                    </div>
                    <div class="swiper-slide xb-brand">
                        <a href="#!"><img src="img/brand/brand03.png" alt=""></a>
                    </div>
                    <div class="swiper-slide xb-brand">
                        <a href="#!"><img src="img/brand/brand04.png" alt=""></a>
                    </div>
                    <div class="swiper-slide xb-brand">
                        <a href="#!"><img src="img/brand/brand05.png" alt=""></a>
                    </div>
                    <div class="swiper-slide xb-brand">
                        <a href="#!"><img src="img/brand/brand06.png" alt=""></a>
                    </div>
                    <div class="swiper-slide xb-brand">
                        <a href="#!"><img src="img/brand/brand01.png" alt=""></a>
                    </div>
                    <div class="swiper-slide xb-brand">
                        <a href="#!"><img src="img/brand/brand02.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand area end  -->

</main>
<!-- main area end  -->



@endsection
