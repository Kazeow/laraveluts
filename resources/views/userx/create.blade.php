<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Komputer FAMA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('/awal') }}">
                <img src="{{ asset('image/Logo.png') }}" alt="Logo" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item{{ request()->is('/awal') ? ' active' : '' }}">
                        <a class="nav-link" href="{{ url('/awal') }}">HOME</a>
                    </li>
                    <li class="nav-item{{ request()->is('/userx') ? ' active' : '' }}">
                        <a class="nav-link" href="{{ url('/userx') }}">USER</a>
                    </li>
                    <li class="nav-item{{ request()->is('/pegawai') ? ' active' : '' }}">
                        <a class="nav-link" href="{{ url('/pegawai') }}">DATA KOMPUTER SERVICE</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('/login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron text-center">
            <h1>Service Komputer FAMA</h1>
            <p>Selamat Datang di Service Komputer FAMA</p>
            <p>Kami adalah penyedia layanan perbaikan dan perawatan komputer terpercaya</p>
            <a href="https://wa.me/6285828063177" class="btn btn-success">Hubungi Kami</a>
            <p>Atau</p>
            <div class="d-inline-block">
                <a href="https://www.facebook.com/mus.w.566?mibextid=ZbWKwL" target="_blank" class="mr-2">
                    <img src="{{ asset('image/fb.jpg') }}" alt="Facebook" height="30">
                </a>
                <a href="https://wa.me/6285828063177" target="_blank" class="mr-2">
                    <img src="{{ asset('image/wa.jpg') }}" alt="WhatsApp" height="30">
                </a>
                <a href="https://www.instagram.com/xaxxax.xx?igsh=Z3Nqa2FoMG9wMHFm" target="_blank" class="mr-2">
                    <img src="{{ asset('image/ig.jpg') }}" alt="Instagram" height="30">
                </a>
                <a href="https://www.tiktok.com/@abraham.wwf?_t=8mhcehJDbnd&_r=1" target="_blank">
                    <img src="{{ asset('image/tiktok.jpg') }}" alt="Tiktok" height="30">
                </a>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <div class="section-header">
            <h1>Tambah</h1>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('userx.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama_use">Nama</label>
                                <input type="text" name="nama_use" id="nama_use" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <textarea name="email" id="email" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="level">Level</label>
                                <select name="level" id="level" class="form-control" required>
                                    <option value="boss">Boss</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Tentang Kami</h4>
                    <p>Kami menyediakan layanan perbaikan dan perawatan komputer berkualitas tinggi. Percayakan kebutuhan teknologi Anda pada kami.</p>
                </div>
                <div class="col-md-4">
                    <h4>Tautan Cepat</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/awal') }}" class="text-white">Beranda</a></li>
                        <li><a href="{{ url('/produk') }}" class="text-white">Produk</a></li>
                        <li><a href="{{ url('/profile') }}" class="text-white">Profil</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Hubungi Kami</h4>
                    <p>Alamat: SUHAID, KAPUAS HULU, KALBAR</p>
                    <p>Email: info@sercom.com</p>
                    <p>Telepon: (123) 456-7890</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <div class="social-media-icons">
                    <a href="https://www.facebook.com/mus.w.566?mibextid=ZbWKwL" target="_blank"><img src="{{ asset('image/fb.jpg') }}" alt="Facebook" height="30"></a>
                    <a href="https://wa.me/6285828063177" target="_blank"><img src="{{ asset('image/wa.jpg') }}" alt="WhatsApp" height="30"></a>
                    <a href="https://www.instagram.com/xaxxax.xx?igsh=Z3Nqa2FoMG9wMHFm" target="_blank"><img src="{{ asset('image/ig.jpg') }}" alt="Instagram" height="30"></a>
                    <a href="https://www.tiktok.com/@bluephantom.ww?_t=8mhcehJDbnd&_r=1" target="_blank"><img src="{{ asset('image/tiktok.jpg') }}" alt="Tiktok" height="30"></a>
                </div>
                <p>&copy; 2024 FAMA - Hak Cipta Dilindungi</p>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
