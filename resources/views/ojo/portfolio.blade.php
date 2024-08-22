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
                <h2 class="breadcrumb__title">Project</h2>
                <ul class="breadcrumb__list">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">HOme</a></li>
                    <li class="breadcrumb-item">our project</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- breadcrumb end  -->

    <!-- portfolio start -->
    <div class="portfolio pt-135 pb-150">
        <div class="container">
            <div class="row align-items-end mb-20">
                <div class="col-lg-5">
                    <div class="section-title mb-30">
                        <span class="sub-title wow fadeInRight" data-wow-duration=".7s">Core Services</span>
                        <div class="clearfix"></div>
                        <h3 class="title wow skewIn">Discover Our <br> <span>Capabilities</span></h3>
                    </div>
                </div>
               
            </div>
            <div class="row grid g-150 mt-none-60">
                @foreach ($portfolios as $portfolio)
                <div class="col-lg-6 col-md-6 grid-item cat1 cat2 cat4">
                    <div class="portfolio-item xb-img-reveal-item mt-60" data-cat="{{ $portfolio->PortText2 }}"
                    data-title="{{ $portfolio->PortText1 }}" data-fx="1">
                        <div class="xbImage__hover image-1">
                            <a href="#!">
                                <img src="{{ asset('/storage/image/portfolio/' . $portfolio->PortImg) }}" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
             
            </div> 
        </div>
        <br><br>
        <div class="pagination_wrap pt-10">
                            
            {{ $portfolios->links('pagination::ojodefault') }}  
        </div>
    </div>
    <!-- portfolio end -->
    

</main>
<!-- main area end  -->





@endsection
