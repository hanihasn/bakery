<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bite Me! Bakery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;500&family=Pacifico&family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: white;
            padding: 15px 0;
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #333 !important;
            font-family: 'Playfair Display', serif;
        }
        .navbar-nav .nav-link {
            color: #333;
            font-weight: 500;
            margin: 0 15px;
        }
        .btn-account {
            border: 2px solid #333;
            border-radius: 30px;
            padding: 8px 20px;
            font-weight: 500;
        }
        .btn-login {
            background-color: #1d1d1d;
            color: white;
            border-radius: 30px;
            padding: 8px 20px;
            font-weight: 500;
        }
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            position: relative;
        }
        .hero-text {
            max-width: 450px;
            text-align: left;
            position: relative;
        }
        .bite-me-text {
            font-size: 60px;
            font-weight: bold;
            font-family: 'Pacifico', cursive;
            color: #7A73D1;
            display: inline-block;
            letter-spacing: 3px;
            text-shadow: 3px 3px 0px #ddd, 5px 5px 0px #bbb;
            position: relative;
        }
        .bakery-text {
            font-size: 50px;
            font-weight: bold;
            font-family: 'Great Vibes', cursive;
            color: #333;
            display: block;
            margin-top: -10px;
            letter-spacing: 2px;
        }
        .hero-text p {
            color: #555;
            font-size: 16px;
        }
        .btn-start {
            background-color: #7A73D1;
            color: white;
            border-radius: 50px;
            padding: 12px 28px;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            border: 2px solid white;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
            transform: skewX(-15deg);
        }
        .btn-start:hover {
            background-color: #5e56b1;
            color: white;
        }
        .hero-image {
            position: relative;
            width: 400px;
        }
        .hero-image img {
            width: 100%;
            border-radius: 10px;
            border: 8px solid #eee8ff;
        }
        .text-overlay {
            position: absolute;
            top: 50%;
            left: -50px;
            font-size: 40px;
            font-weight: bold;
            color: #7A73D1;
            font-family: 'Playfair Display', serif;
            transform: translateY(-50%) rotate(-20deg);
            letter-spacing: 2px;
            text-shadow: 3px 3px 0px #ddd, 5px 5px 0px #bbb;
        }

        /* Garis dekoratif di sekitar "Bite Me!" */
        .decorative-line {
            position: absolute;
            width: 150px;
            height: 80px;
            border: 4px solid #7A73D1;
            border-top-left-radius: 80px;
            border-bottom-right-radius: 80px;
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            transform: rotate(-15deg);
            top: -20px;
            left: -40px;
            z-index: -1;
        }

        /* Garis melengkung di samping gambar */
        .curved-line {
            position: absolute;
            width: 180px;
            height: 90px;
            border: 3px solid #7A73D1;
            border-radius: 90px;
            top: 20px;
            right: -50px;
            transform: rotate(25deg);
            z-index: -1;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Bite Me! Bakery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">The Market</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Subsidiaries</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                </ul>
                <a href="{{ route('user.register') }}" class="btn btn-account ms-3">Create an account</a>
                <a href="{{ route('user.login') }}" class="btn btn-login ms-2">Log in</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="hero-section">
            <div class="hero-text">
                <span class="bite-me-text">Bite Me!</span>
                <div class="decorative-line"></div> <!-- Garis hiasan -->
                <span class="bakery-text">Bakery</span>
                <p>Dibuat dengan cinta, disajikan dengan senyuman. Rasakan manisnya kebahagiaan di setiap gigitan.</p>
                <a href="#" class="btn-start">Get started</a>
            </div>
            <div class="hero-image">
                <div class="text-overlay">Yummy!</div>
                <img src="{{ asset('images/food.jpg') }}" alt="Food Image">
                <div class="curved-line"></div> <!-- Garis melengkung -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
