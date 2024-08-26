<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page | Blog Kuy</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" media="all" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet" />

    <style type="text/css" media="all">
        .poppins-thin {
            font-family: "Poppins", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .poppins-extralight {
            font-family: "Poppins", sans-serif;
            font-weight: 200;
            font-style: normal;
        }

        .poppins-light {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .poppins-regular {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .poppins-medium {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .poppins-semibold {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .poppins-bold {
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .poppins-extrabold {
            font-family: "Poppins", sans-serif;
            font-weight: 800;
            font-style: normal;
        }

        .poppins-black {
            font-family: "Poppins", sans-serif;
            font-weight: 900;
            font-style: normal;
        }
        body {
            background-color: #f8f9fa;
        }
          .content{
            min-height: 100vh;
            padding: 2rem;
          }

        .hero-section {
            position: relative;
            text-align: center;
            color: #fff;
            padding: 0;
        }

        .hero-section img {
            width: 100%;
            height: auto;
            opacity: 0.8;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .feature-icon {
            font-size: 3rem;
            color: #007bff;
        }

        .feature-box {
            text-align: center;
            padding: 2rem;
        }
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            filter: brightness(85%);
            transition: filter 0.3s ease;
        }

        .card-img-top:hover {
            filter: brightness(100%);
        }

        .card-title {
            font-weight: bold;
            color: #343a40;
        }

        .card-text {
            color: #6c757d;
            font-size: 0.95rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .card-footer {
            background-color: transparent;
            border-top: none;
        }

        .read-more {
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .custom-header {
    border-bottom: 2px solid #e9ecef;
    padding-bottom: 2rem;
    margin-bottom: 2rem;
}

.custom-header h1 {
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 1rem;
}

.custom-header p {
    font-size: 1.25rem;
    color: #6c757d;
}

.custom-header form {
    max-width: 600px;
    width: 100%;
}

.custom-header form input {
    border-right: 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.custom-header form button {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.custom-header form input:focus,
.custom-header form button:hover {
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
}

.custom-header small a {
    transition: color 0.3s ease;
}

.custom-header small a:hover {
    color: #0056b3;
}


        
    </style>
</head>

<body class="poppins-regular">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Blog Kuy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link  {{
                          Request::is('/') ?
                          'active' : '' }}" href="/">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link  {{
                          Request::is('posts') ?
                          'active' : '' }}  {{
                          Request::is('post/*') ?
                          'active' : '' }}" href="/posts">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{
                          Request::is('about') ?
                          'active' : '' }}" href="/about">About</a>
                    </li>
                    @if(Auth::check())
                      <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                      @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  
  @yield('header')
  
  <main class="content">
    
 
    <!-- Hero Section -->
    {{ $slot }}
   

    <!-- Features Section -->
    
    
     </main>

    <!-- Footer -->
    <footer class="bg-primary py-2">
        <div class="container text-white text-center">
            <p class="mb-0">&copy; 2024 Blog Kuy. Website ini dibuat dengan ♥
            oleh <a
            href="https://www.instagram.com/a.febiansyah_?igsh=MTI2eDM3dTByNjQwYQ=="
            class="text-dark">Ananda Febiansyah.</a></p>
        </div>
    </footer>

    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}" charset="utf-8"></script>
</body>

</html>
