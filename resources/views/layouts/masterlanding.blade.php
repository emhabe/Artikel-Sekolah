<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.rainbow-themes.net/seoes/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 00:22:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="icon" href="{{asset('landing/assets/images/logo1.png')}}" sizes="32x32" type="image/png">
    <title>RadarPgriKu Website Artikel</title>
    
    <link rel="stylesheet" href="{{asset('landing/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/responsive.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Revolution Style Sheets -->
    <link rel="stylesheet" href="{{asset('landing/assets/css/revolution/settings.css')}}">
    <!-- Revolution Layers Styles -->
    <link rel="stylesheet" href="{{asset('landing/assets/css/revolution/layers.css')}}">
    <!-- Revolution Navigation Styles -->
    <link rel="stylesheet" href="{{asset('landing/assets/css/revolution/navigation.css')}}">
</head>
<body>
  @yield('content')





<script src="{{asset('landing/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('landing/assets/js/popper.min.js')}}"></script>
<script src="{{asset('landing/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('landing/assets/js/aos.min.js')}}"></script>
<script src="{{asset('landing/assets/js/counterup.min.js')}}"></script>
<script src="{{asset('landing/assets/js/particles.min.js')}}"></script>
<script src="{{asset('landing/assets/js/tilt.jquery.min.js')}}"></script>
<script src="{{asset('landing/assets/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('landing/assets/js/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('landing/assets/js/slick.min.js')}}"></script>
<script src="{{asset('landing/assets/js/scroll-up-bar.min.js')}}"></script>
<script src="{{asset('landing/assets/js/custom-scripts.js')}}"></script>

<script src="{{asset('landing/assets/js/revolution/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('landing/assets/js/revolution/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('landing/assets/js/revolution/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('landing/assets/js/revolution/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('landing/assets/js/revolution/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('landing/assets/js/revolution/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('landing/assets/js/revolution/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('landing/assets/js/revolution/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('landing/assets/js/revolution/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('landing/assets/js/revolution/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('landing/assets/js/revolution/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('landing/assets/js/revolution/revolution-init.js')}}"></script>
<script>
    $('.logout').click(function() {
      var userid = $(this).attr('data-id');
      var nama = $(this).attr('data-nama');
      swal({
          title: "Apakah Anda Yakin ?",
          text: "Hai " + nama + " Kamu Yakin Akan Logout Dari Wesbite ini ?",
          icon: "info",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "/logout/" + ""
            swal("Anda Berhasil Log out !", {
              icon: "success",
            });
          } else {
            swal({
              title: "Log Out Di Batalkan !?",
              icon: "error",

            });
          }
        });
    });
  </script>
  <!-- <style>
body {
	text-align: center;
	font-family: Arial;
	background: #f8f8f8;
}

.buttons {
	margin-top: 160px;
  
  a {
    margin-right: 30px;
    width: 64px;
    height: 64px;
    font-size: 24px;
    display: inline-block;
    position: relative;
    line-height: 64px;
    background-color: #eaeaea;
    background-image: linear-gradient(to bottom, #f6f6f6, #eaeaea);
    border-radius: 32px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .25), 0 2px 3px rgba(0, 0, 0, .1);
    
    &:active {
      top: 1px;
	    background-image: linear-gradient(to bottom, #eaeaea, #f6f6f6);
      
      &::before {
        top: -9px;
      }
    }
    
    &::before {
      content: '';
      position: absolute;
      z-index: -1;
      top: -8px; right: -8px; bottom: -8px; left: -8px;
      background-color: #eaeaea;
      border-radius: 140px;
      opacity: 0.5;
      
      :hover & {
        opacity: 1;
      }
    }
  }
  
  
}

.twitter:hover::before {
	background-color: #c6f0f8;
}

.facebook:hover::before {
	background-color: #dae1f0;
}

.youtube:hover::before {
	background-color: #fadae6;
}

.twitch:hover::before {
	background-color: #f8ebb6;
}

.footer {
	width: 600px;
	margin: auto;
	margin-top: 100px;
	font-size: 15px;
	font-weight: bold;
	color: #cdcdcd;
	text-shadow: 1px 2px 0 #fff;
}

.footer a {
    color: #bebebe;
    text-decoration: none;
}

.footer a:hover {
  color: #bebebe;
  text-decoration: none;
  border-bottom:1px dashed #cdcdcd;
}
</style> -->

</body>

<!-- Mirrored from html.rainbow-themes.net/seoes/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 00:23:13 GMT -->
</html>