@extends('layouts.masterlanding')
@section('content')
<main>
    <header class="style1 w-100">
        <div class="topbar bg-color4 w-100">
            <div class="container">
                <div class="topbar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <ul class="top-info-links d-inline-flex flex-wrap align-items-center list-unstyled mb-0">
                        <li><i class="flaticon-telephone-auricular-with-cable"></i><a href="tel:(305) 222-3333" title="">+(305) 222-3333</a></li>
                        <li><i class="flaticon-email"></i><a href="mailto:info@example.com" title="">info@example.com</a></li>
                    </ul>
                    <div class="social-cart d-inline-flex flex-wrap align-items-center">
                        <div class="social-links d-inline-flex flex-wrap">
                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/dokteranime/" title="Instagram" target="_blank"><i class="fa-brands fa-instagram fa-lg"></i></a>
                            <a href="https://youtube.com/" title="Youtube" target="_blank"><i class="fa-brands fa-youtube fa-lg"></i></a>
                            <a href="https://linkedin.com/" title="Twitter" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                        <div class="header-cart-box position-relative d-inline-block">
                            @if(Auth::check())
                            <a class="cart-btn position-relative" href="/login" title="" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"><b>{{Auth::user()->name}}</b> <i class="flaticon-user"></i></a>
                            <div class="minicart-dropdown">
                                <ul class="mb-0 list-unstyled w-100">
                                    <li>
                                        <div class="minicart-item d-flex flex-wrap w-60">
                                            <div class="minicart-info">
                                                <h6 class="mb-0"><a href="shop-detail.html" title="">{{Auth::user()->name}}</a></h6>
                                                <span class="price">{{Auth::user()->email}}</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="d-block btns-total w-100">
                                    <div class="btns-wrap d-flex flex-wrap w-100">
                                        <a class="thm-btn sml-btn brd-btn d-inline-block rounded-pill logout" href="javascript:void(0);" title="" data-id="{{$user->id}}" data-nama="{{$user->name}}">Logout</a>
                                        @if (Auth::user()->role=='admin')
                                        <a class="thm-btn sml-btn brd-btn d-inline-block rounded-pill" href="/dashboard" title="">Dashboard</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <a class="cart-btn position-relative" href="/login" title=""><b>Login</b> <i class="flaticon-user"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div><!-- Topbar -->
        <div class="menubar w-100">
            <div class="container">
                <div class="menubar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo">
                        <h1 class="mb-0"><a href="/" title="Home"><img width="185" src="{{asset('landing/assets/images/logo.png')}}" alt="Logo"></a></h1>
                    </div><!-- Logo -->
                    <nav>
                        <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
                            <li class="menu-item active satu"><a href="/" title="">Beranda</a>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Kategori</a>
                                <ul class="children mb-0 list-unstyled">
                                    @foreach($kategori as $kate)
                                    <li><a href="/kategori_berita/{{$kate->id}}" title="">{{$kate->nama}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item"><a href="#berita" title="">Daftar Berita</a>
                            </li>
                            <li class="menu-item"><a href="#about" title="">Tentang</a>
                            </li>
                            <li><a href="#contact" title="">Kontak</a></li>
                        </ul>
                    </nav>
                    <!-- <div class="header-btns d-inline-flex flex-wrap align-items-center mt-5">
                        <div class="widget w-100">
                            <form class="searchform position-relative w-100">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div> -->
                </div>
            </div>
        </div><!-- Menubar -->
    </header><!-- Header -->
    <div class="sticky-header style1 w-100">
        <div class="container">
            <div class="menubar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                <div class="logo">
                    <h1 class="mb-0"><a href="/" title="Home"><img width="185" src="{{asset('landing/assets/images/logo.png')}}" alt="Logo"></a></h1>
                </div><!-- Logo -->
                <nav>
                    <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
                        <li class="menu-item active satu"><a href="/" title="">Beranda</a>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Kategori</a>
                            <ul class="children mb-0 list-unstyled">
                                @foreach($kategori as $kate2)

                                <li><a href="/kategori_berita/{{$kate2->id}}" title="">{{$kate2->nama}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item"><a href="#berita" title="">Daftar Berita</a>

                        </li>
                        <li class="menu-item"><a href="#about" title="">Tentang</a>
                        </li>
                        <li><a href="#contact" title="">Kontak</a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div><!-- Sticky Header -->

    <div class="responsive-header position-relative w-100">
        <div class="responsive-topbar w-100">
            <div class="container d-flex flex-wrap align-items-center justify-content-between">
                <div class="logo">
                    <h1 class="mb-0"><a href="/" title="Home"><img class="img-fluid" src="{{asset('landing/assets/images/logo.png')}}" alt="Logo"></a></h1>
                </div><!-- Logo -->
                <div class="header-btns d-inline-flex flex-wrap align-items-center">
                    <a class="res-menu-btn d-inline-block" href="javascript:void(0);" title=""><i class="fas fa-align-justify"></i></a>
                    <div class="header-cart-box position-relative d-inline-block">
                        @if(Auth::check())
                        <a class="cart-btn position-relative" href="javascript:void(0);" title=""></b> <i class="flaticon-user"></i></a>
                        <div class="minicart-dropdown">
                            <ul class="mb-0 list-unstyled w-100">
                                <li>
                                    <div class="minicart-item d-flex flex-wrap w-60">
                                        <div class="minicart-info">
                                            <h6 class="mb-0"><a href="shop-detail.html" title="">{{Auth::user()->name}}</a></h6>
                                            <span class="price">{{Auth::user()->email}}</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="d-block btns-total w-100">
                                <div class="btns-wrap d-flex flex-wrap w-100">
                                    <a class="thm-btn sml-btn brd-btn d-inline-block rounded-pill logout" href="javascript:void(0);" title="" data-id="{{$user->id}}" data-nama="{{$user->name}}">Logout</a>
                                    @if (Auth::user()->role=='admin')
                                    <a class="thm-btn sml-btn brd-btn d-inline-block rounded-pill" href="/dashboard" title="">Dashboard</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div><!-- Responsive Topbar -->
        <div class="responsive-menu w-100">
            <div class="logo">
                <h1 class="mb-0"><a href="/" title="Home"><img class="img-fluid" src="{{asset('landing/assets/images/logo.png')}}" alt="Logo"></a></h1>
            </div><!-- Logo -->
            <ul class="mb-0 list-unstyled w-100">
                <li class="menu-item active satu"><a href="/" title="">Beranda</a>

                </li>
                <li class="menu-item-has-children dua"><a href="javascript:void(0);" title="">Kategori</a>
                    <ul class="children mb-0 list-unstyled">
                        @foreach($kategori as $kate4)
                        <li><a href="/kategori_berita/{{$kate4->id}}" title="">{{$kate4->nama}}</a></li>
                        @endforeach

                    </ul>
                </li>
                <li class="menu-item"><a href="#berita" title="">Daftar Berita</a>

                </li>
                <li class="menu-item"><a href="#about" title="">Tentang</a>

                </li>

                <li><a href="#contact" title="">Kontak</a></li>
                @if(Auth::check())
                <li><a href="javascript:void(0);" class="logout" title="" data-id="{{$user->id}}" data-nama="{{$user->name}}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                @else
                @endif
            </ul>
        </div><!-- Responsive Menu -->
    </div><!-- Responsive Header -->
    <section class="atas2">
    <div class="w-100">
            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="notgeneric125"
                 data-source="gallery" style="background-color:transparent;padding:0px;">
                <div id="rev_slider_4_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-title="Slide Title" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"
                            data-fstransition="random" data-fsmasterspeed="1500" data-fsslotamount="7"
                            data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <img src="landing/assets/images/resources/slide-bg1.jpg" alt="Slide Background 1" class="rev-slidebg img-fluid" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <!-- Layer NR. 1 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide1-layer-1"
                                 data-x="['left','left','left','left']" data-hoffset="['-270','0','0','0']"
                                 data-y="['top','middle','middle','middle']" data-voffset="['190','80','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:0;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                            ><img height="80" width="120" src="landing/assets/images/slide1-shp1.png" alt="Slide 1 Shape 1">
                            </div>

                            <!-- Layer NR. 2 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide1-layer-2"
                                 data-x="['right','left','left','left']" data-hoffset="['-200','0','0','0']"
                                 data-y="['bottom','middle','middle','middle']" data-voffset="['80','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                            ><img height="78" width="109" src="landing/assets/images/slide1-shp2.png" alt="Slide 1 Shape 2">
                            </div>

                            <!-- Layer NR. 3 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide1-layer-3"
                                 data-x="['left','left','left','left']" data-hoffset="['-270','0','0','0']"
                                 data-y="['bottom','middle','middle','middle']" data-voffset="['80','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                            ><img height="130" width="98" src="landing/assets/images/slide1-shp3.png" alt="Slide 1 Shape 3">
                            </div>

                            <!-- Layer NR. 4 -->
                            <div class="tp-caption img-layer tp-resizeme"
                                 id="slide1-layer-4"
                                 data-x="['left','left','left','left']" data-hoffset="['155','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-85','80','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:0;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 2;"
                            ><img height="309" width="158" src="landing/assets/images/slide1-mckp1.png" alt="Slide 1 Mockup 1">
                            </div>

                            <!-- Layer NR. 5 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide1-layer-5"
                                 data-x="['left','left','left','left']" data-hoffset="['-50','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-40','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                            ><img height="531" width="609" src="landing/assets/images/slide1-mckp2.png" alt="Slide 1 Mockup 2">
                            </div>

                            <!-- Layer NR. 6 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide1-layer-6"
                                 data-x="['left','left','left','left']" data-hoffset="['-75','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['40','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 2;"
                            ><img height="201" width="65" src="landing/assets/images/slide1-mckp3.png" alt="Slide 1 Mockup 3">
                            </div>

                            <!-- Layer NR. 7 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide1-layer-7"
                                 data-x="['left','left','left','left']" data-hoffset="['425','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['50','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 2;"
                            ><img height="284" width="150" src="landing/assets/images/slide1-mckp4.png" alt="Slide 1 Mockup 4">
                            </div>

                            <!-- Layer NR. 8 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide1-layer-8"
                                 data-x="['left','left','left','left']" data-hoffset="['20','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['62','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 2;"
                            ><img height="214" width="96" src="landing/assets/images/slide1-mckp5.png" alt="Slide 1 Mockup 5">
                            </div>

                            <!-- Layer NR. 9 -->
                            <div class="tp-caption img-layer tp-resizeme"
                                 id="slide1-layer-9"
                                 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                            ><img height="467" width="463" src="landing/assets/images/slide1-mckp6.png" alt="Slide 1 Mockup 6">
                            </div>

                            <!-- Layer NR. 10 -->
                            <div class="tp-caption tp-resizeme"
                                 id="slide1-layer-10"
                                 data-x="['right','center','center','center']" data-hoffset="['-78','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-70,'-50']"
                                 data-fontsize="['50','45','40','35']"
                                 data-lineheight="['60','55','50','45']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['left','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="letter-spacing: 0;font-weight:700;font-family: Open Sans;color:#3e4a59;">
                                Strategy & planning <br> are fundamentals of <br> our philosophy
                            </div>

                            <!-- Layer NR. 11 -->
                            <div class="tp-caption"
                                 id="slide1-layer-11"
                                 data-x="['right','center','center','center']" data-hoffset="['-62','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','30']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['left','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="line-height: 1.625rem;font-family: Nunito Sans;font-size: 1.0625rem;letter-spacing: 0;font-weight: 400;color: #3e4a59;opacity: .8;">
                                We calculate all economic indicators and understand <br> feasibility of advertising campaign
                            </div>

                            <!-- Layer NR. 12 -->
                            <div class="tp-caption rev-btn thm-btn"
                                 id="slide1-layer-12"
                                 data-x="['right','center','center','center']" data-hoffset="['202','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['140','150','120','120']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="button"
                                 data-actions='[{"event":"click","action":"simplelink","slide":"next","delay":"","target": "_self", "url": "about.html"}]'
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[20,17,14,12]"
                                 data-paddingright="[55,40,35,30]"
                                 data-paddingbottom="[20,17,14,12]"
                                 data-paddingleft="[55,40,35,30]"
                                 style="cursor:pointer;line-height: 1.125rem;display: inline-block;font-family: Nunito Sans;font-size: 1.125rem;letter-spacing: 0;font-weight: 900;border-radius: 2.5rem;">
                                How it Works
                            </div>
                        </li>
                        <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-title="Slide Title" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"
                            data-fstransition="random" data-fsmasterspeed="1500" data-fsslotamount="7"
                            data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <img src="landing/assets/images/resources/slide-bg2.jpg" alt="Slide Background 2" class="rev-slidebg img-fluid" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <!-- Layer NR. 1 -->
                            <div class="tp-caption img-layer img-layer tp-resizeme rs-parallaxlevel-1"
                                 id="slide2-layer-1"
                                 data-x="['right','right','right','right']" data-hoffset="['-170','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['90','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:0;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                            ><img height="450" width="779" src="landing/assets/images/slide2-shp1.png" alt="Slide 2 Shape 1">
                            </div>

                            <!-- Layer NR. 2 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-1"
                                 id="slide2-layer-2"
                                 data-x="['right','right','right','right']" data-hoffset="['20','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['90','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                            ><img height="236" width="415" src="landing/assets/images/slide2-shp2.png" alt="Slide 2 Shape 2">
                            </div>

                            <!-- Layer NR. 3 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide2-layer-3"
                                 data-x="['right','right','right','right']" data-hoffset="['60','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['150','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 4;"
                            ><img height="73" width="35" src="landing/assets/images/slide2-mckp1.png" alt="Slide 2 Mockup 1">
                            </div>

                            <!-- Layer NR. 4 -->
                            <div class="tp-caption img-layer tp-resizeme"
                                 id="slide2-layer-4"
                                 data-x="['right','right','right','right']" data-hoffset="['100','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-20','80','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:0;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 3;"
                            ><img height="82" width="41" src="landing/assets/images/slide2-mckp2.png" alt="Slide 2 Mockup 2">
                            </div>

                            <!-- Layer NR. 5 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide2-layer-5"
                                 data-x="['right','right','right','right']" data-hoffset="['256','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-22','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 3;"
                            ><img height="92" width="43" src="landing/assets/images/slide2-mckp3.png" alt="Slide 2 Mockup 3">
                            </div>

                            <!-- Layer NR. 6 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-1"
                                 id="slide2-layer-6"
                                 data-x="['right','right','right','right']" data-hoffset="['160','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-80','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 3;"
                            ><img height="100" width="45" src="landing/assets/images/slide2-mckp4.png" alt="Slide 2 Mockup 4">
                            </div>

                            <!-- Layer NR. 7 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide2-layer-7"
                                 data-x="['right','right','right','right']" data-hoffset="['110','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['130','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 3;"
                            ><img height="216" width="57" src="landing/assets/images/slide2-mckp5.png" alt="Slide 2 Mockup 5">
                            </div>

                            <!-- Layer NR. 8 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide2-layer-8"
                                 data-x="['right','right','right','right']" data-hoffset="['-135','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['270','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 3;"
                            ><img height="322" width="230" src="landing/assets/images/slide2-mckp6.png" alt="Slide 2 Mockup 6">
                            </div>

                            <!-- Layer NR. 9 -->
                            <div class="tp-caption img-layer tp-resizeme"
                                 id="slide2-layer-9"
                                 data-x="['right','right','right','right']" data-hoffset="['-70','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['65','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 2;"
                            ><img height="256" width="352" src="landing/assets/images/slide2-mckp7.png" alt="Slide 2 Mockup 7">
                            </div>

                            <!-- Layer NR. 10 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide2-layer-10"
                                 data-x="['right','right','right','right']" data-hoffset="['130','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-65','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                            ><img height="389" width="256" src="landing/assets/images/slide2-mckp8.png" alt="Slide 2 Mockup 8">
                            </div>

                            <!-- Layer NR. 11 -->
                            <div class="tp-caption tp-resizeme"
                                 id="slide2-layer-11"
                                 data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-70,'-50']"
                                 data-fontsize="['50','45','40','35']"
                                 data-lineheight="['60','55','50','45']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['left','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="letter-spacing: 0;font-weight:700;font-family: Open Sans;color:#3e4a59;">
                                Ultimate theme app <br> for your customer <br> support
                            </div>

                            <!-- Layer NR. 12 -->
                            <div class="tp-caption"
                                 id="slide2-layer-12"
                                 data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','30']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['left','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="line-height: 1.625rem;font-family: Nunito Sans;font-size: 1.0625rem;letter-spacing: 0;font-weight: 400;color: #3e4a59;opacity: .8;">
                                We calculate all economic indicators and understand <br> feasibility of advertising campaign
                            </div>

                            <!-- Layer NR. 13 -->
                            <div class="tp-caption rev-btn thm-btn"
                                 id="slide2-layer-13"
                                 data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['140','150','120','120']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="button"
                                 data-actions='[{"event":"click","action":"simplelink","slide":"next","delay":"","target": "_self", "url": "about.html"}]'
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[20,17,14,12]"
                                 data-paddingright="[55,40,35,30]"
                                 data-paddingbottom="[20,17,14,12]"
                                 data-paddingleft="[55,40,35,30]"
                                 style="cursor:pointer;line-height: 1.125rem;display: inline-block;font-family: Nunito Sans;font-size: 1.125rem;letter-spacing: 0;font-weight: 900;border-radius: 2.5rem;">
                                Explore Now
                            </div>
                        </li>
                        <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-title="Slide Title" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"
                            data-fstransition="random" data-fsmasterspeed="1500" data-fsslotamount="7"
                            data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <img src="landing/assets/images/resources/slide-bg3.png" alt="Slide Background 3" class="rev-slidebg img-fluid" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <!-- Layer NR. 1 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-1"
                                 id="slide3-layer-1"
                                 data-x="['right','right','right','right']" data-hoffset="['-90','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:0;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                            ><img height="700" width="760" src="landing/assets/images/slide3-shp1.png" alt="Slide 3 Shape 1">
                            </div>

                            <!-- Layer NR. 2 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide3-layer-2"
                                 data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['30','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 5;"
                            ><img height="367" width="367" src="landing/assets/images/slide3-mckp1.png" alt="Slide 3 Mockup 1">
                            </div>

                            <!-- Layer NR. 3 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide3-layer-3"
                                 data-x="['right','right','right','right']" data-hoffset="['20','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['100','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:0;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 3;"
                            ><img height="379" width="534" src="landing/assets/images/slide3-mckp2.png" alt="Slide 3 Mockup 2">
                            </div>

                            <!-- Layer NR. 4 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide3-layer-4"
                                 data-x="['right','right','right','right']" data-hoffset="['170','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-55','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 4;"
                            ><img height="314" width="287" src="landing/assets/images/slide3-mckp3.png" alt="Slide 3 Mockup 3">
                            </div>

                            <!-- Layer NR. 5 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-1"
                                 id="slide3-layer-5"
                                 data-x="['right','right','right','right']" data-hoffset="['200','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-80','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 4;"
                            ><img height="305" width="330" src="landing/assets/images/slide3-mckp4.png" alt="Slide 3 Mockup 4">
                            </div>

                            <!-- Layer NR. 6 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide3-layer-6"
                                 data-x="['right','right','right','right']" data-hoffset="['220','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-170','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 3;"
                            ><img height="437" width="412" src="landing/assets/images/slide3-mckp5.png" alt="Slide 3 Mockup 5">
                            </div>

                            <!-- Layer NR. 7 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide3-layer-7"
                                 data-x="['right','right','right','right']" data-hoffset="['60','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-170','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 1;"
                            ><img height="313" width="133" src="landing/assets/images/slide3-mckp6.png" alt="Slide 3 Mockup 6">
                            </div>

                            <!-- Layer NR. 8 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2"
                                 id="slide3-layer-8"
                                 data-x="['right','right','right','right']" data-hoffset="['470','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['200','0','0','0']"
                                 data-fontsize="['60','60','50','40']"
                                 data-lineheight="['70','70','60','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 3;"
                            ><img height="213" width="122" src="landing/assets/images/slide3-mckp7.png" alt="Slide 3 Mockup 7">
                            </div>

                            <!-- Layer NR. 9 -->
                            <div class="tp-caption tp-resizeme"
                                 id="slide3-layer-9"
                                 data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-70,'-50']"
                                 data-fontsize="['50','45','40','35']"
                                 data-lineheight="['60','55','50','45']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['left','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="letter-spacing: 0;font-weight:700;font-family: Open Sans;color:#3e4a59;">
                                Performing <br> brilliantly to boost <br> your business
                            </div>

                            <!-- Layer NR. 10 -->
                            <div class="tp-caption"
                                 id="slide3-layer-10"
                                 data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','30']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['left','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="line-height: 1.625rem;font-family: Nunito Sans;font-size: 1.0625rem;letter-spacing: 0;font-weight: 400;color: #3e4a59;opacity: .8;">
                                We calculate all economic indicators and understand <br> feasibility of advertising campaign
                            </div>

                            <!-- Layer NR. 11 -->
                            <div class="tp-caption rev-btn thm-btn"
                                 id="slide3-layer-11"
                                 data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['140','150','120','120']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="button"
                                 data-actions='[{"event":"click","action":"simplelink","slide":"next","delay":"","target": "_self", "url": "contact.html"}]'
                                 data-responsive_offset="on"
                                 data-responsive="on"
                                 data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[20,17,14,12]"
                                 data-paddingright="[55,40,35,30]"
                                 data-paddingbottom="[20,17,14,12]"
                                 data-paddingleft="[55,40,35,30]"
                                 style="cursor:pointer;line-height: 1.125rem;display: inline-block;font-family: Nunito Sans;font-size: 1.125rem;letter-spacing: 0;font-weight: 900;border-radius: 2.5rem;">
                                Talk To Us
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- End Revolution Slider -->
        </div>
    </section>
    <section class="atas">
        <div class="w-100 pt-50 pb-90 position-relative">
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-2" class="particles-js top_left mx-w50 w-100" data-color="#4f66db" data-size="15" data-count="3" data-speed="2" data-hide="767" data-shape="circle" data-mode="bounce">
                    <canvas></canvas>
                </div>
            </div><!-- Particles Wrap -->
            <div class="container">
                <div class="best-seo-wrap position-relative w-100">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-sm-12 col-lg-6 order-lg-1">
                            <div class="mckp-img text-center  w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid suii" src="landing/assets/images/landing.png" alt="Best SEO Mockup" width="650">
                                <span class="shadow"></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="text-box atas w-100">
                                <div class="sec-title w-100 position-relative">
                                    <h2 class="mb-0"><span>Selamat Datang di</span> <br> RadarPgriKu</h2>
                                    <i class="btm-ln bg-color26"></i>
                                </div><!-- Sec Title -->
                                <b>
                                    <p class="mb-0">Jelajahi Seluruh Berita Dan informasi Terbaru SMK PGRI Singosari Disini</p>
                                </b>
                                <a href="#satu"><button class="thm-btn d-inline-block rounded-pill mt-3">Mulai Menjelajah</button></a>
                            </div>
                        </div>
                    </div>
                </div><!-- Best SEO Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 pb-80 position-relative">
            <div class="container" id="satu">
                <div class="sec-title text-center w-100 position-relative">
                    <h2 class="mb-0"><span>Postingan </span> Terbaru</h2>
                    <i class="btm-ln bg-color28"></i>
                </div>
                <div class="blog-wrap blog-wth-sidebar blog-spac position-relative w-100">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-9">
                            <div class="post-box brd-rd15 w-100">
                                <div class="post-img overflow-hidden position-relative w-100">
                                    <a href="/detail_berita/{{$artikelbesar->id}}" title=""><img class="img-fluid-satu w-100" src="{{asset('foto_artikel/'.$artikelbesar->foto)}}" alt="Post Image 8"></a>
                                    <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>{{Carbon\Carbon::parse($artikelbesar->created_at)->isoformat('D')}}</i>{{Carbon\Carbon::parse($artikelbesar->created_at)->isoformat('MMM')}}</span>
                                </div>
                                <div class="post-info w-100">
                                    @if($artikelbesar->kategori_id==1)
                                    <span class="post-cate2 d-block text-uppercase">
                                        @elseif($artikelbesar->kategori_id==2)
                                        <span class="post-cate d-block text-uppercase">
                                            @elseif($artikelbesar->kategori_id==3)
                                            <span class="post-cate3 d-block text-uppercase">
                                                @elseif($artikelbesar->kategori_id==4)
                                                <span class="post-cate4 d-block text-uppercase">
                                                    @elseif($artikelbesar->kategori_id==5)
                                                    <span class="post-cate5 d-block text-uppercase">
                                                        @endif
                                                        <a href="javascript:void(0);" title="">{{$artikelbesar->kategori->nama}}</a></span>
                                                    <h3 class="mb-0">{{$artikelbesar->judul}}</h3>
                                                    <p class="mb-0">{{$artikelbesar->detail_singkat}}</p>
                                                    <div class="post-btm-bar d-flex flex-wrap justify-content-between align-items-center w-100">
                                                        <a class="simple-link d-inline-block text-uppercase" href="/detail_berita/{{$artikelbesar->id}}" title="">Read More
                                                            @if($artikelbesar->kategori_id==1)
                                                            <i class="flaticon-right-arrow text-color27"></i>
                                                            @elseif($artikelbesar->kategori_id==2)
                                                            <i class="flaticon-right-arrow text-color28"></i>
                                                            @elseif($artikelbesar->kategori_id==3)
                                                            <i class="flaticon-right-arrow text-color26"></i>
                                                            @elseif($artikelbesar->kategori_id==4)
                                                            <i class="flaticon-right-arrow text-color3"></i>
                                                            @elseif($artikelbesar->kategori_id==5)
                                                            <i class="flaticon-right-arrow text-color29"></i>
                                                            @endif
                                                        </a>
                                                    </div>
                                                </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-lg-3">
                                    <div class="post-box brd-rd15 w-100">
                                        <div class="post-img overflow-hidden position-relative w-100">
                                            <a href="/detail_berita/{{$artikelkecil1->id}}" title=""><img class="img-fluid-satu w-100" src="{{asset('foto_artikel/'.$artikelkecil1->foto)}}" alt="Post Image 1"></a>
                                            <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>{{Carbon\Carbon::parse($artikelkecil1->created_at)->isoformat('D')}}</i>{{Carbon\Carbon::parse($artikelkecil1->created_at)->isoformat('MMM')}}</span>
                                        </div>
                                        <div class="post-info w-100">
                                            @if($artikelkecil1->kategori_id==1)
                                            <span class="post-cate2 d-block text-uppercase">
                                                @elseif($artikelkecil1->kategori_id==2)
                                                <span class="post-cate d-block text-uppercase">
                                                    @elseif($artikelkecil1->kategori_id==3)
                                                    <span class="post-cate3 d-block text-uppercase">
                                                        @elseif($artikelkecil1->kategori_id==4)
                                                        <span class="post-cate4 d-block text-uppercase">
                                                            @elseif($artikelkecil1->kategori_id==5)
                                                            <span class="post-cate5 d-block text-uppercase">
                                                                @endif
                                                                <a href="javascript:void(0);" title="">{{$artikelkecil1->kategori->nama}}</a></span>
                                                            <h3 class="mb-0"><a href="/detail_berita/{{$artikelkecil1->id}}" title="">{{$artikelkecil1->judul}}</a></h3>
                                                            <p class="mb-0">{{$artikelkecil1->detail_singkat}}</p>
                                                            <a class="simple-link d-inline-block text-uppercase" href="/detail_berita/{{$artikelkecil1->id}}" title="">Read More
                                                                @if($artikelkecil1->kategori_id==1)
                                                                <i class="flaticon-right-arrow text-color27"></i>
                                                                @elseif($artikelkecil1->kategori_id==2)
                                                                <i class="flaticon-right-arrow text-color28"></i>
                                                                @elseif($artikelkecil1->kategori_id==3)
                                                                <i class="flaticon-right-arrow text-color26"></i>
                                                                @elseif($artikelkecil1->kategori_id==4)
                                                                <i class="flaticon-right-arrow text-color3"></i>
                                                                @elseif($artikelkecil1->kategori_id==5)
                                                                <i class="flaticon-right-arrow text-color29"></i>
                                                                @endif
                                                            </a>
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-lg-3">
                                    <div class="post-box brd-rd15 w-100">
                                        <div class="post-img overflow-hidden position-relative w-100">
                                            <a href="/detail_berita/{{$artikelkecil2->id}}" title=""><img class="img-fluid-satu w-100" src="{{asset('foto_artikel/'.$artikelkecil2->foto)}}" alt="Post Image 1"></a>
                                            <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>{{Carbon\Carbon::parse($artikelkecil2->created_at)->isoformat('D')}}</i>{{Carbon\Carbon::parse($artikelkecil2->created_at)->isoformat('MMM')}}</span>
                                        </div>
                                        <div class="post-info w-100">
                                            @if($artikelkecil2->kategori_id==1)
                                            <span class="post-cate2 d-block text-uppercase">
                                                @elseif($artikelkecil2->kategori_id==2)
                                                <span class="post-cate d-block text-uppercase">
                                                    @elseif($artikelkecil2->kategori_id==3)
                                                    <span class="post-cate3 d-block text-uppercase">
                                                        @elseif($artikelkecil2->kategori_id==4)
                                                        <span class="post-cate4 d-block text-uppercase">
                                                            @elseif($artikelkecil2->kategori_id==5)
                                                            <span class="post-cate5 d-block text-uppercase">
                                                                @endif<a href="javascript:void(0);" title="">{{$artikelkecil2->kategori->nama}}</a></span>
                                                            <h3 class="mb-0"><a href="/detail_berita/{{$artikelkecil2->id}}" title="">{{$artikelkecil2->judul}}</a></h3>
                                                            <p class="mb-0">{{$artikelkecil2->detail_singkat}}</p>
                                                            <a class="simple-link d-inline-block text-uppercase" href="/detail_berita/{{$artikelkecil2->id}}" title="">Read More
                                                                @if($artikelkecil2->kategori_id==1)
                                                                <i class="flaticon-right-arrow text-color27"></i>
                                                                @elseif($artikelkecil2->kategori_id==2)
                                                                <i class="flaticon-right-arrow text-color28"></i>
                                                                @elseif($artikelkecil2->kategori_id==3)
                                                                <i class="flaticon-right-arrow text-color26"></i>
                                                                @elseif($artikelkecil2->kategori_id==4)
                                                                <i class="flaticon-right-arrow text-color3"></i>
                                                                @elseif($artikelkecil2->kategori_id==5)
                                                                <i class="flaticon-right-arrow text-color29"></i>
                                                                @endif
                                                            </a>
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-3">
                            <div class="leftside">
                                <div class="theiaStickySidebar">
                                    <aside class="sidebar-wrap w-100 position-relative">
                                        <div class="widget w-100">
                                            <form action="/#berita" class="searchform position-relative w-100" method="get">
                                                <input type="search" name="search" placeholder="Search...">
                                                <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                                            </form>
                                        </div>
                                        <div class="widget widget2 v2 w-100">
                                            <h3>Terbaru</h3>
                                            <div class="recentposts-wrap w-100">
                                                @foreach($artikel2 as $ar1)
                                                <div class="recentpost-box d-flex flex-wrap align-items-center w-100">
                                                    <div class="recentpost-img"><a href="/detail_berita/{{$ar1->id}}" title=""><img class="img-fluid w-100" src="{{asset('foto_artikel/'.$ar1->foto)}}" alt="Recent Post Image 1" height="50"></a></div>
                                                    <div class="recentpost-info 2">
                                                        <h5 class="mb-0"><a href="/detail_berita/{{$ar1->id}}" title="">{{$ar1->judul}}</a></h5>
                                                        <span class="d-block">{{Carbon\Carbon::parse($ar1->created_at)->isoformat('D / MMMM /Y')}}</span>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div><!-- Recent Posts Wrap -->

                                        </div>
                                        <div class="widget v2 w-100">
                                            <h3>Kategori</h3>
                                            <ul class="mb-0 list-unstyled w-100">
                                                @foreach($kategori as $kate3)
                                                <li><a href="/kategori_berita/{{$kate3->id}}" title="">{{$kate3->nama}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="widget widget3 v2 w-100">
                                            <h3>Media Berita</h3>
                                            <div class="insta-gal-wrap w-100">
                                                <div class="row mrg10">
                                                    @foreach($artikelfoto as $ar6)
                                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                                        <div class="insta-gal-item overflow-hidden position-relative w-100"><a class="d-block" href="{{asset('foto_artikel/'.$ar6->foto)}}" data-fancybox="gal" title=""><img class="img-fluid w-100" src="{{asset('foto_artikel/'.$ar6->foto)}}" alt="Instagram Image {{$ar6->id}}" height="50"></a></div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </aside><!-- Sidebar Wrap -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Blog Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 pb-120 position-relative">
            <div class="fixed-bg" style="background-image: url(landing/assets/images/bg-shp-18.png);"></div>
            <div class="particles-wrap position-absolute w-80" id="berita">
                <div id="particle-3" class="particles-js w-80" data-color="#ff4cc9" data-size="5" data-linked="1" data-count="50" data-speed="4" data-hide="500" data-shape="circle" data-mode="out">
                    <canvas></canvas>
                </div>
            </div>
            <div class="sec-title text-center w-100 position-relative mb-4">
                <h2 class="mb-0"><span>Daftar </span> Berita</h2>
                <i class="btm-ln bg-color28"></i>
            </div>
            <div class="blog-wrap blog-spac px-3 position-relative w-100">
                <div class="row mrg30">
                    @foreach($artikel as $ar5)
                    <div class="col-md-6 col-sm-12 col-lg-3 mb-3">
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="/detail_berita/{{$ar5->id}}" title=""><img class="img-fluid w-100" src="{{asset('foto_artikel/'.$ar5->foto)}}" alt="Post Image 1" height="200"></a>
                                <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i></i></span>
                                <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>{{Carbon\Carbon::parse($ar5->created_at)->isoformat('D')}}</i>{{Carbon\Carbon::parse($ar5->created_at)->isoformat('MMM')}}</span>
                            </div>
                            <div class="post-info w-100">
                                @if($ar5->kategori_id==1)
                                <span class="post-cate2 d-block text-uppercase">
                                    @elseif($ar5->kategori_id==2)
                                    <span class="post-cate d-block text-uppercase">
                                        @elseif($ar5->kategori_id==3)
                                        <span class="post-cate3 d-block text-uppercase">
                                            @elseif($ar5->kategori_id==4)
                                            <span class="post-cate4 d-block text-uppercase">
                                                @elseif($ar5->kategori_id==5)
                                                <span class="post-cate5 d-block text-uppercase">
                                                    @endif<a href="javascript:void(0);" title="">{{$ar5->kategori->nama}}</a></span>
                                                <h3 class="mb-0"><a href="/detail_berita/{{$ar5->id}}" title="">{{$ar5->judul}}</a></h3>
                                                <p class="mb-0">{{$ar5->detail_singkat}}</p>
                                                <a class="simple-link d-inline-block text-uppercase" href="/detail_berita/{{$ar5->id}}" title="">Read More
                                                    @if($ar5->kategori_id==1)
                                                    <i class="flaticon-right-arrow text-color27"></i>
                                                    @elseif($ar5->kategori_id==2)
                                                    <i class="flaticon-right-arrow text-color28"></i>
                                                    @elseif($ar5->kategori_id==3)
                                                    <i class="flaticon-right-arrow text-color26"></i>
                                                    @elseif($ar5->kategori_id==4)
                                                    <i class="flaticon-right-arrow text-color3"></i>
                                                    @elseif($ar5->kategori_id==5)
                                                    <i class="flaticon-right-arrow text-color29"></i>
                                                    @endif
                                                </a>
                                            </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{$artikel->links()}}
                    @if(count($artikel))
                    @else
                    <h4 class="kosong mt-3">Maaf Data Yang Anda Cari Tidak Ada :)</h4>
                    <h5 class="kosong mb-12 mt-3">👉 <a href="/">Refresh Page !! </a></h5>
                    @endif
                </div>
                <div class="sec-title text-center w-100 position-relative mb-4">
                    <h2 class="mb-0"><span>Foto </span> Sekolah</h2>
                    <i class="btm-ln bg-color28"></i>
                </div>
                <div class="blog-wrap blog-spac px-3 position-relative w-100 mb-6">
                    <div class="row">
                        <div id="carouselExampleCaptions" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('landing/assets/images/resources/soe.jpg')}}" class="d-block w-100 mbuh" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('landing/assets/images/resources/soe.jpg')}}" class="d-block w-100 mbuh" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('landing/assets/images/resources/soe.jpg')}}" class="d-block w-100 mbuh" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div><!-- Blog Wrap-->
                <div class="scl-anlys-wrap position-relative w-100">
                    <div class="row align-items-center" id="about">
                        <div class="col-md-12 col-sm-12 col-lg-6 order-lg-1">
                            <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="landing/assets/images/resources/tentang.png" alt="Social Media Analysis Mockup"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="text-box w-100">
                                <div class="sec-title w-100 position-relative">
                                    <h2 class="mb-0"> <span>Website </span>RadarPgriKu</h2>
                                    <i class="btm-ln bg-color28"></i>
                                </div><!-- Sec Title -->
                                <p class="mb-0">
                                <h6>Adalah Sebuah Website Yang Dibuat dengan maksud dan Tujuan agar Kalian Mendapatkan Informasi atau Berita Terupdate Seputar Kegiatan,Acara yang dilakukan oleh Siswa Siswi SMK PGRI Singosari.</h6>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Blog Wrap -->
        </div>
    </section>
    <footer>
        <div class="w-100 pt-40 bg-color11 position-relative">
            <div class="container" id="contact">
                <div class="contact-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-5 col-sm-12 col-lg-4">
                            <div class="get-in-touch-wrap bg-color11 brd-rd20 mt-40 position-relative overflow-hidden w-100">
                                <h2 class="mb-0">RadarPgriKu</h2>
                                <p class="mb-0">Jelajahi Informasimu Disini...</p>
                                <div class="contact-info-box mt-40 d-flex flex-wrap w-100">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                    <div class="contact-info-inner">
                                        <h5 class="mb-0">Alamat :</h5>
                                        <p class="mb-0">SMK PGRI Singosari
                                            Jl. Morotanjek No.206, Pangetan, Pagentan, Kec. Singosari, Kabupaten Malang, Jawa Timur</p>
                                    </div>
                                </div>
                                <div class="contact-info-box mt-20 d-flex flex-wrap w-100">
                                    <i class="flaticon-message-closed-envelope"></i>
                                    <div class="contact-info-inner">
                                        <h5 class="mb-0">Email :</h5>
                                        <a href="mailto:info@example.com" title="">info@example.com</a>
                                    </div>
                                </div>
                                <div class="contact-info-box mt-20 d-flex flex-wrap w-100">
                                    <i class="icon-037-smartphone"></i>
                                    <div class="contact-info-inner">
                                        <h5 class="mb-0">No Telfon :</h5>
                                        <a href="tel:(305) 222-3333" title="">+(305) 222-3333</a>
                                    </div>
                                </div>
                                <div class="social-links2 d-flex flex-wrap align-items-center w-100">
                                    <a href="https://www.facebook.com/" title="Facebook" target="_blank">
                                        <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path>
                                            </g>
                                        </svg>
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/" title="Twitter" target="_blank">
                                        <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path>
                                            </g>
                                        </svg>
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                    <a href="https://youtube.com/" title="Youtube" target="_blank">
                                        <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path>
                                            </g>
                                        </svg>
                                        <i class="flaticon-youtube"></i>
                                    </a>
                                    <a href="https://linkedin.com/" title="Linkedin" target="_blank">
                                        <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path>
                                            </g>
                                        </svg>
                                        <i class="fa-brands fa-instagram fa-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-lg-8">
                            <div class="contact-form-wrap mt-40 w-100">
                                <div class="sec-title tiga w-100 position-relative">
                                    <h2 class="mb-0 ">Kirim Sebuah Pesan</h2>
                                    <i class="btm-ln bg-color27"></i>
                                </div><!-- Sec Title -->

                                <form action="/komen" method="post" id="email-form">
                                    @csrf
                                    <div class="form-group w-100">
                                        <div class="response w-100"></div>
                                    </div>
                                    <div class="row mrg10">
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box w-100">
                                                <textarea class="contact_message" name="nama" placeholder="Message" required></textarea>
                                            </div>
                                            <div class="field-btn w-100">
                                                <button class="thm-btnbiru d-inline-block rounded-pill" id="submit" type="submit">Kirimkan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div><!-- Contact Wrap -->
                <div class="contact-map w-100 overflow-hidden mt-50 brd-rd20">
                    <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Smk pgri singosari&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
        </div>
    </footer><!-- Footer -->
    <div class="bottom-bar bg-color12 w-100">
        <div class="container">
            <div class="bottom-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                <p class="mb-0">Copyright &copy; 2022 — SMK PGRI Singosari</p>
                <p class="mb-0">Dibuat Oleh TIM <a href="/lisensi_tim">Siuu</a></p>
            </div>
        </div>
    </div><!-- Bottom Bar -->
</main><!-- Main Wrapper -->
@endsection