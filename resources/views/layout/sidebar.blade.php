 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
     <nav class="navbar bg-light navbar-light">
         <a href="index.html" class="navbar-brand mx-4 mb-3">
             <h3 class="text-primary"></i>Parkir Kampus</h3>
         </a>
         <div class="d-flex align-items-center ms-4 mb-4">
             <div class="position-relative">
                 <img class="rounded-circle" src="{{ asset('assets/dashboard/img/user.jpg') }}" alt=""
                     style="width: 40px; height: 40px;">
                 <div class="bg-success rounded-circle border-2 border-white position-absolute end-0 bottom-0 p-1">
                 </div>
             </div>
             <div class="ms-3">
                 <h6 class="mb-0">Jhon Doe</h6>
                 <span>Admin</span>
             </div>
         </div>
         <div class="navbar-nav w-100">
            <a href="{{ route('kampus.index') }}" class="nav-item nav-link {{ Request::is('kampus') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Kampus</a>
            <a href="{{ route('jenis.index') }}" class="nav-item nav-link {{ Request::is('jenis') ? 'active' : '' }}"><i class="fa fa-th me-2"></i>Jenis</a>
            <a href="{{ route('kendaraans.index') }}" class="nav-item nav-link {{ Request::is('kendaraans') ? 'active' : '' }}"><i class="fa fa-keyboard me-2"></i>Kendaraan</a>
            <a href="{{ route('area_parkirs.index') }}" class="nav-item nav-link {{ Request::is('area_parkirs') ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Area Parkir</a>
            <a href="{{ route('transaksis.index') }}" class="nav-item nav-link {{ Request::is('transaksis') ? 'active' : '' }}"><i class="fa fa-chart-bar me-2"></i>Transaksi</a>

         </div>
     </nav>
 </div>
 <!-- Sidebar End -->
