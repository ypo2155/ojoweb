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
                            <li class="menu-item-has-children active">
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
                <h2 class="breadcrumb__title">New Details</h2>
                <ul class="breadcrumb__list">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('news')}}">New</a></li>
                    <li class="breadcrumb-item">{{ $new->NewText1 }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- breadcrumb end  -->

    <!-- blog start -->
    <section class="blog pt-110 pb-130">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-lg-8 mt-30">
                    <div class="blog-post-wrapper">
                        <article class="post-details">
                            <div class="post-thumb">
                                <img src="{{ asset('/storage/image/new/' . $new->NewImg) }}" alt="">
                            </div>
                          
                            <ul class="post-meta ul_li">
                      
                                <li><span class="posted-on"><i class="far fa-clock"></i> <a href="#!">{{ Carbon\Carbon::parse($new->create)->format('M d Y') }}</a></span></li>
                            </ul>
                            <h2>{{ $new->NewText1 }}</h2>
                            <p>{!! Str::limit($new->NewText2, 300) !!}</p>
                          

                        </article>
                       
                        
                    </div>
                </div>
                <div class="col-lg-4 mt-30">
                    <div class="blog-sidebar sidebar-area mt-none-40">
                      
                        <div class="widget mt-40">
                            <h2 class="widget__title">Related Posts</h2>
                            <div class="widget__post">
                                @foreach($rnews as $new)
                                <div class="widget__post-item ul_li">
                                    <div class="post-thumb">
                                        <a href="{{route('newdetail', $new->slug )}}"><img src="{{ asset('/storage/image/new/' . $new->NewImg) }}" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                 
                                            <a href="#!"><i class="invite-text-gr-color far fa-calendar"></i>{{ Carbon\Carbon::parse($new->create)->format('M d Y') }}</a>
                                        </div>
                                        <h4 class="post-title border-effect-2"><a href="{{route('newdetail', $new->slug )}}">{{ $new->NewText1 }}</a></h4>
                                    </div>
                                </div>

                                @endforeach
                                
                              
                                
                              
                                
                            </div>
                        </div>
                       
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog end -->

</main>
<!-- main area end  -->






@endsection
