
<li class="menu-header"><i class="fas fa-landmark"></i><span> Menu Utama</span></li>
<li class="nav-item{{ request()->is('pegawai') ? ' active' : '' }}"><a href="{{ url('/admin/pegawai') }}"><i class="fas fa-user-friends"></i><span>Pegawai</span></a></li>
<li class="nav-item{{ request()->is('customers') ? ' active' : '' }}"><a href="{{ url('/admin/customers') }}"><i class="fas fa-chalkboard-teacher"></i><span>Customer</span></a></li>
<li class="nav-item{{ request()->is('barang') ? ' active' : '' }}"><a href="{{ url('/admin/barang') }}"><i class="fas fa-book-open"></i><span>Barang</span></a></li>
<li class="nav-item{{ request()->is('supplier') ? ' active' : '' }}"><a href="{{ url('/admin/supplier') }}"><i class="fas fa-users"></i><span>Supplier</span></a></li>
<li class="nav-item{{ request()->is('komputer') ? ' active' : '' }}"><a href="{{ url('/admin/komputer') }}"><i class="fas fa-user-graduate"></i><span>Komputer</span></a></li>
<li class="nav-item{{ request()->is('keluhan') ? ' active' : '' }}"><a href="{{ url('/admin/keluhan') }}"><i class="far fa-bell"></i><span>Keluhan</span></a></li>