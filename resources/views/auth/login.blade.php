<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bite Me! Bakery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(135deg, #ece9fd, #d3cce3);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .login-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
        }
        .btn-custom {
            background-color: #5e56b1;
            color: #fff;
            font-weight: 600;
        }
        .btn-custom:hover {
            background-color: #4c4694;
        }
        h2 {
            font-weight: 600;
        }
        .form-label {
            font-weight: 500;
        }
        .form-control {
            font-family: 'Playfair Display', serif; /* Font dalam form */
        }
        .register-link {
            color: #5e56b1; /* Warna sama dengan tombol */
            font-weight: 600;
        }
        .register-link:hover {
            color: #4c4694;
        }
    </style>
</head>
<body>
    <div class="login-card text-center">
        <h2 class="mb-3">Login</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('user.login') }}" method="POST">
            @csrf
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-custom w-100">Login</button>
        </form>
        <p class="mt-3">Belum punya akun? <a href="{{ route('user.register') }}" class="text-decoration-none register-link">Daftar</a></p>
    </div>
</body>
</html>
