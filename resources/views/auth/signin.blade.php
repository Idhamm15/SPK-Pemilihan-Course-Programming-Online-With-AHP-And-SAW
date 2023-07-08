@extends('layouts.auth')

{{-- @section('content')
  <main class="form-signin">
    <img class="mb-4" src="/assets/img/logops3.jpg" alt="" width="150" height="57">
    <p><font size="5" face="Verdana">SPK Pemilihan Course <br> Web Programming</font></p>
    <h1 class="h3 mb-3 fw-normal">Masuk</h1>

    <form action="/" method="POST">
      @csrf

      <div class="form-floating">
        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="name@example.com" autocomplete="off" autofocus required>
        <label for="username">Username</label>

        @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
        <label for="password">Password</label>

        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-2 @error('password') mt-4 @enderror">
        Tidak mempunyai akun?
        <a href="/signup" class="text-decoration-none">Buat akun disini</a>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk Sekarang</button>
      <p class="mt-3 mb-3 text-muted">&copy; SPK Course Web Programming (Online) {{ now()->year }}</p>
    </form>
  </main>
@endsection --}}

@section('content')
  <div class="content mt-7 p-7 m-7">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="/assetsLogin/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>

            <form action="/login" method="POST">
                @csrf

              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username">

                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">

                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>

              </div>
              <div class="mb-2 @error('password') mt-4 @enderror">
                Tidak mempunyai akun?
                <a href="/signup" class="text-decoration-none">Buat akun disini</a>
                </div>


              <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk Sekarang</button>
                    <p class="mt-3 mb-3 text-muted">&copy; SPK Course Web Programming (Online) {{ now()->year }}</p>

              <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>

              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span>
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span>
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span>
                </a>
              </div>
            </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
@endsection
