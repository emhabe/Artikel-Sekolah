@extends('layouts.master')

@section('content')
<!-- Layout Content -->

<!-- Content -->
<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
      <div class="w-100 d-flex justify-content-center">
        <img src="{{asset('assets/img/illustrations/boy-with-rocket-light.png')}}" class="img-fluid" alt="Login image" width="700" data-app-dark-img="illustrations/boy-with-rocket-dark.png" data-app-light-img="illustrations/boy-with-rocket-light.png">
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Login -->
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
        <p class="mb-4">Tolong Login Ke Akunmu & Mulailah Menjelajah</p>

        <form id="formAuthentication" class="mb-3" action="/postlogin" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email </label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda" autofocus>
          </div>
          <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="password">Password</label>
            </div>
            <div class="input-group input-group-merge">
              <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
          </div>
          <button class="btn btn-primary d-grid w-100">
            Login
          </button>
        </form>
        <p class="text-center">
          <span>Belum Punya Akun ?</span>
          <a href="/registrasi">
            <span>Buat Akun Baru</span>
          </a>
        </p>
      </div>
    </div>
    <!-- /Login -->
  </div>
</div>
<!--/ Content -->

<!--/ Layout Content -->

@endsection