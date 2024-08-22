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
                <h2 class="breadcrumb__title">Contact us</h2>
                <ul class="breadcrumb__list">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">HOme</a></li>
                    <li class="breadcrumb-item">Contact us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- breadcrumb end  -->

    <!-- contact start -->
    <section class="contact pt-110 pb-180">
        <div class="container">
            <div class="row pb-125">
                <div class="section-title pb-60">
                    <h3 class="title wow skewIn">WE CREATE DIGITAL <br> <span>SOLUTIONS</span></h3>
                </div>
                <ul class="contact-location">
                    <li><h3>Location</h3><span>Landabarri Bidea, l, Oficina 205 - 48940 Leioa, Bizkaia</span></li>
                    <li class="text-lowercase"><h3>Contact</h3><span>auxa@example.com , +1 800 123 456 789</span></li>
                    <li><h3>Social</h3><span>Instagram..  Behance..Dribbble..  Facebook..Twitter..</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="section-title contact-title mb-35">
                    <span class="sub-title">Share your creative ideas with us and <br>
                        get back designs that impres <br>
                        and engage</span>
                </div>
                <div class="contact-form-inner">
                    <form class="contact-form pos-rel" action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="xb-item--field">
                                    <label for="name">Your Name</label>
                                    <input id="name" type="text" placeholder="Gomez Golatria">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="xb-item--field">
                                    <label for="mail">Email</label>
                                    <input id="mail" type="text" placeholder="gomez@example.com">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="xb-item--field">
                                    <label for="number">Skype/Phone</label>
                                    <input id="number" type="text" placeholder="+1 800 123 456 789">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="xb-item--field">
                                    <label for="service">Company</label>
                                    <input id="service" type="text" placeholder="xpressbuddy Digital Solutions">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="xb-item--field xb-item--textarea">
                                    <label for="message">Your message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Hello Dennis, can you help me with..."></textarea>
                                </div>
                                <button type="submit" class="circle-btn port-btn xb-element-parallax">
                                    <span class="button__bg"></span>Send
                                </button>    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->

</main>
<!-- main area end  -->



@endsection
