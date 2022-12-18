@extends('layouts.master')

@section('content')


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
          <form action="/artikel" method="get">
            <input type="search" name="search" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
          </form>
        </div>

      </nav>
      <!-- / Navbar -->
      <!-- END: Navbar-->


      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

          <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Artikel /</span> Buat Artikel
          </h4>
          <form action="/submit_artikel" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-9">
                <div class="card mb-4">
                  <div class="card-body">

                    <div class="input-gropup mb-3">
                      <label for="defaultFormControlInput" class="form-label">Judul :</label>
                      <input type="text" class="form-control" id="defaultFormControlInput" name="judul" placeholder="Masukkan Judul Berita" aria-describedby="defaultFormControlHelp" />
                    </div>
                    @error('judul')
                    <div class="error">{{ $message }}</div>
                    @enderror
                    <div class="input-gropup mb-3">
                      <label for="defaultFormControlInput" class="form-label">Kategori :</label>
                      <select class="form-control" name="kategori">
                        <option value="" disabled selected>Pilih Kategori</option>
                        @foreach($kategori as $kt)
                        <option value="{{$kt->id}}">{{$kt->nama}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="input-gropup mb-3">
                      <label class="form-label" for="basic-default-bio">Deskripsi Singkat :</label>
                      <textarea class="form-control" id="basic-default-bio" name="detail_singkat" rows="3" placeholder="Masukkan Deskripsi Singkat Berita" required></textarea>
                    </div>
                    @error('detail_singkat')
                    <div class="error">{{ $message }}</div>
                    @enderror
                    <div class="input-gropup mb-3">
                      <label class="form-label" for="basic-default-bio">Deskripsi :</label>
                      <textarea id="editor" class="form-control" name="deskripsi" rows="3"></textarea>
                      <script>
                        window.addEventListener("load", (e) => {
                          ClassicEditor.create(document.querySelector('#editor'))
                            .then(editor => {
                              console.log(editor);
                            })
                            .catch(error => {
                              console.error(error);
                            });
                        });
                      </script>

                      <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
                    </div>
                    @error('deskripsi')
                    <div class="error">{{ $message }}</div>
                    @enderror
                    <div class="input-gropup mb-3">
                      <label for="defaultFormControlInput" class="form-label">Foto :</label>
                      <input type="file" class="form-control" id="defaultFormControlInput" name="foto" aria-describedby="defaultFormControlHelp" />
                    </div>
                    @error('foto')
                    <div class="error">{{ $message }}</div>
                    @enderror
                    <div>
                      <button class="btn btn-primary d-grid w-100">
                        Submit
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>

          <!-- pricingModal -->
          <!--/ pricingModal -->

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

@endsection