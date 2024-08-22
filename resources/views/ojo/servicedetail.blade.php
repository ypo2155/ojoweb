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
    <section class="breadcrumb pt-90 pb-120">
        <div class="container">
            <div class="breadcrumb__content text-center">
                <h2 class="breadcrumb__title">Services Details</h2>
                <ul class="breadcrumb__list">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">HOme</a></li>
                    <li class="breadcrumb-item">Services Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- hero section end  -->

    <!-- service details area start -->
    <div class="service-details pt-125 ">
        <div class="container">
            <div class="row mt-none-30 align-items-center">
                <div class="col-lg-6 mt-30">
                    <div class="section-title">
                        <span class="sub-title wow fadeInRight" data-wow-duration=".7s">OJO SERVICE</span>
                        <div class="clearfix"></div>
                        <h3 class="title wow skewIn mb-15">{{ $service->ServiceText1 }}</span></h3>
                    </div>
                    <div class="service-single-content">
                       
                        <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration=".7s">
                            {!! $service->ServiceText2 !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mt-30">
                    <div class="service-details_image">
                        <img class="ukiyo" data-u-speed="1.2" src="{{ asset('/storage/image/service/' . $service->ServiceImg2) }}" alt="">
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- service details area end  -->

    <!-- service details slider area two end  -->
    <section class="service_details-slider z-3 pt-130">
        <div class="service-gallery-slider swiper-container">
            <div class="swiper-wrapper">
                @foreach($services as $service)
                <div class="swiper-slide">
                    <div class="xb-item--image">
                        <img src="{{ asset('/storage/image/service/' . $service->ServiceImg2) }}" alt="">
                    </div>
                </div>
                @endforeach
               
         
            </div>
            <div class="swiper-pagination"></div>
        </div>
        
    </section>
    <!-- service details slider area two end  -->

     <!--  marquee start -->
     <section class="sd-marquee pt-120 pb-10">
        <div class="marquee-left">
            @foreach($services as $service)
            <h2 class="marquee-item">{{ $service->ServiceText1 }} </h2>
            @endforeach
        </div>
    </section>
    <!--  marquee end -->
<br>
<br>

</main>
<!-- main area end  -->






@endsection
