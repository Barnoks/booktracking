<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Daftar Pengunjung</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Pengunjung</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('visitors.index') }}">Daftar Pengunjung</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('visitors.create') }}">Tambah Pengunjung</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <!-- Bagian konten dinamis akan ditampilkan di sini -->
        @yield('content')
        @extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="mb-4">Daftar Pengunjung</h2>
            <a href="{{ route('visitors.create') }}" class="btn btn-primary mb-3">Tambah Pengunjung</a>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visitors as $visitor)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $visitor->name }}</td>
                        <td>{{ $visitor->email }}</td>
                        <td>{{ $visitor->address }}</td>
                        <td>{{ $visitor->phone_number }}</td>
                        <td>
                            <a href="{{ route('visitors.show', $visitor->id) }}" class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ route('visitors.edit', $visitor->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('visitors.destroy', $visitor->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
