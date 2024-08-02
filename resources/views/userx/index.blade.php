<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Komputer</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/Logo.png') }}" alt="Deskripsi Gambar" width="30" height="30">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
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
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="text-box text-center mt-4">
            <h1>Service Komputer <br>FAMA</h1>
            <p>Selamat Datang di Service Komputer FAMA<br>Kami adalah penyedia layanan perbaikan dan perawatan komputer terpercaya</p>
            <a href="https://wa.me/6285828063177" class="btn btn-primary">Hubungi Kami</a>
            <p>Atau</p>
            <div class="social-media-icons">
                <a href="https://www.facebook.com/mus.w.566?mibextid=ZbWKwL" target="_blank">
                    <img src="{{ asset('image/fb.jpg') }}" alt="Facebook" width="30" height="30">
                </a>
                <a href="https://wa.me/6285828063177" target="_blank">
                    <img src="{{ asset('image/wa.jpg') }}" alt="WhatsApp" width="30" height="30">
                </a>
                <a href="https://www.instagram.com/xaxxax.xx?igsh=Z3Nqa2FoMG9wMHFm" target="_blank">
                    <img src="{{ asset('image/ig.jpg') }}" alt="Instagram" width="30" height="30">
                </a>
                <a href="https://www.tiktok.com/@abraham.wwf?_t=8mhcehJDbnd&_r=1" target="_blank">
                    <img src="{{ asset('image/tiktok.jpg') }}" alt="Tiktok" width="30" height="30">
                </a>
            </div>
        </div>
    </section>
    
    <!---  Content Section -->
    <div class="container mt-5">
        <div class="section-header mb-4">
            <h1>Halaman User</h1>
        </div>
        <div class="card">
            <div class="card-header">
                <a href="{{ route('userx.create') }}" class="btn btn-info">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Level</th>
                                <th scope="col">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($userxes as $index => $userx)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $userx->nama_use }}</td>
                                <td>{{ $userx->email }}</td>
                                <td>{{ $userx->level }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('userx.destroy', $userx->id) }}" method="POST" class="d-inline">
                                        <a href="{{ route('userx.show', $userx->id) }}" class="btn btn-dark btn-sm">SHOW</a>
                                        <a href="{{ route('userx.edit', $userx->id) }}" class="btn btn-primary btn-sm">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">Data Pengguna Belum Ada.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light mt-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>Tentang Kami</h4>
                    <p>Kami menyediakan sepatu berkualitas tinggi dengan desain terkini. Temukan gaya Anda dengan produk-produk kami.</p>
                </div>
               
                <div class="col-md-3">
                    <h4>Hubungi Kami</h4>
                    <p>Alamat: SUHAID, KAPUAS HULU, KALBAR</p>
                    <p>Email: info@sercom.com</p>
                    <p>Telepon: (123) 456-7890</p>
                </div>
                <div class="col-md-3">
                    <h4>Sosial Media</h4>
                    <div class="social-media-icons">
                        <a href="https://www.facebook.com/mus.w.566?mibextid=ZbWKwL" target="_blank"><img src="{{ asset('image/fb.jpg') }}" alt="Facebook" width="30" height="30"></a>
                        <a href="https://wa.me/6285828063177" target="_blank"><img src="{{ asset('image/wa.jpg') }}" alt="WhatsApp" width="30" height="30"></a>
                        <a href="https://www.instagram.com/xaxxax.xx?igsh=Z3Nqa2FoMG9wMHFm" target="_blank"><img src="{{ asset('image/ig.jpg') }}" alt="Instagram" width="30" height="30"></a>
                        <a href="https://www.tiktok.com/@bluephantom.ww?_t=8mhcehJDbnd&_r=1" target="_blank"><img src="{{ asset('image/tiktok.jpg') }}" alt="Tiktok" width="30" height="30"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <p>&copy; 2024 FAMA - Hak Cipta Dilindungi</p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
