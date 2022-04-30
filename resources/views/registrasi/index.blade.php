@extends('layouts.templet')

@section('templet')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col">
            <main class="form-signin">
                <form action="/registrasi" method="post">
                    @csrf
                  <h1 class="h3 mb-5 fw-normal"><span>Buku</span>Kita</h1>
                  <h5 class="text-center">Perluas Wawasanmu</h5>
                  <p class="text-center">Daftar untuk membaca buku secara gratis</p>

                  <div class="form-floating mb-2">
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" id="name" placeholder="nama">
                    <label for="name">Nama</label>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-floating mb-2">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-floating mb-2">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <button class="w-100 rounded-3" type="submit">Register</button>
                  <p class="mt-5 mb-3 text-muted">Sudah Punya Akun? <a href="/">Masuk</a></p>
                </form>
              </main>
        </div>
    </div>
</div>


@endsection
