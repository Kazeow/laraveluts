<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard Komputer Service</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/fontawesome/css/all.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/style.css">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <ul class="navbar-nav mr-auto">
          <li><a href="#" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications</div>
              <div class="dropdown-list-content dropdown-list-icons">
                <!-- Notifications -->
              </div>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="https://demo.getstisla.com/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">Komputer Service</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SA</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menu Utama</li>
            <li class="nav-item {{ request()->is('pegawai') ? ' active' : '' }}">
              <a href="{{ url('/pegawai') }}" class="nav-link">
                <i class="fas fa-users"></i> <span>Data Pegawai</span>
              </a>
            </li>
            <li class="nav-item {{ request()->is('customers') ? ' active' : '' }}">
              <a href="{{ url('/customers') }}" class="nav-link">
                <i class="fas fa-book-open"></i> <span>Data Customer</span>
              </a>
            </li>
        <li class="nav-item {{ request()->is('barang') ? ' active' : '' }}">
          <a href="{{ url('/barang') }}" class="nav-link">
            <i class="fas fa-users"></i> <span>Data Barang</span>
          </a>
        </li>
          <li class="nav-item {{ request()->is('komputer') ? ' active' : '' }}">
            <a href="{{ url('/komputer') }}" class="nav-link">
              <i class="fas fa-chalkboard-teacher"></i> <span>Data Komputer</span>
            </a>
          </li>
            <li class="nav-item {{ request()->is('supplier') ? ' active' : '' }}">
              <a href="{{ url('/supplier') }}" class="nav-link">
                <i class="fas fa-user-graduate"></i> <span>Data Supplier</span>
              </a>
            </li>
            <li class="nav-item {{ request()->is('keluhan') ? ' active' : '' }}">
              <a href="{{ url('/keluhan') }}" class="nav-link">
                <i class="far fa-bell"></i> <span>Data Keluhan</span>
              </a>
            </li>
          </ul>
        </aside>
      </div>

      <div class="main-content">
        <section class="section">
          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2024 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://demo.getstisla.com/assets/modules/jquery.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/popper.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/tooltip.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/moment.min.js"></script>
  <script src="https://demo.getstisla.com/assets/js/stisla.js"></script>

  <!-- Template JS File -->
  <script src="https://demo.getstisla.com/assets/js/scripts.js"></script>
  <script src="https://demo.getstisla.com/assets/js/custom.js"></script>
</body>
</html>
