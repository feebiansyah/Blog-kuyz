<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Blog Kuy | Auth</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="{{ asset('css/auth.css') }}" />
    </head>

    <body class="poppins-regular">
      <div class="container">
        
     @if(Session::has('pesan'))
      <div class="row justify-content-center mt-5 ">
        <div class="col-md-7">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {!! Session::get('pesan')!!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      </div>
      @endif
      
        <div class="login-container">
            <div class="login-header text-center">
                <h2>Registrasi</h2>
            </div>
            <form action="{{ route('registrasi') }}" method="post" >
              @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input
                        type="text"
                        class="@error('name') is-invalid @enderror form-control"
                        id="name"
                        placeholder="Masukan Nama"
                        name="name"
                        value="{{ old('name') }}"
                    />
                    @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input
                        type="text"
                        class="@error('email') is-invalid @enderror  form-control"
                        id="email"
                        placeholder="Masukan email"
                        name="email"
                        value="{{ old('email') }}"
                    />
                     @error('email')
              <div class="invalid-feedback ">
                {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        class=" @error('password') is-invalid @enderror form-control"
                        id="password"
                        placeholder="Masukan password"
                        name="password"
                    />
                     @error('password')
              <div class="invalid-feedback ">
                {{ $message }}
                </div>
                @enderror
                </div>
                     <div>
              <p>Sudah Punya akun <a class="text-decoration-none"
              href="/login">Login
              disini!</a></p>
            </div>
                <button type="submit" class="btn btn-primary w-100">
                    Registrasi
                </button>
            </form>
        </div>
         </div>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/bootstrap.js') }}"></script>
    </body>
</html>
