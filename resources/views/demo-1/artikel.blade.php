@extends('layouts.master')

@section('content')


<div class="layout-wrapper layout-content-navbar ">
  <div class="layout-container">

    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

      <!-- ! Hide app brand if navbar-full -->
      <div class="app-brand demo">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="app-brand-link">
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
        <li class="menu-item ">
          <a href="/dashboard" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div>Beranda</div>
          </a>
        </li>
        <li class="menu-item active item">
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
            <!--/ Language -->


            <!-- Style Switcher -->
            <!--/ Style Switcher -->

            <!-- Quick links  -->
            <!-- Quick links -->

            <!-- Notification -->
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
                  <a class="dropdown-item" href="pages/profile-user.html">
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
                  <a class="dropdown-item logout" data-id="{{auth()->user()->id}}" data-nama="{{auth()->user()->id}}">
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
          @foreach ($data as $ow)
          <form action="/artikel" method="get">
            @endforeach
            <input type="search" name="search" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
        </div>
        </form>
      </nav>
      @if(Session::has('success'))
      <div class="bs-toast toast toast-ex animate__animated my-2 fade bg-primary animate__tada show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <i class="bx bx-bell me-2"></i>
          <div class="me-auto fw-semibold">Bootstrap</div>
          <small>11 mins ago</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          {{Session::get('success')}}
        </div>
      </div>
      @endif

      <!-- / Navbar -->
      <!-- END: Navbar-->


      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

          <h4 class="fw-bold py-3 mb-2">
            <span class="text-muted fw-light">Artikel /</span> Daftar Artikel
          </h4>
          <a href="/buat_artikel"><button type="button" class="btn btn-primary mb-3">Buat Artikel</button></a>
          <!-- Basic Bootstrap Table -->
          <div class="row mb-4">
            @foreach($data as $d)
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
          @if(count($data))
          @else
          <img src="../assets/img/backgrounds/kosong.png" width="350" height="300" class="kosong">
          @endif
          <!--/ Basic Bootstrap Table -->

          <hr class="my-5">
        </div>
        <!-- / Content -->

        <!-- Footer -->
        <!-- Footer-->
        <footer class="content-footer footer bg-footer-theme">
          <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
              © <script>
                document.write(new Date().getFullYear())
              </script>2022
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
<script>
  $('.delete').click(function() {
    var idsiswa = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');

    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
      title: "Apakah Anda Yakin ?",
      text: "Anda akan Menghapus Siswa Dengan Nama : " + nama + " !!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "/delete_siswa/" + idsiswa + "/",
          swalWithBootstrapButtons.fire(
            'Deleted!',
            'Your Data has been deleted.',
            'success'
          )
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Cancelled',
          'Your Data file is safe :)',
          'error'
        )
      }
    })
  });
</script>
<!-- / Layout wrapper -->
<!--/ Layout Content -->



@endsection