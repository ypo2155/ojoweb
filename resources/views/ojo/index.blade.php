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
    <!-- hero section start  -->
    <section class="hero-digital-marketing pos-rel"> 
        <div class="dm-hero-img wow skewIn" data-wow-delay="250ms">
            <img style="opacity: 40%" src="img/digital-marketing/hero/hero-05.jpg" alt="">
        </div>
        <div class="container">
            <div class="dm-hero-content pos-rel">
                <div class="xb-item--dm-image wow skewIn" data-wow-duration=".7s">
                    <img  src="img/digital-marketing/hero/hero-04.jpg" alt="">
                </div>
                <h1 class="xb-item--title wow fadeInUp">Take Your <br> <span class="sp-two">Online</span> <span>Journey</span></h1>
                <div class="hero-inner ul_li_between mt-40">
                    <div class="xb-item--holder mt-20 wow fadeInUp" data-wow-delay="350ms" data-wow-duration=".7s">
                        <div class="xb-item--dm-icon"><img src="img/digital-marketing/icon/dm-hero.png" alt=""></div>
                        <p class="xb-item--content">
                            Over 200 specialist Marketer. <br> 14 offices worldwide. <br> Landmark cases for the world’s largest firms.
                        </p>
                    </div>
                    <div class="dm-button xb-element-parallax mt-20">
                        <a href="{{route('portfolio')}}" class="circle-btn port-btn dm-btn wow fadeInUp" data-wow-delay="450ms" data-wow-duration=".7s">
                            <div class="button__bg"></div>Show <br> PROJECTS
                        </a>
                    </div>
                    <div class="dm-img mt-20 wow skewIn" data-wow-delay="250ms"><img src="img/digital-marketing/hero/hero-06.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end  -->

    <!-- dm-brand start -->
    <section class="brand pt-165 pb-130">
        <div class="container">
            <span class="dm-brand-title d-block text-center mb-35">OUR NETWORK OF THE MOST INNOVATIVE</span>
            <div class="dm-brand-slider swiper-container">
                <div class="swiper-wrapper">
                    @foreach($brands as $brand)
                    <div class="swiper-slide dm-brand">
                        <a href="#!"><img src="{{ asset('/storage/image/clients/' . $brand->BrandImg) }}" alt="{{$brand->BrandText}}"></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- dm-brand end -->

    <!-- service start -->
    <section class="service-4 pos-rel mb-130">
        <div class="container">
            <div class="section-title section-title--dm mb-55">
                <span class="sub-title mb-45 wow fadeInRight" data-wow-duration=".7s">services</span>
                <div class="clearfix"></div>
                <h3 class="title wow skewIn">Your Success with our <br> <span>Unmatched Experience</span></h3>
            </div>
        </div>
        <div class="services-inner pos-rel">
            <div class="services-bg bg_img" data-background="{{ asset('img/digital-marketing/dm-service/srv-bg.jpg')}}"></div>
        <div class="dm-service-slider">
            <div class="swiper-wrapper">
                @foreach($services as $service)
                <div class="swiper-slide dm-service">
                    <div class="xb-item--holder">
                        <h2 class="xb-item--title"><a href="{{route('servicedetail',  $service->slug)}}"> <br>{{ $service->ServiceText1 }}</a></h2>
                        <div class="xb-item--content">{!! Str::limit($service->ServiceText2, 200) !!}</div>
                    </div>
                    <div class="xb-item--image"><img src="{{ asset('/storage/image/service/' . $service->ServiceImg2) }}" alt=""></div>
                    <div class="xb-item--srv_link">
                        <a href="{{route('servicedetail',  $service->slug)}}">Learn More <span><img src="{{ asset('img/digital-marketing/icon/dm-srv.png')}}" alt=""></span></a>
                    </div>
                </div>

                @endforeach
                
               
            </div>
        </div>
        </div>
    </section>
    <!-- service end -->

    <!-- about start  -->
    <section class="about pos-rel">
        <div class="container">
            <div class="section-title section-title--dm mb-195">
                <span class="sub-title mb-45 wow fadeInRight" data-wow-duration=".7s">about agency</span>
                <div class="clearfix"></div>
                <h3 class="title wow skewIn">create <span>special Things</span></h3>
            </div>
          
            <div class="dm-about--counter pt-80">
                <div class="dm-about--wrapper">
                    <div class="inner ul_li mb-55">
                        <div class="icon">
                            <img src="img/icon/hero01.svg" alt="">
                        </div>
                        <div class="holder">
                            <h3 class="number xb-odm"><span class="xbo" data-count="80">00</span><span class="suffix">K</span></h3>
                            <p class="content">Happy Customer</p>
                        </div>
                    </div>
                    <div class="inner ul_li mb-55">
                        <div class="icon">
                            <img src="img/icon/hero02.svg" alt="">
                        </div>
                        <div class="holder">
                            <h3 class="number xb-odm"><span class="xbo" data-count="125">00</span></h3>
                            <p class="content">Countries</p>
                        </div>
                    </div>
                </div>
                <span class="dm-about--content d-block pt-45">
                    Our vision is to be a trailblazing force in the world of web design and development,
                    recognized for our unwavering commitment to excellence, integrity, and customer satisfaction. 
                </span>
            </div>
            <div class="dm-about--button xb-element-parallax">
                <a href="{{route('about')}}" class="circle-btn port-btn about-btn dm-btn">
                    <div class="button__bg"></div>Explore <br> more
                </a>
            </div>
        </div>
        <div class="dm-about--image bg_img" data-background="img/digital-marketing/about/about-img01.jpg"></div>
    </section>
    <!-- about end  --> 

    <!-- portfolio start -->
    <section class="portfolio pt-130">
        <div class="container">
            <div class="section-title section-title--dm mb-30">
                <span class="sub-title mb-45 wow fadeInRight" data-wow-duration=".7s">Portfolio</span>
                <div class="ul_li_between align-items-end">
                    <h3 class="title wow skewIn mb-20">Recent Work <br> <span>Portfolio</span></h3>
                    <a href="{{route('portfolio')}}" class="d-block dm-port-link mb-20">SEE MORE WORK <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.9981 2.06238C19.0325 1.51117 18.6136 1.0364 18.0624 1.00195L9.07991 0.440543C8.5287 0.406092 8.05392 0.825008 8.01947 1.37622C7.98502 1.92743 8.40394 2.4022 8.95515 2.43665L16.9396 2.93567L16.4405 10.9201C16.4061 11.4713 16.825 11.9461 17.3762 11.9805C17.9274 12.015 18.4022 11.5961 18.4366 11.0449L18.9981 2.06238ZM1.66162 17.7498L18.6616 2.74984L17.3384 1.25016L0.338378 16.2502L1.66162 17.7498Z" fill="white" />
                      </svg></a>
                </div>
            </div>
            <div class="dm-portfolio-slider swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($portfolios as $portfolio)
                    <div class="swiper-slide dm-portfolio xb-hover-zoom">
                        <div class="xb-item--img">
                            <a href="#!"><img src="{{ asset('/storage/image/portfolio/' . $portfolio->PortImg) }}" alt=""></a>
                        </div>
                        <div class="xb-item--holder text-center">
                            <a class="xb-item--title" href="#!">{{ $portfolio->PortText1 }}</a>
                            <a class="xb-item--desig" href="#!">{{ $portfolio->PortText2 }}</a>
                        </div>
                    </div>
                    @endforeach
                   
                 
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio end -->

    <!--  marquee start -->
    <section class="marquee-two pt-120">
        <div class="dm-marquee db-marquee marquee-left">
            @foreach($services as $service)
            <div class="marquee-item">{{ $service->ServiceText1 }} </div>
            @endforeach
        </div>
    </section>
    <!--  marquee end -->

    <!-- video start -->
    <section class="video pos-rel">
            <img src="img/digital-marketing/video-bg/dm-video.png" alt="">
        <div class="dm-video">
            <a class="play-btn popup-video" href="https://www.youtube.com/watch?v=cRXm1p-CNyk"><img src="img/digital-marketing/icon/dm-play.svg" alt=""></a>
            <span class="dm-text">how it works</span>
        </div>
    </section>
    <!-- video end -->

<br><br>

</main>
<!-- main area end  -->






@endsection
