@extends('layouts.templet')

@section('templet')
<div class="container">
    <div class="row justify-content-center">
        <div class="form-container">

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" width="24" height="24" role="alert">
               {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if (session('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" width="24" height="24" role="alert">
               {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <div class="col">
                <main class="form-signin">
                    <form action="/" method="post">
                    @csrf
                      <h1 class="h3 mb-5 fw-normal text-center">Del-Membaca</h1>
                      <h5 class="text-center">Halo, Selamat Datang</h5>
                      <p class="text-center">Login untuk membaca buku secara gratis</p>

                      <div class="form-floating mb-2">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" autofocus value="{{ old('email') }}">
                        <label for="floatingInput">Email</label>
                        @error('email')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="form-floating mb-2">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
                      <button class="w-100 rounded-3" type="submit">Login</button>
                      <p class="mt-5 mb-3 text-muted">Belum Punya Akun? <a href="/registrasi">Daftar</a></p>
                    </form>
                  </main>
            </div>
        </div>
    </div>
</div>
@endsection
