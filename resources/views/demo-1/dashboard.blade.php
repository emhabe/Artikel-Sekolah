<!DOCTYPE html>

<html lang="en" class="light-style  layout-menu-fixed   " dir="ltr" data-theme="theme-default" data-assets-path="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/" data-base-url="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" data-framework="laravel" data-template="vertical-menu-theme-default-light">


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2022 10:42:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard - Analytics |
    Sneat -
    Bootstrap 5 HTML Admin Template - Pro</title>
  <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="0MjIUPhqNgzfdBvHYUi8hPIKT4bCRfWbRTmBQEkI">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-laravel-admin-template/">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />

  <!-- Include Styles -->
  <!-- BEGIN: Theme CSS-->
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxiconse04f.css?id=7bed0c381d8a5b57f43c7bd313947977')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesomeb34a.css?id=f55d5b6721febc124275199b7dddbb5b')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/fonts/flag-iconsc977.css?id=7018802e2db10780041f73a184e4bebe')}}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/core29d0.css?id=7ea028d8943e4d11544610602e504b70')}}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/theme-defaultde12.css?id=3cdafbb15e4b7f9cbb567018a632af10')}}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{asset('assets/css/demo6e6a.css?id=8a804dae81f41c0f9fcbef2fa8316bdd')}}" />


  <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbarb440.css?id=d9fa6469688548dca3b7e6bd32cb0dc6')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead3881.css?id=8fc311b79b2aeabf94b343b6337656cf')}}" />

  <!-- Vendor Styles -->
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">


  <!-- Page Styles -->

  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- laravel style -->
  <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
  <!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="{{asset('assets/vendor/js/template-customizer.js')}}"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{asset('assets/js/config.js')}}"></script>

  <script>
    window.templateCustomizer = new TemplateCustomizer({
      cssPath: '',
      themesPath: '',
      defaultShowDropdownOnHover: true, // true/false (for horizontal layout only)
      displayCustomizer: true,
      lang: 'en',
      pathResolver: function (path) {
        var resolvedPaths = {
          // Core stylesheets
          'core.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=7ea028d8943e4d11544610602e504b70',
          'core-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=4d3d0e2ab14ecbed2083861be9812a6f',

          // Themes
          'theme-default.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=3cdafbb15e4b7f9cbb567018a632af10',
          'theme-default-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=05dbf7c059f1493714333faa2b3b9551',
          'theme-bordered.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=d6c71dfec8b2243aaa4ff471ffcb4e24',
          'theme-bordered-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=f6ff29f111b4fa9e7eaf2b1123ef9dfe',
          'theme-semi-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=ab4aad06ff175954e3058d7dc07cca0d',
          'theme-semi-dark-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=366f5c60c757a1a9970a4c91c66b0cb2',
        }
        return resolvedPaths[path] || path;
      },
      'controls': ["rtl", "style", "layoutType", "showDropdownOnHover", "layoutNavbarFixed", "layoutFooterFixed", "themes"],
    });
  </script>
  <!-- beautify ignore:end -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
  </script>
</head>

<body>
  <!-- Layout Content -->
  <div class="layout-wrapper layout-content-navbar ">
    <div class="layout-container">

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

        <!-- ! Hide app brand if navbar-full -->
        <div class="app-brand demo">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="app-brand-link">
            <span class="app-brand-logo demo">
              <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
                  <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
                  <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
                  <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
                </defs>
                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                    <g id="Icon" transform="translate(27.000000, 15.000000)">
                      <g id="Mask" transform="translate(0.000000, 8.000000)">
                        <mask id="mask-2" fill="white">
                          <use xlink:href="#path-1"></use>
                        </mask>
                        <use fill="#696cff" xlink:href="#path-1"></use>
                        <g id="Path-3" mask="url(#mask-2)">
                          <use fill="#696cff" xlink:href="#path-3"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                        </g>
                        <g id="Path-4" mask="url(#mask-2)">
                          <use fill="#696cff" xlink:href="#path-4"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                        </g>
                      </g>
                      <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                        <use fill="#696cff" xlink:href="#path-5"></use>
                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">Sneat</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">








          <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div>Dashboards</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item active">
                <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="menu-link">
                  <div>Analytics</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="dashboard/crm.html" class="menu-link">
                  <div>CRM</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="dashboard/ecommerce.html" class="menu-link">
                  <div>eCommerce</div>
                </a>


              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div>Layouts</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="layouts/collapsed-menu.html" class="menu-link">
                  <div>Collapsed menu</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="layouts/content-navbar.html" class="menu-link">
                  <div>Content navbar</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="layouts/content-nav-sidebar.html" class="menu-link">
                  <div>Content nav + Sidebar</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="layouts/horizontal.html" class="menu-link" target="_blank">
                  <div>Horizontal</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="layouts/without-menu.html" class="menu-link">
                  <div>Without menu</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="layouts/without-navbar.html" class="menu-link">
                  <div>Without navbar</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="layouts/fluid.html" class="menu-link">
                  <div>Fluid</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="layouts/container.html" class="menu-link">
                  <div>Container</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="layouts/blank.html" class="menu-link" target="_blank">
                  <div>Blank</div>
                </a>


              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bxl-php"></i>
              <div>Laravel Example</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="laravel/user-management.html" class="menu-link">
                  <div>User Management</div>
                </a>


              </li>
            </ul>
          </li>




          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Apps &amp; Pages</span>
          </li>









          <li class="menu-item ">
            <a href="app/calendar.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-calendar"></i>
              <div>Calendar</div>
            </a>


          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-food-menu"></i>
              <div>Invoice</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="app/invoice/list.html" class="menu-link">
                  <div>List</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="app/invoice/preview.html" class="menu-link">
                  <div>Preview</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="app/invoice/edit.html" class="menu-link">
                  <div>Edit</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="app/invoice/add.html" class="menu-link">
                  <div>Add</div>
                </a>


              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user"></i>
              <div>Users</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="app/user/list.html" class="menu-link">
                  <div>List</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <div>View</div>
                </a>


                <ul class="menu-sub">



                  <li class="menu-item ">
                    <a href="app/user/view/account.html" class="menu-link">
                      <div>Account</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="app/user/view/security.html" class="menu-link">
                      <div>Security</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="app/user/view/billing.html" class="menu-link">
                      <div>Billing &amp; Plans</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="app/user/view/notifications.html" class="menu-link">
                      <div>Notifications</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="app/user/view/connections.html" class="menu-link">
                      <div>Connections</div>
                    </a>


                  </li>
                </ul>
              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-check-shield"></i>
              <div>Roles &amp; Permissions</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="app/access-roles.html" class="menu-link">
                  <div>Roles</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="app/access-permission.html" class="menu-link">
                  <div>Permission</div>
                </a>


              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div>Pages</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <div>User Profile</div>
                </a>


                <ul class="menu-sub">



                  <li class="menu-item ">
                    <a href="pages/profile-user.html" class="menu-link">
                      <div>Profile</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="pages/profile-teams.html" class="menu-link">
                      <div>Teams</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="pages/profile-projects.html" class="menu-link">
                      <div>Projects</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="pages/profile-connections.html" class="menu-link">
                      <div>Connections</div>
                    </a>


                  </li>
                </ul>
              </li>



              <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <div>Account Settings</div>
                </a>


                <ul class="menu-sub">



                  <li class="menu-item ">
                    <a href="pages/account-settings-account.html" class="menu-link">
                      <div>Account</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="pages/account-settings-security.html" class="menu-link">
                      <div>Security</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="pages/account-settings-billing.html" class="menu-link">
                      <div>Billing &amp; Plans</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="pages/account-settings-notifications.html" class="menu-link">
                      <div>Notifications</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="pages/account-settings-connections.html" class="menu-link">
                      <div>Connections</div>
                    </a>


                  </li>
                </ul>
              </li>



              <li class="menu-item ">
                <a href="pages/faq.html" class="menu-link">
                  <div>FAQ</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <div>Help Center</div>
                </a>


                <ul class="menu-sub">



                  <li class="menu-item ">
                    <a href="pages/help-center-landing.html" class="menu-link">
                      <div>Landing</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="pages/help-center-categories.html" class="menu-link">
                      <div>Categories</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="pages/help-center-article.html" class="menu-link">
                      <div>Article</div>
                    </a>


                  </li>
                </ul>
              </li>



              <li class="menu-item ">
                <a href="pages/pricing.html" class="menu-link">
                  <div>Pricing</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <div>Misc</div>
                </a>


                <ul class="menu-sub">



                  <li class="menu-item ">
                    <a href="pages/misc-error.html" class="menu-link" target="_blank">
                      <div>Error</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="pages/misc-under-maintenance.html" class="menu-link" target="_blank">
                      <div>Under Maintenance</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="pages/misc-comingsoon.html" class="menu-link" target="_blank">
                      <div>Coming Soon</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="pages/misc-not-authorized.html" class="menu-link" target="_blank">
                      <div>Not Authorized</div>
                    </a>


                  </li>
                </ul>
              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
              <div>Authentications</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <div>Login</div>
                </a>


                <ul class="menu-sub">



                  <li class="menu-item ">
                    <a href="auth/login-basic.html" class="menu-link" target="_blank">
                      <div>Basic</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="auth/login-cover.html" class="menu-link" target="_blank">
                      <div>Cover</div>
                    </a>


                  </li>
                </ul>
              </li>



              <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <div>Register</div>
                </a>


                <ul class="menu-sub">



                  <li class="menu-item ">
                    <a href="auth/register-basic.html" class="menu-link" target="_blank">
                      <div>Basic</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="auth/register-cover.html" class="menu-link" target="_blank">
                      <div>Cover</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="auth/register-multisteps.html" class="menu-link" target="_blank">
                      <div>Multi-steps</div>
                    </a>


                  </li>
                </ul>
              </li>



              <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <div>Verify Email</div>
                </a>


                <ul class="menu-sub">



                  <li class="menu-item ">
                    <a href="auth/verify-email-basic.html" class="menu-link" target="_blank">
                      <div>Basic</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="auth/verify-email-cover.html" class="menu-link" target="_blank">
                      <div>Cover</div>
                    </a>


                  </li>
                </ul>
              </li>



              <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <div>Reset Password</div>
                </a>


                <ul class="menu-sub">



                  <li class="menu-item ">
                    <a href="auth/reset-password-basic.html" class="menu-link" target="_blank">
                      <div>Basic</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="auth/reset-password-cover.html" class="menu-link" target="_blank">
                      <div>Cover</div>
                    </a>


                  </li>
                </ul>
              </li>



              <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <div>Forgot Password</div>
                </a>


                <ul class="menu-sub">



                  <li class="menu-item ">
                    <a href="auth/forgot-password-basic.html" class="menu-link" target="_blank">
                      <div>Basic</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="auth/forgot-password-cover.html" class="menu-link" target="_blank">
                      <div>Cover</div>
                    </a>


                  </li>
                </ul>
              </li>



              <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <div>Two Steps</div>
                </a>


                <ul class="menu-sub">



                  <li class="menu-item ">
                    <a href="auth/two-steps-basic.html" class="menu-link" target="_blank">
                      <div>Basic</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="auth/two-steps-cover.html" class="menu-link" target="_blank">
                      <div>Cover</div>
                    </a>


                  </li>
                </ul>
              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
              <div>Wizard Examples</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="wizard/ex-checkout.html" class="menu-link">
                  <div>Checkout</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="wizard/ex-property-listing.html" class="menu-link">
                  <div>Property Listing</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="wizard/ex-create-deal.html" class="menu-link">
                  <div>Create Deal</div>
                </a>


              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="modal-examples.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-window-open"></i>
              <div>Modal Examples</div>
            </a>


          </li>




          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Components</span>
          </li>









          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div>Cards</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="cards/basic.html" class="menu-link">
                  <div>Basic</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="cards/advance.html" class="menu-link">
                  <div>Advance</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="cards/statistics.html" class="menu-link">
                  <div>Statistics</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="cards/analytics.html" class="menu-link">
                  <div>Analytics</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="cards/gamifications.html" class="menu-link">
                  <div>Gamifications</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="cards/actions.html" class="menu-link">
                  <div>Actions</div>
                </a>


              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-box"></i>
              <div>User interface</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="ui/accordion.html" class="menu-link">
                  <div>Accordion</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/alerts.html" class="menu-link">
                  <div>Alerts</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/badges.html" class="menu-link">
                  <div>Badges</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/buttons.html" class="menu-link">
                  <div>Buttons</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/carousel.html" class="menu-link">
                  <div>Carousel</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/collapse.html" class="menu-link">
                  <div>Collapse</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/dropdowns.html" class="menu-link">
                  <div>Dropdowns</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/footer.html" class="menu-link">
                  <div>Footer</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/list-groups.html" class="menu-link">
                  <div>List groups</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/modals.html" class="menu-link">
                  <div>Modals</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/navbar.html" class="menu-link">
                  <div>Navbar</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/offcanvas.html" class="menu-link">
                  <div>Offcanvas</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/pagination-breadcrumbs.html" class="menu-link">
                  <div>Pagination &amp; Breadcrumbs</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/progress.html" class="menu-link">
                  <div>Progress</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/spinners.html" class="menu-link">
                  <div>Spinners</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/tabs-pills.html" class="menu-link">
                  <div>Tabs &amp; Pills</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/toasts.html" class="menu-link">
                  <div>Toasts</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/tooltips-popovers.html" class="menu-link">
                  <div>Tooltips &amp; popovers</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="ui/typography.html" class="menu-link">
                  <div>Typography</div>
                </a>


              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-copy"></i>
              <div>Extended UI</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="extended/ui-avatar.html" class="menu-link">
                  <div>Avatar</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="extended/ui-blockui.html" class="menu-link">
                  <div>BlockUI</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="extended/ui-drag-and-drop.html" class="menu-link">
                  <div>Drag &amp; Drop</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="extended/ui-media-player.html" class="menu-link">
                  <div>Media Player</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="extended/ui-perfect-scrollbar.html" class="menu-link">
                  <div>Perfect scrollbar</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="extended/ui-star-ratings.html" class="menu-link">
                  <div>Star Ratings</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="extended/ui-sweetalert2.html" class="menu-link">
                  <div>SweetAlert2</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="extended/ui-text-divider.html" class="menu-link">
                  <div>Text Divider</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <div>Timeline</div>
                </a>


                <ul class="menu-sub">



                  <li class="menu-item ">
                    <a href="extended/ui-timeline-basic.html" class="menu-link">
                      <div>Basic</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="extended/ui-timeline-fullscreen.html" class="menu-link">
                      <div>Fullscreen</div>
                    </a>


                  </li>
                </ul>
              </li>



              <li class="menu-item ">
                <a href="extended/ui-tour.html" class="menu-link">
                  <div>Tour</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="extended/ui-treeview.html" class="menu-link">
                  <div>Treeview</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="extended/ui-misc.html" class="menu-link">
                  <div>Miscellaneous</div>
                </a>


              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-crown"></i>
              <div>Icons</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="icons/boxicons.html" class="menu-link">
                  <div>Boxicons</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="icons/font-awesome.html" class="menu-link">
                  <div>Fontawesome</div>
                </a>


              </li>
            </ul>
          </li>




          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Forms &amp; Tables</span>
          </li>









          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div>Form Elements</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="forms/basic-inputs.html" class="menu-link">
                  <div>Basic Inputs</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="forms/input-groups.html" class="menu-link">
                  <div>Input groups</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="forms/custom-options.html" class="menu-link">
                  <div>Custom Options</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="forms/editors.html" class="menu-link">
                  <div>Editors</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="forms/file-upload.html" class="menu-link">
                  <div>File Upload</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="forms/pickers.html" class="menu-link">
                  <div>Pickers</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="forms/selects.html" class="menu-link">
                  <div>Select &amp; Tags</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="forms/sliders.html" class="menu-link">
                  <div>Sliders</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="forms/switches.html" class="menu-link">
                  <div>Switches</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="forms/extras.html" class="menu-link">
                  <div>Extras</div>
                </a>


              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div>Form Layouts</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="form/layouts-vertical.html" class="menu-link">
                  <div>Vertical Form</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="form/layouts-horizontal.html" class="menu-link">
                  <div>Horizontal Form</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="form/layouts-sticky.html" class="menu-link">
                  <div>Sticky Actions</div>
                </a>


              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-carousel"></i>
              <div>Form Wizard</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="form/wizard-numbered.html" class="menu-link">
                  <div>Numbered</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="form/wizard-icons.html" class="menu-link">
                  <div>Icons</div>
                </a>


              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="form/validation.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-list-check"></i>
              <div>Form Validation</div>
            </a>


          </li>








          <li class="menu-item ">
            <a href="tables/basic.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-table"></i>
              <div>Tables</div>
            </a>


          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-grid"></i>
              <div>Datatables</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="tables/datatables-basic.html" class="menu-link">
                  <div>Basic</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="tables/datatables-advanced.html" class="menu-link">
                  <div>Advanced</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="tables/datatables-extensions.html" class="menu-link">
                  <div>Extensions</div>
                </a>


              </li>
            </ul>
          </li>




          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Charts &amp; Maps</span>
          </li>









          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-chart"></i>
              <div>Charts</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="charts/apex.html" class="menu-link">
                  <div>Apex Charts</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="charts/chartjs.html" class="menu-link">
                  <div>ChartJS</div>
                </a>


              </li>
            </ul>
          </li>








          <li class="menu-item ">
            <a href="maps/leaflet.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-map-alt"></i>
              <div>Leaflet Maps</div>
            </a>


          </li>




          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Misc</span>
          </li>









          <li class="menu-item ">
            <a href="https://themeselection.com/support/" class="menu-link" target="_blank">
              <i class="menu-icon tf-icons bx bx-support"></i>
              <div>Support</div>
            </a>


          </li>








          <li class="menu-item ">
            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html" class="menu-link" target="_blank">
              <i class="menu-icon tf-icons bx bx-file"></i>
              <div>Documentation</div>
            </a>


          </li>
        </ul>

      </aside>


      <!-- Layout page -->
      <div class="layout-page">
        <!-- BEGIN: Navbar-->
        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

          <!--  Brand demo (display only for navbar-full and hide on below xl) -->

          <!-- ! Not required for layout-without-menu -->
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                  <i class="bx bx-search bx-sm"></i>
                  <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                </a>
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Language -->
              <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class='fi fi-us fis rounded-circle fs-3 me-1'></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="index.html" data-language="en">
                      <i class="fi fi-us fis rounded-circle fs-4 me-1"></i>
                      <span class="align-middle">English</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.html" data-language="fr">
                      <i class="fi fi-fr fis rounded-circle fs-4 me-1"></i>
                      <span class="align-middle">French</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.html" data-language="de">
                      <i class="fi fi-de fis rounded-circle fs-4 me-1"></i>
                      <span class="align-middle">German</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.html" data-language="pt">
                      <i class="fi fi-pt fis rounded-circle fs-4 me-1"></i>
                      <span class="align-middle">Portuguese</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ Language -->


              <!-- Style Switcher -->
              <li class="nav-item me-2 me-xl-0">
                <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                  <i class='bx bx-sm'></i>
                </a>
              </li>
              <!--/ Style Switcher -->

              <!-- Quick links  -->
              <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                  <i class='bx bx-grid-alt bx-sm'></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0">
                  <div class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                      <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                      <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="bx bx-sm bx-plus-circle"></i></a>
                    </div>
                  </div>
                  <div class="dropdown-shortcuts-list scrollable-container">
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-calendar fs-4"></i>
                        </span>
                        <a href="app/calendar.html" class="stretched-link">Calendar</a>
                        <small class="text-muted mb-0">Appointments</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-food-menu fs-4"></i>
                        </span>
                        <a href="app/invoice/list.html" class="stretched-link">Invoice App</a>
                        <small class="text-muted mb-0">Manage Accounts</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-user fs-4"></i>
                        </span>
                        <a href="app/user/list.html" class="stretched-link">User App</a>
                        <small class="text-muted mb-0">Manage Users</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-check-shield fs-4"></i>
                        </span>
                        <a href="app/access-roles.html" class="stretched-link">Role Management</a>
                        <small class="text-muted mb-0">Permission</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                        </span>
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="stretched-link">Dashboard</a>
                        <small class="text-muted mb-0">User Profile</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-cog fs-4"></i>
                        </span>
                        <a href="pages/account-settings-account.html" class="stretched-link">Setting</a>
                        <small class="text-muted mb-0">Account Settings</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-help-circle fs-4"></i>
                        </span>
                        <a href="pages/help-center-landing.html" class="stretched-link">Help Center</a>
                        <small class="text-muted mb-0">FAQs & Articles</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-window-open fs-4"></i>
                        </span>
                        <a href="modal-examples.html" class="stretched-link">Modals</a>
                        <small class="text-muted mb-0">Useful Popups</small>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Quick links -->

              <!-- Notification -->
              <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                  <i class="bx bx-bell bx-sm"></i>
                  <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end py-0">
                  <li class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                      <h5 class="text-body mb-0 me-auto">Notification</h5>
                      <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                    </div>
                  </li>
                  <li class="dropdown-notifications-list scrollable-container">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../demo/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                            <p class="mb-0">Won the monthly best seller gold badge</p>
                            <small class="text-muted">1h ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Charles Franklin</h6>
                            <p class="mb-0">Accepted your connection</p>
                            <small class="text-muted">12hr ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../demo/assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">New Message ✉️</h6>
                            <p class="mb-0">You have new message from Natalie</p>
                            <small class="text-muted">1h ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                            <p class="mb-0">ACME Inc. made new order $1,154</p>
                            <small class="text-muted">1 day ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../demo/assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Application has been approved 🚀 </h6>
                            <p class="mb-0">Your ABC project application has been approved.</p>
                            <small class="text-muted">2 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Monthly report is generated</h6>
                            <p class="mb-0">July monthly financial report is generated </p>
                            <small class="text-muted">3 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../demo/assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Send connection request</h6>
                            <p class="mb-0">Peter sent you connection request</p>
                            <small class="text-muted">4 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../demo/assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">New message from Jane</h6>
                            <p class="mb-0">Your have new message from Jane</p>
                            <small class="text-muted">5 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">CPU is running high</h6>
                            <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                            <small class="text-muted">5 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-menu-footer border-top">
                    <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40">
                      View all notifications
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ Notification -->

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../demo/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="pages/profile-user.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../demo/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">
                            John Doe
                          </span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages/profile-user.html">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="app/invoice/list.html">
                      <i class="bx bx-credit-card me-2"></i>
                      <span class="align-middle">Billing</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class='bx bx-log-in me-2'></i>
                      <span class="align-middle">Login</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>

          <!-- Search Small Screens -->
          <div class="navbar-search-wrapper search-input-wrapper  d-none">
            <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
          </div>

        </nav>
        <!-- / Navbar -->
        <!-- END: Navbar-->


        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">

            <div class="row">
              <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                        <p class="mb-4">You have done <span class="fw-bold">72%</span> more sales today. Check your new
                          badge in your profile.</p>

                        <a href="javascript:;" class="btn btn-sm btn-label-primary">View Badges</a>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="../demo/assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.html">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Total Revenue -->

              <!--/ Total Revenue -->

            </div>


            <!-- pricingModal -->
            <!--/ pricingModal -->

          </div>
          <!-- / Content -->

          <!-- Footer -->
          <!-- Footer-->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>
                , made with ❤️ by <a href="https://themeselection.com/" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
              </div>
              <div>
                <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
                <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html" target="_blank" class="footer-link me-4">Documentation</a>
                <a href="https://themeselection.com/support/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
              </div>
            </div>
          </footer>
          <!--/ Footer-->
          <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
  <!--/ Layout Content -->


  <div class="buy-now">
    <a href="https://themeselection.com/item/sneat-bootstrap-html-laravel-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>


  <!-- Include Scripts -->
  <!-- BEGIN: Vendor JS-->
  <script src="{{asset('assets/vendor/libs/jquery/jquery40f4.js?id=96645acf88116df9c36bef6153b3a51a')}}"></script>
  <script src="{{asset('assets/vendor/libs/popper/popper885d.js?id=c8510634b3d8cded74bbe30a2b593d87')}}"></script>
  <script src="{{asset('assets/vendor/js/bootstrap0983.js?id=1f50b74ded465d298b282b4562bdaf8c')}}"></script>
  <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar4d5e.js?id=9d86308b7c41e76a7dc8472907865b83')}}"></script>
  <script src="{{asset('assets/vendor/libs/hammer/hammerc38e.js?id=2a80ebd1aa77a9e33ec54b68ee8de5e0')}}"></script>
  <script src="{{asset('assets/vendor/libs/i18n/i18n5fec.js?id=5dd0894a4cb5357ba8a20df3187b6d9b')}}"></script>
  <script src="{{asset('assets/vendor/libs/typeahead-js/typeaheada766.js?id=8c315d7e2e7b09a04d8e8efead923241')}}"></script>
  <script src="{{asset('assets/vendor/js/menu7d39.js?id=f45ec38086f86335b91fc2fdcaaadab8')}}"></script>
  <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
  <!-- END: Page Vendor JS-->
  <!-- BEGIN: Theme JS-->
  <script src="{{asset('assets/js/mainc3d7.js?id=3c628e87a9befaa350e1f822744b8142')}}"></script>

  <!-- END: Theme JS-->
  <!-- Pricing Modal JS-->
  <!-- END: Pricing Modal JS-->
  <!-- BEGIN: Page JS-->
  <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
  <!-- END: Page JS-->

</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2022 10:44:59 GMT -->

</html>