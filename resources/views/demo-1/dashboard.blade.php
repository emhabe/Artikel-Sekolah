@extends('layouts.master')

@section('content')
<!-- Layout Content -->
<div class="layout-wrapper layout-content-navbar ">
  <div class="layout-container">

    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

      <!-- ! Hide app brand if navbar-full -->
      <div class="app-brand demo">
        <a href="/" class="app-brand-link">
          <span class="app-brand-logo demo">
            <img src="{{asset('assets/img/illustrations/logo1.png')}}" width="40" height="40">
          </span>
          <span class="app-brand-text demo menu-text fw-bold ms-2"><img src="{{asset('assets/img/illustrations/logo2.png')}}" width="120" height="100"></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
          <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
      </div>

      <div class="menu-inner-shadow"></div>

      <ul class="menu-inner py-1">
        <li class="menu-item active open">
          <a href="/dashboard" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div>Beranda</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/artikel" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div>Artikel</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-food-menu"></i>
            <div>Kategori</div>
          </a>
          <ul class="menu-sub">
            @foreach($kategori as $kt)
            <li class="menu-item">
              <a href="/kategori/{{$kt->id}}" class="menu-link">
                <div>{{$kt->nama}}</div>
              </a>
            </li>
            @endforeach
          </ul>
        </li>
        <li class="menu-item ">
          <a href="/user" class="menu-link">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div>Users</div>
          </a>
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
            <!--/ Notification -->

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                  <img src="{{asset('assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">
                          <img src="{{asset('assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <span class="fw-semibold d-block">
                          {{auth()->user()->name}}
                        </span>
                        <small class="text-muted">Admin</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item logout" href="#" data-id="{{$user->id}}" data-nama="{{$user->name}}">
                    <i class='bx bx-log-in me-2'></i>
                    <span class="align-middle">Logout</span>
                  </a>
                </li>
              </ul>
            </li>
            <!--/ User -->
          </ul>
        </div>

        <!-- Search Small Screens -->
        <div class="navbar-search-wrapper search-input-wrapper  d-none">
          <form action="/dashboard" method="get">
            <input type="search" name="search" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
          </form>
        </div>
      </nav>
      <!-- / Navbar -->
      <!-- END: Navbar-->


      <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                      <span>Total Artikel</span>
                      <div class="d-flex align-items-end mt-2">
                        <h4 class="mb-0 me-2">{{$terkirim}}</h4>
                      </div>
                      <small>Artikel Di Publish</small>
                    </div>
                    <span class="badge bg-label-primary rounded p-2">
                      <i class="fa-regular fa-newspaper bx-sm"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                      <span>Total Artikel</span>
                      <div class="d-flex align-items-end mt-2">
                        <h4 class="mb-0 me-2">{{$belum}}</h4>
                      </div>
                      <small>Artikel Belum Di Publish</small>
                    </div>
                    <span class="badge bg-label-danger rounded p-2">
                      <i class="fa-regular fa-newspaper bx-sm"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                      <span>Total Pengguna</span>
                      <div class="d-flex align-items-end mt-2">
                        <h4 class="mb-0 me-2">{{$pengguna}}</h4>

                      </div>
                      <small>Pengguna Website</small>
                    </div>
                    <span class="badge bg-label-success rounded p-2">
                      <i class="bx bx-group bx-sm"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                      <span>Total Komentar</span>
                      <div class="d-flex align-items-end mt-2">
                        <h4 class="mb-0 me-2">{{$komentar}}</h4>
                      </div>
                      <small>Komentar Pengguna</small>
                    </div>
                    <span class="badge bg-label-warning rounded p-2">
                      <i class="fa-solid fa-comments bx-sm"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            @foreach($artikel as $d)
            <div class="col-lg-4 mb-3">
              <div class="card h-100">
                <img class="overflow-hidden position-relative border-radius-lg bg-cover card-img-top" height="200" src="{{asset('foto_artikel/'.$d->foto)}}" alt="" />
                <div class="card-body">
                  <h5 class="card-title">{{$d->judul}}</h5>
                  <div class="card-text mb-4">
                    {{$d->detail_singkat}}
                  </div>
                  <div class="row ms-2">
                    <a href="/edit/{{$d->id}}" class="btn btn-info w-40">Edit</a>
                    <button type="button" class="btn btn-danger delete w-40 ms-4" data-id="{{$d->id}}" data-judul="{{$d->judul}}">
                      Delete
                    </button>
                  </div>
                  @if($d->status == 0)
                  <form action="/publish" method="post" enctype="multipart/form-data">
                    @csrf
                    <input value="{{$d->id}}" name="id" hidden>
                    <button type="submit" class="btn btn-primary d-grid w-100 mt-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                      <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="bx bx-paper-plane bx-xs me-3"></i>Publish</span>
                    </button>
                  </form>
                  @endif
                </div>
              </div>
            </div>
            @endforeach
            <!--/ Card layout -->
          </div>
          @if(count($artikel))
          @else
          <img src="../assets/img/backgrounds/kosong.png" width="350" height="300" class="kosong">
          <h5 class="kosong">~ ~ Semua Artikel Telah Di Publish ~ ~</h5>
          @endif
          <!--/ Basic Bootstrap Table -->

          <hr class="my-1">
        </div>
        <!-- / Content -->

        <!-- Footer -->
        <!-- Footer-->
        <footer class="content-footer footer bg-footer-theme">
          <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
              © <script>
                document.write(new Date().getFullYear())
              </script>
              , Dibuat ❤️ oleh<a href="https://themeselection.com/" target="_blank" class="footer-link fw-bolder">Tim </a>
            </div>
          </div>
        </footer>
        <!--/ Footer-->
        <!-- / Footer -->
        <div class="content-backdrop fade"></div>
      </div>
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


@endsection