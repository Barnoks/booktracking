<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya khusus untuk halaman beranda */
        .hero {
            background-image: url('https://i.pinimg.com/474x/1f/09/c3/1f09c3c6a0fbebc1dd4202b7e0a1602e.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            color: black;
            display: right;
            justify-content: right;
            align-items: center;
            text-align: right;
        }

        .hero h1 {
            font-size: 60px;
            font-weight: bold;
        }

        .hero p {
            font-size: 20px;
            margin-top: 10px;
        }

        .features {
            padding: 60px 0;
        }

        .features h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        .footer {
            background-color: #111;
            color: white;
            padding: 30px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div>
            <h1>Welcome to BookTracking</h1>
            <p>Discover the world of endless possibilities with us</p>
            <a href="/Galeri Buku" class="btn btn-danger btn-lg mt-3">GO library</a>
        </div>
    </div>

    <!-- Features Section -->

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <img src="https://i.pinimg.com/474x/ab/3e/8f/ab3e8f733e83a98d4dbdee19226eeffa.jpg" alt="About Us Image" class="img-fluid">
                <div class="col-md-6 d-flex align-items-right">
                <p class="mb-3"> 
                Filosofi Perpustakaan:
                "Perpustakaan bukan hanya tempat untuk membaca buku,
                 tetapi juga ruang untuk mengeksplorasi ide-ide besar, 
                 mengasah kreativitas, dan menemukan jati diri."
               </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 MyWebsite. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- Halaman dengan Sidebar dan User -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman dengan Sidebar dan User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS untuk sidebar */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            padding-top: 20px;
            color: white;
        }

        .sidebar a {
            padding: 15px 20px;
            text-decoration: none;
            font-size: 18px;
            color: blue;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575757;
            color: white;
        }

        /* Bagian user di sidebar */
        .user-profile {
            text-align: center;
            margin-bottom: 20px;
        }

        .user-profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid white;
        }

        .user-profile h4 {
            margin: 10px 0 5px;
        }

        .user-profile p {
            font-size: 14px;
            color: #aaa;
        }

        /* CSS untuk konten, margin di sebelah kiri menyesuaikan sidebar */
        .content {
            margin-left: 260px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Bagian User -->
        <div class="header">
            <div class="user-profile">
                <img src="https://storage.googleapis.com/a1aa/image/h7eb5XZ7Zo3lNSv0NWtiYkZEvfMssJEWjLS56HfVgstfj7UOB.jpg" alt="User profile picture">
                <h4>{{ auth()->user()->name }}</h4>
                <p>user</p>
            </div>
        </div>
        <!-- Tautan Navigasi -->
        <a href="/dashboard">Refresh</a>
        <a href="/Data pengunjung">Data Pengunjung</a>
        <a href="/" style="color: red;">Logout</a>
    </div>
