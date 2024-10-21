<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri buku</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar a {
            color: white;
        }
        .hero-section {
            background: url('https://source.unsplash.com/1600x400/?library') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 100px 0;
            background-attachment: fixed;
        }
        .hero-section h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .hero-section p {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .gallery-section .card {
            margin-bottom: 20px;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .search-bar {
            margin: 20px 0;
        }
    </style>
</head>
<body>

<!-- Header & Navbar -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookTracking Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://i.pinimg.com/enabled_lo/564x/b6/45/4c/b6454cf0dfb181d9ede4002e94038a09.jpg'); /* Ganti dengan path gambar latar belakang Anda */
            background-size: cover; /* Membuat gambar latar belakang menutupi seluruh halaman */
            background-position: center; /* Memposisikan gambar di tengah */
        }
        .navbar {
            background-image: url('https://i.pinimg.com/enabled_lo/474x/0c/06/10/0c06103aa7ecca362dfdd194d5cc99de.jpg'); /* Latar belakang navbar semi-transparan */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-Black">
    <div class="container">
            <!-- Tombol Back dengan bentuk tabung -->
            <button style="background-color: red; color: white; border-radius: 20px; padding: 10px 20px; border: none;">
                <a href="dashboard" style="text-decoration: none; color: white;">Back</a>
            </button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 style="color: black;">Galeri Perpustakaan</h1>
        <marquee style="color: black;">Membuka Jendela Dunia dengan Membaca</marquee>
        <a href="#galeri" class=""></a>
    </div>
</section>

<!-- Search Bar -->
<div class="container search-bar text-center">
    <form class="d-flex justify-content-center">
        <input class="form-control me-2" type="search" placeholder="Cari buku..." aria-label="Search" style="width: 800px;">
        <button class="btn btn-primary" type="submit">Cari</button>
    </form>
</div>

<!-- Galeri Buku -->
<section id="galeri" class="gallery-section py-5">
    <div class="container">
    <h1 style="color: black;">Genre Buku</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://i.pinimg.com/474x/a8/06/03/a8060305202e9d20447223905d05f28f.jpg" class="card-img-top" alt="Buku 1">
                    <div class="card-body">
                        <h5 class="card-title">Buku 1</h5>
                        <p class="card-text">sejarah</p>
                        <a href="https://drive.google.com/file/d/1C7lQmUHDFiduHaZlMACDPx1GWa_P3Dk7/view?usp=sharing" class="btn btn-primary">Buka Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/5c/e1/ff/5ce1ff77f3f877c07324951d1fe042bf.jpg" class="card-img-top" alt="Buku 2">
                    <div class="card-body">
                        <h5 class="card-title">Buku 2</h5>
                        <p class="card-text">Pendidikan.</p>
                        <a href="https://drive.google.com/file/d/18J-u9yDcHd1gg6L_VYx0dEmo9vllXGtB/view?usp=sharing" class="btn btn-primary">Buka Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/ab/c7/02/abc702ac253252773aba7278e2bc8cd8.jpg" class="card-img-top" alt="Buku 3">
                    <div class="card-body">
                        <h5 class="card-title">Buku 3</h5>
                        <p class="card-text">Anime</p>
                        <a href="https://komiku.id/one-piece-chapter-1129/" class="btn btn-primary">Buka Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/ab/39/0d/ab390de268b1f38f4ed748818ab384c0.jpg" class="card-img-top" alt="Buku 4">
                    <div class="card-body">
                        <h5 class="card-title">Buku 4</h5>
                        <p class="card-text">Romansa</p>
                        <a href="https://drive.google.com/file/d/18cAoFd_S1kT1PQrfabdLln8eVGzoB5yd/view?usp=sharing" class="btn btn-primary">Buka Buku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="container">
    <h1 style="color: black;">Populer</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/eb/ea/d6/ebead69836598cf2fc3ad730cf9177ba.jpg" class="card-img-top" alt="Buku 1">
                    <div class="card-body">
                        <h5 class="card-title">Buku 1</h5>
                        <p class="card-text">Pendidikan</p>
                        <a href="https://fxbuku.blogspot.com/2018/07/kemunculan-komunisme-indonesia.html#" class="btn btn-primary">Baca Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://i.pinimg.com/474x/e4/3b/81/e43b8152e8f13a986cb1ddd3e608614a.jpg" class="card-img-top" alt="Buku 2">
                    <div class="card-body">
                        <h5 class="card-title">Buku 2</h5>
                        <p class="card-text">Deskripsi singkat tentang buku ini.</p>
                        <a href="#" class="btn btn-primary">Baca Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://i.pinimg.com/474x/9f/e7/d1/9fe7d1d0dd3493a7c4343e5cded2a5e8.jpg" class="card-img-top" alt="Buku 3">
                    <div class="card-body">
                        <h5 class="card-title">Buku 3</h5>
                        <p class="card-text">Deskripsi singkat tentang buku ini.</p>
                        <a href="#" class="btn btn-primary">Baca Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://i.pinimg.com/474x/4a/a2/81/4aa2818a150ba567eec2763e0d41aa7d.jpg" class="card-img-top" alt="Buku 4">
                    <div class="card-body">
                        <h5 class="card-title">Buku 4</h5>
                        <p class="card-text">Ensiklopedia</p>
                        <a href="https://flipbookpdf.net/web/site/aab273949bb84e1c4a772d634a147fbb63f28332202410.pdf.html" class="btn btn-primary">Baca Buku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Informasi Perpustakaan -->
<footer class="footer">
<section id="info" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4"></h2>
        <div class="row">
            <div class="col-md-6">
                <h5>Alamat</h5>
                <p>Bangka Belitung, Indonesia</p>
            </div>
            <div class="col-md-6">
                <h5>Contact us</h5>
                <h5>bapperida@gmail.com</h5>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Perpustakaan Online BookTracking.</p>
        <div>
            <a href="#" class="text-light me-2"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-light me-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
