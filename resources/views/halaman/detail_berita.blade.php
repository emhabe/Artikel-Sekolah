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
                            <li class="menu-item active satu"><a href="javascript:void(0);" title="">Beranda</a>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Kategori</a>
                                <ul class="children mb-0 list-unstyled">
                                    <li><a href="seo-services.html" title="">SEO Services</a></li>
                                    <li><a href="ppm-services.html" title="">PPM Services</a></li>
                                    <li><a href="digital-marketing.html" title="">Digital Marketing</a></li>
                                    <li><a href="about.html" title="">About Us</a></li>
                                    <li><a href="our-story.html" title="">Our Story</a></li>
                                    <li><a href="team.html" title="">Our Team</a></li>
                                    <li><a href="content-elements.html" title="">Content Elements</a></li>
                                    <li><a href="pricing-table.html" title="">Pricing Tables</a></li>
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
                        <li class="menu-item active satu"><a href="javascript:void(0);" title="">Beranda</a>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Kategori</a>
                            <ul class="children mb-0 list-unstyled">
                                <li><a href="seo-services.html" title="">SEO Services</a></li>
                                <li><a href="ppm-services.html" title="">PPM Services</a></li>
                                <li><a href="digital-marketing.html" title="">Digital Marketing</a></li>
                                <li><a href="about.html" title="">About Us</a></li>
                                <li><a href="our-story.html" title="">Our Story</a></li>
                                <li><a href="team.html" title="">Our Team</a></li>
                                <li><a href="content-elements.html" title="">Content Elements</a></li>
                                <li><a href="pricing-table.html" title="">Pricing Tables</a></li>
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
                <li class="menu-item active satu"><a href="javascript:void(0);" title="">Beranda</a>

                </li>
                <li class="menu-item-has-children dua"><a href="javascript:void(0);" title="">Kategori</a>
                    <ul class="children mb-0 list-unstyled">
                        <li><a href="seo-services.html" title="">SEO Services</a></li>
                        <li><a href="ppm-services.html" title="">PPM Services</a></li>
                        <li><a href="digital-marketing.html" title="">Digital Marketing</a></li>
                        <li><a href="about.html" title="">About Us</a></li>
                        <li><a href="our-story.html" title="">Our Story</a></li>
                        <li><a href="team.html" title="">Our Team</a></li>
                        <li><a href="content-elements.html" title="">Content Elements</a></li>
                        <li><a href="pricing-table.html" title="">Pricing Tables</a></li>
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
        <div class="w-100 pt-120 pb-90 position-relative">
            <div class="container  blog-wth-sidebar blog-spac ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-9">

                        <div class="post-img overflow-hidden position-relative w-100">

                            <div class="post-detail-img w-100">
                                <img class="img-fluid w-100" src="landing/assets/images/resources/blog-detail-img.jpg" alt="Blog Detail Image" height="576" width="1024">
                            </div>
                            <div class="post-detail-desc w-100">

                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget orci non nunc iaculis lobortis. Vestibulum pretium, sapien eget fermentum feugiat, ligula turpis viverra enim, eget luctus nisi nunc hendrerit lorem. Mauris vitae nisl sed purus mattis tincidunt vitae eget nisl. Phasellus semper lorem sed porttitor tempor. Vestibulum blandit at tortor non faucibus. Cras sit amet lorem convallis, scelerisque purus et, elementum ligula.</p>
                                <blockquote>
                                    <p class="mb-0">Maecenas diam dolor, lacinia in leo a, elementum tempus orci. Vivamus aliquet ex vel erat feugiat efficitur. Quisque lacinia imperdiet nunc, sit amet blandit mauris semper et. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur semper dignissim leo, ac malesuada velit tincidunt vel. Donec quam nunc, congue quis magna vitae, interdum sagittis lorem. Proin in faucibus metus.</p>
                                </blockquote>
                                <p class="mb-0">Sed laoreet pharetra magna eu gravida. Nullam massa magna, hendrerit id consequat vitae, semper in sapien. Vivamus sodales dolor quis ipsum imperdiet, nec tempor orci interdum. Nunc facilisis neque id semper ullamcorper. Nam ac faucibus arcu, facilisis finibus urna. Integer pulvinar nulla sit amet ipsum facilisis, sit amet placerat orci pretium. Fusce eget enim maximus, mollis quam vel, sagittis augue.</p>
                                <p class="mb-0">Nullam massa magna, hendrerit id consequat vitae, semper in sapien. Vivamus sodales dolor quis ipsum imperdiet, nec tempor orci interdum. Nunc facilisis neque id semper ullamcorper. Nam ac faucibus arcu, facilisis finibus urna. Integer pulvinar nulla sit amet ipsum facilisis, sit amet placerat orci pretium. Fusce eget enim maximus, mollis quam vel, sagittis augue.</p>
                                <p class="mb-0">Pellentesque venenatis quis elit id maximus. In ligula tellus, placerat ut lobortis ut, tempus commodo felis. Quisque porttitor accumsan neque, accumsan bibendum risus maximus vel. Donec a congue sem. Phasellus venenatis gravida lectus, sed pharetra ex laoreet vel.</p>
                            </div>
                        </div>

                    </div><!-- Post Detail Wrap -->
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="leftside">
                            <div class="theiaStickySidebar">
                                <aside class="sidebar-wrap w-100 position-relative">
                                    <div class="widget w-100">
                                        <form class="searchform position-relative w-100">
                                            <input type="text" placeholder="Search...">
                                            <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                                        </form>
                                    </div>
                                    <div class="widget widget2 v2 w-100">
                                        <h3>Recent Posts</h3>
                                        <div class="recentposts-wrap w-100">
                                            <div class="recentpost-box d-flex flex-wrap align-items-center w-100">
                                                <div class="recentpost-img"><a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/recentpost-img1.jpg" alt="Recent Post Image 1"></a></div>
                                                <div class="recentpost-info 2">
                                                    <h5 class="mb-0"><a href="blog-detail.html" title="">Expect more</a></h5>
                                                    <span class="d-block">July 03 2019</span>
                                                </div>
                                            </div>
                                            <div class="recentpost-box d-flex flex-wrap align-items-center w-100">
                                                <div class="recentpost-img"><a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/recentpost-img2.jpg" alt="Recent Post Image 2"></a></div>
                                                <div class="recentpost-info">
                                                    <h5 class="mb-0"><a href="blog-detail.html" title="">Ideas that soar</a></h5>
                                                    <span class="d-block">June 03 2021</span>
                                                </div>
                                            </div>
                                            <div class="recentpost-box d-flex flex-wrap align-items-center w-100">
                                                <div class="recentpost-img"><a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/recentpost-img3.jpg" alt="Recent Post Image 3"></a></div>
                                                <div class="recentpost-info">
                                                    <h5 class="mb-0"><a href="blog-detail.html" title="">Accelerated Mark</a></h5>
                                                    <span class="d-block">March 23 2020</span>
                                                </div>
                                            </div>
                                            <div class="recentpost-box d-flex flex-wrap align-items-center w-100">
                                                <div class="recentpost-img"><a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/recentpost-img3.jpg" alt="Recent Post Image 3"></a></div>
                                                <div class="recentpost-info">
                                                    <h5 class="mb-0"><a href="blog-detail.html" title="">Accelerated Marketing</a></h5>
                                                    <span class="d-block">March 23 2020</span>
                                                </div>
                                            </div>
                                            <div class="recentpost-box d-flex flex-wrap align-items-center w-100">
                                                <div class="recentpost-img"><a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/recentpost-img3.jpg" alt="Recent Post Image 3"></a></div>
                                                <div class="recentpost-info">
                                                    <h5 class="mb-0"><a href="blog-detail.html" title="">Accelerated Marketing</a></h5>
                                                    <span class="d-block">March 23 2020</span>
                                                </div>
                                            </div>
                                        </div><!-- Recent Posts Wrap -->
                                    </div>
                                    <div class="widget v2 w-100">
                                        <h3>Kategori</h3>
                                        <ul class="mb-0 list-unstyled w-100">
                                            <li><a href="javascript:void(0);" title="">Creativity</a></li>
                                            <li><a href="javascript:void(0);" title="">Footer</a></li>
                                            <li><a href="javascript:void(0);" title="">Marketing</a></li>
                                            <li><a href="javascript:void(0);" title="">Masonry</a></li>
                                            <li><a href="javascript:void(0);" title="">Post Formats</a></li>
                                            <li><a href="javascript:void(0);" title="">SEO</a></li>
                                            <li><a href="javascript:void(0);" title="">Strategy</a></li>
                                        </ul>
                                    </div>
                                </aside><!-- Sidebar Wrap -->
                            </div>
                        </div>
                    </div>
                </div>

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
                <h2 class="mb-0"><span>Postingan </span> Terbaru</h2>
                <i class="btm-ln bg-color28"></i>
            </div>
            <div class="blog-wrap blog-spac px-3 position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/post-img1-1.jpg" alt="Post Image 1" height="576" width="1024"></a>
                                <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>30</i>May</span>
                            </div>
                            <div class="post-info w-100">
                                <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Strategy</a></span>
                                <h3 class="mb-0"><a href="blog-detail.html" title="">Great team</a></h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget orci non nun...</p>
                                <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/post-img1-2.jpg" alt="Post Image 2" height="576" width="1024"></a>
                                <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>20</i>May</span>
                            </div>
                            <div class="post-info w-100">
                                <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Strategy</a></span>
                                <h3 class="mb-0"><a href="blog-detail.html" title="">Amazing support</a></h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget orci non nun...</p>
                                <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/post-img1-3.jpg" alt="Post Image 3" height="576" width="1024"></a>
                                <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>18</i>Mar</span>
                            </div>
                            <div class="post-info w-100">
                                <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Strategy</a></span>
                                <h3 class="mb-0"><a href="blog-detail.html" title="">New team</a></h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget orci non nun...</p>
                                <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/post-img1-4.jpg" alt="Post Image 4" height="576" width="1024"></a>
                                <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>05</i>Jan</span>
                            </div>
                            <div class="post-info w-100">
                                <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Strategy</a></span>
                                <h3 class="mb-0"><a href="blog-detail.html" title="">Better style</a></h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget orci non nun...</p>
                                <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/post-img1-5.jpg" alt="Post Image 5" height="576" width="1024"></a>
                                <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>30</i>May</span>
                            </div>
                            <div class="post-info w-100">
                                <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Marketing</a></span>
                                <h3 class="mb-0"><a href="blog-detail.html" title="">Specialists in team</a></h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget orci non nun...</p>
                                <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/post-img1-6.jpg" alt="Post Image 6" height="576" width="1024"></a>
                                <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>20</i>May</span>
                            </div>
                            <div class="post-info w-100">
                                <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Marketing</a></span>
                                <h3 class="mb-0"><a href="blog-detail.html" title="">Elegant style</a></h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget orci non nun...</p>
                                <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/post-img1-7.jpg" alt="Post Image 7" height="576" width="1024"></a>
                                <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>18</i>Mar</span>
                            </div>
                            <div class="post-info w-100">
                                <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Marketing</a></span>
                                <h3 class="mb-0"><a href="blog-detail.html" title="">We know trends</a></h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget orci non nun...</p>
                                <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="post-box brd-rd15 w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/post-img1-8.jpg" alt="Post Image 8" height="576" width="1024"></a>
                                <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>05</i>Jan</span>
                            </div>
                            <div class="post-info w-100">
                                <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Marketing</a></span>
                                <h3 class="mb-0"><a href="blog-detail.html" title="">Let’s talk test</a></h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget orci non nun...</p>
                                <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
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
                                        <i class="flaticon-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-lg-8">
                            <div class="contact-form-wrap mt-40 w-100">
                                <div class="sec-title tiga w-100 position-relative">
                                    <h2 class="mb-0 ">Send a Message</h2>
                                    <i class="btm-ln bg-color3"></i>
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
                                                <button class="thm-btn d-inline-block rounded-pill" id="submit" type="submit">Send A Message</button>
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