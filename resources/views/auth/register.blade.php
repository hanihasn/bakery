<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        .register-card {
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
        .login-link {
            color: #5e56b1; /* Warna sama dengan tombol */
            font-weight: 600;
        }
        .login-link:hover {
            color: #4c4694;
        }
    </style>
</head>
<body>
    <div class="register-card text-center">
        <h2 class="mb-3">Register</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('user.register') }}" method="POST">
            @csrf
            <div class="mb-3 text-start">
                <label for="name" class="form-label">Nama</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3 text-start">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-custom w-100">Daftar</button>
        </form>
        <p class="mt-3">Sudah punya akun? <a href="{{ route('user.login') }}" class="text-decoration-none login-link">Login</a></p>
    </div>
</body>
</html>
