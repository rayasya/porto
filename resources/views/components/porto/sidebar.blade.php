<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ asset('template') }}/index.html">
        <div class="sidebar-brand-text mx-2">Admin Portofolio</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ request()->is('portfolio') ? 'active' : ''}}">
        <a class="nav-link" href="/portfolio">
            <i class="fas fa-folder-open"></i>
            <span>Portofolio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>