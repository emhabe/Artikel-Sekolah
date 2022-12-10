@extends('layouts.masterlanding')
@section('content')
@vite(['resource/css/app.css','resource/js/app.js'])
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
                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="flaticon-facebook"></i></a>
                            <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="flaticon-twitter"></i></a>
                            <a href="https://youtube.com/" title="Youtube" target="_blank"><i class="flaticon-youtube"></i></a>
                            <a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="flaticon-linkedin"></i></a>
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
                            <li class="menu-item"><a href="javascript:void(0);" title="">Beranda</a>
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
                            <li class="menu-item"><a href="javascript:void(0);" title="">Daftar Berita</a>
                            </li>
                            <li class="menu-item"><a href="javascript:void(0);" title="">Tentang</a>
                            </li>
                            <li><a href="contact.html" title="">Contacts</a></li>
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
                        <li class="menu-item"><a href="javascript:void(0);" title="">Beranda</a>
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
                        <li class="menu-item"><a href="javascript:void(0);" title="">Daftar Berita</a>

                        </li>
                        <li class="menu-item"><a href="javascript:void(0);" title="">Tentang</a>
                        </li>
                        <li><a href="contact.html" title="">Kontak</a></li>
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
                </div>
            </div>
        </div><!-- Responsive Topbar -->
        <div class="responsive-menu w-100">
            <div class="logo">
                <h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="{{asset('landing/assets/images/logo%402x.png')}}" alt="Logo"></a></h1>
            </div><!-- Logo -->
            <ul class="mb-0 list-unstyled w-100">
                <li class="menu-item"><a href="javascript:void(0);" title="">Beranda</a>

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
                <li class="menu-item"><a href="javascript:void(0);" title="">Daftar Berita</a>

                </li>
                <li class="menu-item"><a href="javascript:void(0);" title="">Tentang</a>

                </li>

                <li><a href="contact.html" title="">Kontak</a></li>
            </ul>
        </div><!-- Responsive Menu -->
    </div><!-- Responsive Header -->
    <section class="mt-5">
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
                            <div class="mckp-img text-center  w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid suii" src="landing/assets/images/land.jpg" alt="Best SEO Mockup" height="480" width="516"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="text-box w-100">
                                <div class="sec-title w-100 position-relative">
                                    <h2 class="mb-0"><span>Selamat Datang di</span> <br> Nama Website</h2>
                                    <i class="btm-ln bg-color14"></i>
                                </div><!-- Sec Title -->
                                <p class="mb-0">Di Website ini Kalian Akan Mendapatkan Info atau Berita Terbaru Dari....</p>

                            </div>
                        </div>
                    </div>
                </div><!-- Best SEO Wrap -->
            </div>
        </div>
    </section>
    <section id="satu">
        <div class="w-100 pt-120 pb-120 position-relative">
            <div class="container">
                <div class="sec-title text-center w-100 position-relative">
                    <h2 class="mb-0"><span>Postingan </span> Terbaru</h2>
                    <i class="btm-ln bg-color28"></i>
                </div>
                <div class="blog-wrap blog-wth-sidebar blog-spac position-relative w-100">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-9">
                            <div class="post-box brd-rd15 w-100">
                                <div class="post-img overflow-hidden position-relative w-100">
                                    <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/post-img1-8.jpg" alt="Post Image 8" height="576" width="1024"></a>
                                    <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>20</i>May</span>
                                </div>
                                <div class="post-info w-100">
                                    <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Marketing</a></span>
                                    <h3 class="mb-0">Let's talk test</h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget orci non nunc iaculis lobortis. Vestibulum pretium, sapien eget fermentum feugiat, ligula turpis viverra enim, eget luctus nisi nunc hendrerit lorem. Mauris vitae nisl sed purus mattis tincidunt vitae eget nisl. Phasellus semper lorem sed porttitor tem...</p>
                                    <div class="post-btm-bar d-flex flex-wrap justify-content-between align-items-center w-100">
                                        <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color27"></i></a>
                                        <span class="post-athr d-block position-relative">By <a href="javascript:void(0);" title="">Admin</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-lg-3">
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
                                <div class="col-md-6 col-lg-6 col-lg-3">
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
                            </div>
                        </div>
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
                                        <div class="widget v2 w-100">
                                            <h3>Recent Posts</h3>
                                            <div class="recentposts-wrap w-100">
                                                <div class="recentpost-box d-flex flex-wrap align-items-center w-100">
                                                    <div class="recentpost-img"><a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/recentpost-img1.jpg" alt="Recent Post Image 1"></a></div>
                                                    <div class="recentpost-info">
                                                        <h5 class="mb-0"><a href="blog-detail.html" title="">Expect more</a></h5>
                                                        <span class="d-block"><a href="javascript:void(0);" title="">July 03 2019</a></span>
                                                    </div>
                                                </div>
                                                <div class="recentpost-box d-flex flex-wrap align-items-center w-100">
                                                    <div class="recentpost-img"><a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/recentpost-img2.jpg" alt="Recent Post Image 2"></a></div>
                                                    <div class="recentpost-info">
                                                        <h5 class="mb-0"><a href="blog-detail.html" title="">Ideas that soar</a></h5>
                                                        <span class="d-block"><a href="javascript:void(0);" title="">June 03 2021</a></span>
                                                    </div>
                                                </div>
                                                <div class="recentpost-box d-flex flex-wrap align-items-center w-100">
                                                    <div class="recentpost-img"><a href="blog-detail.html" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/recentpost-img3.jpg" alt="Recent Post Image 3"></a></div>
                                                    <div class="recentpost-info">
                                                        <h5 class="mb-0"><a href="blog-detail.html" title="">Accelerated Marketing</a></h5>
                                                        <span class="d-block"><a href="javascript:void(0);" title="">March 23 2020</a></span>
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
                                        <div class="widget v2 w-100">
                                            <h3>Instagram</h3>
                                            <div class="insta-gal-wrap w-100">
                                                <div class="row mrg10">
                                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                                        <div class="insta-gal-item overflow-hidden position-relative w-100"><a class="d-block" href="landing/assets/images/resources/insta-img1.jpg" data-fancybox="gal" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/insta-img1.jpg" alt="Instagram Image 1"></a></div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                                        <div class="insta-gal-item overflow-hidden position-relative w-100"><a class="d-block" href="landing/assets/images/resources/insta-img2.jpg" data-fancybox="gal" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/insta-img2.jpg" alt="Instagram Image 2"></a></div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                                        <div class="insta-gal-item overflow-hidden position-relative w-100"><a class="d-block" href="landing/assets/images/resources/insta-img3.jpg" data-fancybox="gal" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/insta-img3.jpg" alt="Instagram Image 3"></a></div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                                        <div class="insta-gal-item overflow-hidden position-relative w-100"><a class="d-block" href="landing/assets/images/resources/insta-img4.jpg" data-fancybox="gal" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/insta-img4.jpg" alt="Instagram Image 4"></a></div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                                        <div class="insta-gal-item overflow-hidden position-relative w-100"><a class="d-block" href="landing/assets/images/resources/insta-img5.jpg" data-fancybox="gal" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/insta-img5.jpg" alt="Instagram Image 5"></a></div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                                        <div class="insta-gal-item overflow-hidden position-relative w-100"><a class="d-block" href="landing/assets/images/resources/insta-img6.jpg" data-fancybox="gal" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/insta-img6.jpg" alt="Instagram Image 6"></a></div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                                        <div class="insta-gal-item overflow-hidden position-relative w-100"><a class="d-block" href="landing/assets/images/resources/insta-img7.jpg" data-fancybox="gal" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/insta-img7.jpg" alt="Instagram Image 7"></a></div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                                        <div class="insta-gal-item overflow-hidden position-relative w-100"><a class="d-block" href="landing/assets/images/resources/insta-img8.jpg" data-fancybox="gal" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/insta-img8.jpg" alt="Instagram Image 8"></a></div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                                        <div class="insta-gal-item overflow-hidden position-relative w-100"><a class="d-block" href="landing/assets/images/resources/insta-img9.jpg" data-fancybox="gal" title=""><img class="img-fluid w-100" src="landing/assets/images/resources/insta-img9.jpg" alt="Instagram Image 9"></a></div>
                                                    </div>
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
            <div class="particles-wrap position-absolute w-80">
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
    <section>
        <div class="w-100 pt-120 grad-bg1 pb-120 position-relative">
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-4" class="particles-js w-100" data-color="#3E4A59" data-size="80" data-count="5" data-speed="2" data-hide="767" data-shape="image" data-mode="bounce" data-image-url="landing/assets/images/particle-3.png" data-image-width="150" data-image-height="150">
                    <canvas></canvas>
                </div>
            </div><!-- Particles Wrap -->
            <div class="container">
                <div class="req-mckp-wrap text-center position-relative w-100">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-sm-12 col-lg-5">
                            <div class="mckp-img d-none d-lg-block tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="landing/assets/images/resources/subm-request-mckp.png" alt="Submit Request Mockup" height="510" width="445"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-7">
                            <div class="req-frm-wrap d-flex flex-wrap justify-content-center align-items-center text-center position-relative w-100" style="background-image: url(landing/assets/images/req-frm-mckp.png);">
                                <div class="req-frm-inner">
                                    <div class="sec-title text-center w-100 position-relative">
                                        <h2 class="mb-0"><span>Submit a</span> Request</h2>
                                        <i class="btm-ln bg-color3"></i>
                                    </div><!-- Sec Title -->
                                    <p class="mb-0">We will call you in 20 mins. We answer all questions and tell about our services.</p>
                                    <form class="w-100" action="#" method="post" id="email-form">
                                        <div class="form-group w-100">
                                            <div class="response w-100"></div>
                                        </div>
                                        <div class="field-box w-100">
                                            <input class="fname" type="text" name="fname" placeholder="What is your name" required>
                                        </div>
                                        <div class="field-box w-100">
                                            <input class="phone" type="tel" name="phone" placeholder="Phone number" required>
                                        </div>
                                        <div class="field-box w-100">
                                            <input class="ctime" type="text" name="ctime" placeholder="Best time to call" required>
                                        </div>
                                        <div class="field-btn w-100">
                                            <button class="thm-btn d-inline-block rounded-pill" id="submit" type="submit">Call Me</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Request & Mockup Wrap -->
            </div>
        </div>
    </section>
    <footer>
        <div class="w-100 pt-40 bg-color11 position-relative">
            <div class="container">
                <div class="logo text-center w-100">
                    <h1 class="mb-0"><a href="index.html" title="Logo"><img class="img-fluid" src="landing/assets/images/logo%402x-white.png" alt="Logo White" height="89" width="287"></a></h1>
                </div>
                <div class="footer-data position-relative w-100">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="widget w-100">
                                <ul class="footer-contact-list list-unstyled mb-0 w-100">
                                    <li><i class="flaticon-telephone-auricular-with-cable"></i><a href="tel:(305) 222-3333" title="">+(305) 222-3333</a></li>
                                    <li><i class="flaticon-email"></i><a href="mailto:info@example.com" title="">info@example.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="widget text-center w-100">
                                <h4>Get latest SEO tips from us!</h4>
                                <div class="newsletter-wrap w-100">
                                    <form class="newsletter position-relative w-100" id="subscribe-form" method="post" action="#">
                                        <input class="rounded-pill email w-100" type="email" name="email" placeholder="Enter your email" required>
                                        <button class="thm-btn d-inline-block rounded-pill position-absolute" id="subscribe-button"><i class="flaticon-telegram"></i></button>
                                        <div class="response w-100"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="widget text-end w-100">
                                <h4>Subscribe to our social</h4>
                                <div class="social-links2 d-flex flex-wrap align-items-center justify-content-end w-100">
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
                    </div>
                </div><!-- Footer Data -->
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