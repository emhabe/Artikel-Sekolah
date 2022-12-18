@extends('layouts.master')

@section('content')
<!-- Layout Content -->

<!-- Content -->
<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">

    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
      <div class="w-100 d-flex justify-content-center">
        <img src="{{asset('assets/img/illustrations/girl-with-laptop-light.png')}}" class="img-fluid" alt="Login image" width="700" data-app-dark-img="illustrations/girl-with-laptop-dark.png" data-app-light-img="illustrations/girl-with-laptop-light.png">

      </div>
    </div>
    <!-- /Left Text -->

    <!-- Register -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand mb-5">
          <a href="/" class="app-brand-link gap-2">
            <span class="app-brand-logo demo">
              <img src="{{asset('assets/img/illustrations/logo.png')}}" width="200">
            </span>
          </a>
        </div>
        <!-- /Logo -->
        <h5 class="mb-2">Selamat Datang Di RadarPgriKu! 👋</h4>
          <p class="mb-4">Upss ! Kamu Belum Punya Akun Ya? Registrasi dulu Yukk</p>

          <form id="formAuthentication" class="mb-3" action="/post_register" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Nama</label>
              <input type="text" class="form-control" id="email" name="name" placeholder="Masukkan nama">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">Password</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <button class="btn btn-primary d-grid w-100">
              Registrasi
            </button>
          </form>

          <p class="text-center">
            <span>Sudah Punya Akun?</span>
            <a href="/login">
              <span>Login</span>
            </a>
          </p>
      </div>
    </div>
    <!-- /Register -->
  </div>
</div>
<!--/ Content -->

<!--/ Layout Content -->


@endsection