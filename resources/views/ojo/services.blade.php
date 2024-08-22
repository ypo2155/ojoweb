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
                <h2 class="breadcrumb__title">Our Services</h2>
                <ul class="breadcrumb__list">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">HOme</a></li>
                    <li class="breadcrumb-item">Our Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- breadcrumb end  -->

    <!-- service area start -->
    <div class="service innar-service pt-125 ">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-lg-6 mt-30">
                    <div class="section-title">
                        <span class="sub-title wow fadeInRight" data-wow-duration=".7s">Core Services</span>
                        <div class="clearfix"></div>
                        <h3 class="title wow skewIn mb-60">Discover Our <br> <span>Capabilities</span></h3>
                    </div>
                </div>
                <div class="col-lg-6 mt-30">
                    <div class="row mt-none-60">

                        @foreach($iservices as $service)
                        <div class="col-md-6 mt-60">
                            <div class="xb-service pos-rel">
                                <div class="xb-item--icon">
                                    <img src="{{ asset('/storage/image/service/' . $service->ServiceImg1) }}" alt="">
                                </div>
                                <h3 class="xb-item--title">{{ $service->ServiceText1 }}</h3>
                                <p class="xb-item--content">{!! Str::limit($service->ServiceText2, 100) !!}</p>
                                <div class="xb-item--arrow"><i class="fal fa-arrow-down"></i></div>
                                <a class="xb-overlay" href="{{route('servicedetail', $service->slug)}}"></a>
                            </div>
                        </div>
                        @endforeach
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end  -->

    <!-- service area two end  -->
    <section class="inner-service-two z-3 pt-150">
        <div class="container">
            <div class="row align-items-end mb-80">
                <div class="col-lg-6">
                    <div class="section-title mb-30">
                        <span class="sub-title wow fadeInRight" data-wow-duration=".7s">WHAT WE OFFER</span>
                        <div class="clearfix"></div>
                        <h3 class="title wow skewIn">Unlock Revenue Growth for Your <span>Business</span></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-slider">
            <div class="swiper-wrapper">
                @foreach($services as $service)
                <div class="swiper-slide xb-service2">
                    <div class="xb-item--inner">
                        <div class="xb-item--image">
                            <img src="{{ asset('/storage/image/service/' . $service->ServiceImg2) }}" alt="">
                            <div class="xb-item--content">
                                <h2 class="xb-item--title"><a href="{{route('servicedetail', $service->slug)}}">{{ $service->ServiceText1 }}</a></h2>
                                <span class="xb-item--sub-title">OJO</span>
                            </div>
                        </div>
                        <a class="xb-overlay xb-overlay-link" href="{{route('servicedetail',  $service->slug)}}"></a>
                    </div>
                </div>

                @endforeach
               
                
                
            </div>
        </div>
    </section>
    <!-- service area two end  -->

    <!-- service-tag area start  -->
    <section class="service pt-130 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="section-title pb-60">
                        <h3 class="title wow fadeInUp" data-wow-duration=".7s">We offer comprehensive services that help businesses establish a <span>strong online presence.</span></h3>
                    </div>
                </div>
            </div>
            <div class="service-tag text-center">
                @foreach($services as $service)
                <span>{{ $service->ServiceText1 }}</span>
                @endforeach
               
        </div>
    </section>
    <!-- service-tag area end  -->

    <!-- faq area start  -->
    <section class="faq z-3 pt-80 pb-70 pos-rel">
        <div class="container">
            <div class="section-title mb-30">
                <span class="sub-title wow fadeInRight" data-wow-duration=".7s">WHAT WE OFFER</span>
                <div class="clearfix"></div>
                <h3 class="title wow skewIn">Discover Our <br> <span>Capabilities</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion-wrapper">
                        <ul class="accordion_box clearfix">
                            <li class="block accordion active-block">
                                <div class="acc-btn">
                                    High Standards
                                    <span class="arrow"></span>
                                </div>
                                <div class="acc_body current">
                                    <div class="content">
                                        <p>Our mission is to empower businesses and individuals by harnessing the full potential of the digital landscape. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    Focus on People
                                    <span class="arrow"></span>
                                </div>
                                <div class="acc_body">
                                    <div class="content">
                                        <p>Our mission is to empower businesses and individuals by harnessing the full potential of the digital landscape. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    Different Thinking
                                    <span class="arrow"></span>
                                </div>
                                <div class="acc_body">
                                    <div class="content">
                                        <p>Our mission is to empower businesses and individuals by harnessing the full potential of the digital landscape. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    Business Innovation
                                    <span class="arrow"></span>
                                </div>
                                <div class="acc_body">
                                    <div class="content">
                                        <p>Our mission is to empower businesses and individuals by harnessing the full potential of the digital landscape. </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="faq-img bg_img ukiyo" data-u-speed="1" data-background="img/faq/faq01.jpg"></div>
        </div>
    </section>
    <!-- faq area end  -->

</main>
<!-- main area end  -->






@endsection
