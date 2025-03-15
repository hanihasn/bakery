<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar & Sidebar E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
        crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 280px;
            height: 100vh;
            position: fixed;
            left: -280px;
            top: 0;
            background-color: white;
            color: black;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            transition: all 0.3s;
        }

        .sidebar.show {
            left: 0;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            transition: margin-left 0.3s;
        }

        .navbar .navbar-brand,
        .navbar .nav-link {
            color: black;
        }

        .navbar-icons a {
            color: #7A73D1;
            font-size: 20px;
            margin-left: 15px;
        }

        .navbar-icons a:hover {
            color: #5a50b1;
        }

        .toggle-btn {
            font-size: 24px;
            color: #7A73D1;
            cursor: pointer;
            transition: color 0.3s;
        }

        .toggle-btn:hover {
            color: #5a50b1;
        }

        .content {
            transition: margin-left 0.3s;
        }

        .sidebar.show~.content,
        .sidebar.show~.navbar {
            margin-left: 280px;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <h5>Menu Member</h5>
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user" style="color:#7A73D1;"></i>
                    Profil</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-box" style="color:#7A73D1;"></i> Detail
                    Pesanan</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-history" style="color:#7A73D1;"></i>
                    Riwayat Pesanan</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-star" style="color:#7A73D1;"></i> Ulasan
                    & Rating</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-comments" style="color:#7A73D1;"></i>
                    Chat</a></li>
        </ul>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-3">
        <div class="container-fluid">
            <span class="toggle-btn ms-3" onclick="toggleSidebar()">☰</span>
            <a class="navbar-brand ms-3" href="#">Bite Me! Bakery</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-3">
                    <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Wishlist</a></li>
                </ul>
            </div>
            <div class="navbar-icons d-flex ms-auto">
                <a href="#" class="me-3"><i class="fas fa-shopping-cart"></i></a>
                <a href="#"><i class="fas fa-bell"></i></a>
            </div>
        </div>
    </nav>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('show');
        }
    </script>
</body>

</html>