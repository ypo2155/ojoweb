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
                <h2 class="breadcrumb__title">Frequently Asked Questions</h2>
                <ul class="breadcrumb__list">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item">Faq</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- breadcrumb end  -->

    <!-- faq start -->
    <section class="faq pt-130 pb-130">
        <div class="container">
            <div class="row align-items-end mb-10">
                <div class="col-lg-8">
                    <div class="section-title mb-30">
                        <h3 class="title">The answers you seek.
                            Are within our <span>frequently asked
                                questions.</span></h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="faq-btn ul_li_right mb-30">
                        <a href="contact.html" class="btn-link ul_li_right">Let’s talk! <span><img src="img/icon/arrow-right2.svg" alt=""></span></a>
                    </div>
                </div>
            </div>
            <div class="xb-faq">
                <ul class="accordion_box clearfix">
                    <li class="block accordion active  active-block">
                        <span class="number">01</span>
                        <div class="acc-btn">
                            How Can i Design Delivery
                            <span class="arrow"></span>
                        </div>
                        <div class="acc_body current">
                            <div class="content">
                                <p>AusHydro is a trusted provider of front-end engineering design services for run-of-river, conventional hydro, and pumped storage projects. Our experienced team is dynamic and capable of delivering a wide range of projects, from prospecting to feasibility and reference design.</p>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <span class="number">02</span>
                        <div class="acc-btn">
                            What is the product merging roadmap?
                            <span class="arrow"></span>
                        </div>
                        <div class="acc_body">
                            <div class="content">
                                <p>AusHydro is a trusted provider of front-end engineering design services for run-of-river, conventional hydro, and pumped storage projects. Our experienced team is dynamic and capable of delivering a wide range of projects, from prospecting to feasibility and reference design.</p>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <span class="number">03</span>
                        <div class="acc-btn">
                            Owner’s Engineering
                            <span class="arrow"></span>
                        </div>
                        <div class="acc_body">
                            <div class="content">
                                <p>AusHydro is a trusted provider of front-end engineering design services for run-of-river, conventional hydro, and pumped storage projects. Our experienced team is dynamic and capable of delivering a wide range of projects, from prospecting to feasibility and reference design.</p>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <span class="number">04</span>
                        <div class="acc-btn">
                            Can I change analytics admin panel?
                            <span class="arrow"></span>
                        </div>
                        <div class="acc_body">
                            <div class="content">
                                <p>AusHydro is a trusted provider of front-end engineering design services for run-of-river, conventional hydro, and pumped storage projects. Our experienced team is dynamic and capable of delivering a wide range of projects, from prospecting to feasibility and reference design.</p>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <span class="number">05</span>
                        <div class="acc-btn">
                            How to work with Google Analytics?
                            <span class="arrow"></span>
                        </div>
                        <div class="acc_body">
                            <div class="content">
                                <p>AusHydro is a trusted provider of front-end engineering design services for run-of-river, conventional hydro, and pumped storage projects. Our experienced team is dynamic and capable of delivering a wide range of projects, from prospecting to feasibility and reference design.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- faq end -->

</main>
<!-- main area end  -->





@endsection
