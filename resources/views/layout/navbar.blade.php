 <!-- Navbar Start -->
 <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
     <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
         <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
     </a>
     <a href="#" class="sidebar-toggler flex-shrink-0">
         <i class="fa fa-bars"></i>
     </a>
     <form class="d-none d-md-flex ms-4">
         <input class="form-control border-0" type="search" placeholder="Search">
     </form>

     <div class="navbar-nav align-items-center ms-auto">
     <div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img class="rounded-circle me-lg-2" src="{{ asset('assets/dashboard/img/user.jpg') }}" alt="User Image" style="width: 40px; height: 40px;">
        <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
    </a>
    <ul class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#">My Profile</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Log Out</button>
            </form>
        </li>
        <li class="text-muted text-center mt-2">{{ Auth::user()->role == 'admin' ? 'Admin' : 'User' }}</li>
    </ul>
</div>

</div>

 </nav>
 <!-- Navbar End -->
