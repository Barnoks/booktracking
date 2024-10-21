<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Pengunjung</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
  }
  .header {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .header .title {
    font-size: 24px;
  }
  .header .user-info img {
    border-radius: 50%;
    width: 30px;
    height: 30px;
    margin-right: 10px;
  }
  .sidebar {
    width: 200px;
    background-color: #343a40;
    color: white;
    position: fixed;
    top: 0;
    bottom: 0;
    padding-top: 60px;
  }
  .sidebar a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px 20px;
  }
  .sidebar a:hover {
    background-color: #495057;
  }
  .content {
    margin-left: 200px;
    padding: 20px;
  }
  .data-pengunjung {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
  }
  .data-pengunjung h3 {
    margin-bottom: 20px;
  }
  .data-pengunjung table {
    width: 100%;
    border-collapse: collapse;
  }
  .data-pengunjung table th, .data-pengunjung table td {
    padding: 10px;
    border: 1px solid #dee2e6;
    text-align: left;
  }
  .data-pengunjung table th {
    background-color: #f8f9fa;
  }
  .data-pengunjung table td.actions {
    text-align: center;
  }
  .data-pengunjung table td.actions a {
    color: #007bff;
    text-decoration: none;
  }
</style>

<main>
  <div class="header">
    <marquee class="title">Data Pengunjung</marquee>
    <div class="user-info">
      <img alt="User profile picture" src="https://storage.googleapis.com/a1aa/image/h7eb5XZ7Zo3lNSv0NWtiYkZEvfMssJEWjLS56HfVgstfj7UOB.jpg" />
      <span><h7 class="display fw-bold"></h7></span>
    </div>
  </div>
  <div class="sidebar">
    <a href="/dashboard">Beranda</a>
    <a href="/Galeri Buku">Galeri Buku</a>
    <a href="/dashboard">back</a>
  </div>

  <div class="content">
    <div class="data-pengunjung">
      <h3>Data Pengunjung</h3>
      <table>
        <thead>
          <tr>
            <th>Nama Pengunjung</th>
            <th>Waktu Kunjungan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Siti</td>
            <td>01/10/2024, 09:30</td>
            <td class="actions">
              <a href="#">Detail</a>
            </td>
          </tr>
          <tr>
            <td>Joko</td>
            <td>01/10/2024, 10:00</td>
            <td class="actions">
              <a href="#">Detail</a>
            </td>
          </tr>
          <!-- Data pengunjung bisa ditambahkan sesuai dengan informasi dari database -->
        </tbody>
      </table>
    <div class="large">
    <div class="latest-loans">
        <h2>Data Buku Yang Dibaca</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Genre</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Belajar PHP</td>
                    <td>Jordi el nino</td>
                    <td>Pemrograman</td>
                    <td>150</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Belajar JavaScript</td>
                    <td>ms brewww</td>
                    <td>Pemrograman</td>
                    <td>120</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Belajar CSS</td>
                    <td>Momoka nishina</td>
                    <td>Desain</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Belajar HTML</td>
                    <td>sugiono</td>
                    <td>Desain</td>
                    <td>130</td>
                </tr>
            </tbody>
        </table>

       
<h2>Grafik Data Buku</h2>
        <canvas id="booksChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('booksChart').getContext('2d');
        const booksChart = new Chart(ctx, {
            type: 'bar', // Tipe grafik
            data: {
                labels: ['Belajar PHP', 'Belajar JavaScript', 'Belajar CSS', 'Belajar HTML'], // Label pada sumbu x
                datasets: [{
                    label: 'Jumlah Buku', // Label untuk dataset
                    data: [150, 120, 100, 130], // Data untuk grafik
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true // Mulai dari nol pada sumbu y
                    }
                }
            }
        });
    </script>
</body>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

  </div>
</main>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
