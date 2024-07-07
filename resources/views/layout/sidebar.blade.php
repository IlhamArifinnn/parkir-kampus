<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{ route('index') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">Parkir Kampus</h3>
        </a>
        <div class="navbar-nav w-100">
            @if(Auth::user()->role == 'admin')
                <a href="{{ route('kampus.index') }}" class="nav-item nav-link {{ Request::is('kampus*') ? 'active' : '' }}">
                    <i class="fa fa-tachometer-alt me-2"></i> Kampus
                </a>
                <a href="{{ route('jenis.index') }}" class="nav-item nav-link {{ Request::is('jenis*') ? 'active' : '' }}">
                    <i class="fa fa-th me-2"></i> Jenis
                </a>
                <a href="{{ route('kendaraans.index') }}" class="nav-item nav-link {{ Request::is('kendaraans*') ? 'active' : '' }}">
                    <i class="fa fa-keyboard me-2"></i> Kendaraan
                </a>
                <a href="{{ route('area_parkirs.index') }}" class="nav-item nav-link {{ Request::is('area_parkirs*') ? 'active' : '' }}">
                    <i class="fa fa-table me-2"></i> Area Parkir
                </a>
                <a href="{{ route('transaksis.index') }}" class="nav-item nav-link {{ Request::is('transaksis*') ? 'active' : '' }}">
                    <i class="fa fa-chart-bar me-2"></i> Transaksi
                </a>
            @else
                <a href="{{ route('kendaraans.index') }}" class="nav-item nav-link {{ Request::is('kendaraans*') ? 'active' : '' }}">
                    <i class="fa fa-keyboard me-2"></i> Kendaraan
                </a>
                <a href="{{ route('transaksis.index') }}" class="nav-item nav-link {{ Request::is('transaksis*') ? 'active' : '' }}">
                    <i class="fa fa-chart-bar me-2"></i> Transaksi
                </a>
                <!-- Tambahkan rute lain untuk user di sini -->
            @endif
        </div>
    </nav>
</div>
<!-- Sidebar End -->
