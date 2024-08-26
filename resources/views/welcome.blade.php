<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Modern Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #1a1a1a;
            padding: 1rem 0;
        }

        .navbar-brand,
        .nav-link {
            color: #fff !important;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://source.unsplash.com/1600x900/?business,office') no-repeat center center;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
            position: relative;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 30px;
        }

        .btn-custom {
            background-color: #ff7f50;
            color: #fff;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #ff5733;
        }

        .features {
            padding: 5rem 0;
        }

        .features h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
            font-weight: 600;
            color: #1a1a1a;
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-body {
            padding: 2rem;
            text-align: center;
        }

        .footer {
            background-color: #1a1a1a;
            color: #fff;
            padding: 2rem 0;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">BrandName</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Transform Your Business</h1>
            <p>Discover innovative solutions tailored to your needs.</p>
            <a href="#" class="btn btn-custom btn-lg">Learn More</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2>Our Key Features</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://source.unsplash.com/400x300/?innovation" alt="Feature 1">
                        <div class="card-body">
                            <h5 class="card-title">Innovation</h5>
                            <p class="card-text">Leverage the latest technologies to stay ahead.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://source.unsplash.com/400x300/?teamwork" alt="Feature 2">
                        <div class="card-body">
                            <h5 class="card-title">Collaboration</h5>
                            <p class="card-text">Work seamlessly with your team and partners.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://source.unsplash.com/400x300/?support" alt="Feature 3">
                        <div class="card-body">
                            <h5 class="card-title">Support</h5>
                            <p class="card-text">24/7 support to keep your business running smoothly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 BrandName. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
