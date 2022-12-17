@extends('layouts.masterlanding')
@section('content')
<main>
    <div class="instagram"></div>
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
                            <a class="cart-btn position-relative" href="javascript:void(0);" title="" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"><b>Login</b> <i class="flaticon-user"></i></a>
                            <div class="minicart-dropdown">
                                <ul class="mb-0 list-unstyled w-100">
                                    <li>
                                        <div class="minicart-item d-flex flex-wrap w-60">
                                            <div class="minicart-info">
                                                <h6 class="mb-0"><a href="shop-detail.html" title="">Guest1234</a></h6>
                                                <span class="price">$254.00</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="d-block btns-total w-100">
                                    <div class="btns-wrap d-flex flex-wrap w-100">
                                        <a class="thm-btn sml-btn brd-btn d-inline-block rounded-pill" href="checkout.html" title="">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Topbar -->
        <div class="menubar w-100">
            <div class="container">
                <div class="menubar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo">
                        <h1 class="mb-0"><a href="index.html" title="Home"><img width="185" src="{{asset('landing/assets/images/logo%402x.png')}}" alt="Logo"></a></h1>
                    </div><!-- Logo -->
                    <nav>
                        <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
                            <li class="menu-item"><a href="/" title="">Beranda</a>
                            </li>
                            <li class="menu-item-has-children active satu"><a href="javascript:void(0);" title="">Kategori</a>
                                <ul class="children mb-0 list-unstyled">
                                    @foreach($kategori as $kt)
                                    <li><a href="seo-services.html" title="">{{$kt->nama}}</a></li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="menu-item"><a href="#berita" title="">Daftar Berita</a>
                            </li>
                            <li class="menu-item"><a href="javascript:void(0);" title="">Tentang</a>
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
                    <h1 class="mb-0"><a href="index.html" title="Home"><img width="185" src="{{asset('landing/assets/images/logo%402x.png')}}" alt="Logo"></a></h1>
                </div><!-- Logo -->
                <nav>
                    <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
                        <li class="menu-item"><a href="/" title="">Beranda</a>
                        </li>
                        <li class="menu-item-has-children active satu"><a href="javascript:void(0);" title="">Kategori</a>
                            <ul class="children mb-0 list-unstyled">
                                @foreach($kategori as $kt1)
                                <li><a href="seo-services.html" title="">{{$kt1->nama}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item"><a href="#berita" title="">Daftar Berita</a>

                        </li>
                        <li class="menu-item"><a href="javascript:void(0);" title="">Tentang</a>
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
                    <h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="{{asset('landing/assets/images/logo%402x.png')}}" alt="Logo"></a></h1>
                </div><!-- Logo -->
                <div class="header-btns d-inline-flex flex-wrap align-items-center">
                    <a class="res-menu-btn d-inline-block" href="javascript:void(0);" title=""><i class="fas fa-align-justify"></i></a>
                    <a class="cart-btn position-relative" href="javascript:void(0);" title=""><i class="flaticon-user"></i></a>
                </div>
            </div>
        </div><!-- Responsive Topbar -->
        <div class="responsive-menu w-100">
            <div class="logo">
                <h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="{{asset('landing/assets/images/logo%402x.png')}}" alt="Logo"></a></h1>
            </div><!-- Logo -->
            <ul class="mb-0 list-unstyled w-100">
                <li class="menu-item"><a href="/" title="">Beranda</a>

                </li>
                <li class="menu-item-has-children active satu"><a href="javascript:void(0);" title="">Kategori</a>
                    <ul class="children mb-0 list-unstyled">
                        @foreach($kategori as $kt3)
                        <li><a href="seo-services.html" title="">{{$kt3->nama}}</a></li>
                        @endforeach

                    </ul>
                </li>
                <li class="menu-item"><a href="#berita" title="">Daftar Berita</a>

                </li>
                <li class="menu-item"><a href="javascript:void(0);" title="">Tentang</a>

                </li>

                <li><a href="#contact" title="">Kontak</a></li>
            </ul>
        </div><!-- Responsive Menu -->
    </div><!-- Responsive Header -->
    <section class="atas">
        <div class="w-100 pt-110 pb-90 position-relative">
            <div class="fixed-bg" style="background-image: url(landing/assets/images/bg-shp-18.png);"></div>
            <div class="particles-wrap position-absolute w-80" id="berita">
                <div id="particle-3" class="particles-js w-80" data-color="#ff4cc9" data-size="5" data-linked="1" data-count="50" data-speed="4" data-hide="500" data-shape="circle" data-mode="out">
                    <canvas></canvas>
                </div>
            </div>
            <div class="sec-title text-center w-100 position-relative mb-4">
                <h2 class="mb-0"><span>Postingan </span> Terbaru nama_kategori</h2>
                <i class="btm-ln bg-color28"></i>
            </div>
            <div class="col-lg-3 position-relative justify-content-between ">
            <div class="widget w-90 ms-3">
                <form class="searchform position-relative w-100">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                </form>
            </div>
            </div>
            <div class="blog-wrap blog-spac px-3 position-relative w-100">
                <div class="row mrg30">
                    @foreach($artikel as $ar5)
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="/detail_berita/{{$ar5->id}}" title=""><img class="img-fluid w-100" src="{{asset('foto_artikel/'.$ar5->foto)}}" alt="Post Image 1" height="200"></a>
                                <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i></i></span>
                                <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>{{Carbon\Carbon::parse($ar5->created_at)->isoformat('D')}}</i>{{Carbon\Carbon::parse($ar5->created_at)->isoformat('MMM')}}</span>
                            </div>
                            <div class="post-info w-100">
                                @if($ar5->kategori_id=1)
                                <span class="post-cate2 d-block text-uppercase">
                                    @elseif($artikelbesar->kategori_id=2)
                                    <span class="post-cate1 d-block text-uppercase">
                                        @endif<a href="javascript:void(0);" title="">{{$ar5->kategori->nama}}</a></span>
                                    <h3 class="mb-0"><a href="/detail_berita/{{$ar5->id}}" title="">{{$ar5->judul}}</a></h3>
                                    <p class="mb-0">{{$ar5->detail_singkat}}</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="/detail_berita/{{$ar5->id}}" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="scl-anlys-wrap position-relative w-100">
                    <div class="row align-items-center" id="about">
                        <div class="col-md-12 col-sm-12 col-lg-6 order-lg-1">
                            <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="../landing/assets/images/resources/tentang.png" alt="Social Media Analysis Mockup"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="text-box w-100">
                                <div class="sec-title w-100 position-relative">
                                    <h2 class="mb-0"> <span>Website </span>RadarPgriKu</h2>
                                    <i class="btm-ln bg-color28"></i>
                                </div><!-- Sec Title -->
                                <p class="mb-0">Adalah Sebuah Website Yang Dibuat dengan maksud dan Tujuan agar Kalian Mendapatkan Informasi atau Berita Terupdate Seputar Kegiatan,Acara yang dilakukan oleh Siswa Siswi SMK PGRI Singosari.</p>
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
                                <h2 class="mb-0">Get in Touch</h2>
                                <p class="mb-0">SEOES is a USA search engine marketing agency, that deliver digital</p>
                                <div class="contact-info-box mt-40 d-flex flex-wrap w-100">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                    <div class="contact-info-inner">
                                        <h5 class="mb-0">Visit Us:</h5>
                                        <p class="mb-0">27 Division St, New York, NY 10002, USA</p>
                                    </div>
                                </div>
                                <div class="contact-info-box mt-20 d-flex flex-wrap w-100">
                                    <i class="flaticon-message-closed-envelope"></i>
                                    <div class="contact-info-inner">
                                        <h5 class="mb-0">Mail Us:</h5>
                                        <a href="mailto:info@example.com" title="">info@example.com</a>
                                    </div>
                                </div>
                                <div class="contact-info-box mt-20 d-flex flex-wrap w-100">
                                    <i class="icon-037-smartphone"></i>
                                    <div class="contact-info-inner">
                                        <h5 class="mb-0">Phone Us:</h5>
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
                                    <h2 class="mb-0 ">Send a Message</h2>
                                    <i class="btm-ln bg-color27"></i>
                                </div><!-- Sec Title -->
                                <form action="#" method="post" id="email-form">
                                    <div class="form-group w-100">
                                        <div class="response w-100"></div>
                                    </div>
                                    <div class="row mrg10">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="field-box w-100">
                                                <input class="fname" type="text" name="fname" placeholder="First Name *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="field-box w-100">
                                                <input class="lname" type="text" name="lname" placeholder="Last Name *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="field-box w-100">
                                                <input class="email" type="email" name="email" placeholder="Email *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="field-box w-100">
                                                <input class="phone" type="tel" name="phone" placeholder="Phone" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box w-100">
                                                <textarea class="contact_message" name="contact_message" placeholder="Message" required></textarea>
                                            </div>
                                            <div class="field-btn w-100">
                                                <button class="thm-btnbiru d-inline-block rounded-pill" id="submit" type="submit">Send A Message</button>
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
                <p class="mb-0">Copyright &copy; 2021 — All rights reserved</p>
                <p class="mb-0">We on a mission to build a better future where technology creates good jobs for everyone.</p>
            </div>
        </div>
    </div><!-- Bottom Bar -->
</main><!-- Main Wrapper -->
@endsection