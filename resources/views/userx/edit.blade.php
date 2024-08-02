<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="with=device-width, initial scale=1.0">
    <title>Service Komputer</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <section class="header">
        <nav>
            <img src="{{ asset('image/Logo.png') }}" alt="Deskripsi Gambar">

            </a>
            <div class="nav-links">
                <ul>
                    <li class="nav-item{{ request()->is('/awal') ? ' active' : '' }}">
                        <a href="{{ url('/awal') }}">
                            <span class="nav-item text-white">HOME</span>
                        </a>
                    </li>
                    <li class="nav-item{{ request()->is('/userx') ? ' active' : '' }}">
                        <a href="{{ url('/userx') }}">
                            <span class="nav-item text-white">USER</span>
                        </a>
                    </li>
                    <li class="nav-item{{ request()->is('/pegawai') ? ' active' : '' }}">
                        <a href="{{ url('/pegawai') }}">
                            <span class="nav-item text-white">DATA KOMPUTER SERVICE</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/login') }}" class="hero-btn">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <h1>Service Komputer <br>FAMA</h1>
            <p>Selamat Datang di Service Komputer FAMA<BR>
                Kami adalah penyedia layanan perbaikan dan perawatan komputer terpercaya<BR></p>
            <a href="https://wa.me/6285828063177" class="hero-btn">Hubungi Kami</a>
            <p>Atau</p>
            <div class="social-media-icons">
                <a href="https://www.facebook.com/mus.w.566?mibextid=ZbWKwL" target="_blank">
                    <img src="{{ asset('image/fb.jpg') }}" alt="Facebook">
                </a>
                <a href="https://wa.me/6285828063177" target="_blank">
                    <img src="{{ asset('image/wa.jpg') }}" alt="WhatsApp">
                </a>
                <a href="https://www.instagram.com/xaxxax.xx?igsh=Z3Nqa2FoMG9wMHFm" target="_blank">
                    <img src="{{ asset('image/ig.jpg') }}" alt="Instagram">
                </a>
                <a href="https://www.tiktok.com/@abraham.wwf?_t=8mhcehJDbnd&_r=1" target="_blank">
                    <img src="{{ asset('image/tiktok.jpg') }}" alt="Tiktok">
                </a>
            </div>
        </div>
    </section>
    
<!---  course-->

<div class="section-header">
    <h1>Edit</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('userx.update', $userx->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_use" class="form-control" value="{{ $userx->nama_use }}" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <textarea name="email" class="form-control" required>{{ $userx->email }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select name="level" class="form-control" required>
                            <option value="boss" {{ $userx->level == 'boss' ? 'selected' : '' }}>Boss</option>
                            <option value="admin" {{ $userx->level == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{ $userx->level == 'user' ? 'selected' : '' }}>User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="footer-container">
        <div class="footer-section about">
            <h4>Tentang Kami</h4>
            <p>Kami menyediakan sepatu berkualitas tinggi dengan desain terkini. Temukan gaya Anda dengan produk-produk kami.</p>
        </div>
        <div class="footer-section links">
            <h4>Tautan Cepat</h4>
            <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="produk.html">Produk</a></li>
                <li><a href="profile.html">Profile</a></li>
            </ul>
        </div>
        <div class="footer-section contact">
            <h4>Hubungi Kami</h4>
            <p>Alamat: SUHAID, KAPUAS HULU, KALBAR</p>
            <p>Email: info@sercom.com</p>
            <p>Telepon: (123) 456-7890</p>
        </div>
        <div class="footer-section social-media">
            <h4>Sosial Media</h4>
            <div class="social-media-icons">
                <a href="https://www.facebook.com/mus.w.566?mibextid=ZbWKwL" target="_blank"><img src="{{ asset('image/fb.jpg') }}" alt="Facebook"></a>
                <a href="https://wa.me/6285828063177" target="_blank"><img src="{{ asset('image/wa.jpg') }}" alt="WhatsApp"></a>
                <a href="https://www.instagram.com/xaxxax.xx?igsh=Z3Nqa2FoMG9wMHFm" target="_blank"><img src="{{ asset('image/ig.jpg') }}" alt="Instagram"></a>
                <a href="https://www.tiktok.com/@bluephantom.ww?_t=8mhcehJDbnd&_r=1" target="_blank"><img src="{{ asset('image/tiktok.jpg') }}" alt="Tiktok"></a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; 2024 FAMA - Hak Cipta Dilindungi</p>
    </div>
</footer>


</body>
</html>