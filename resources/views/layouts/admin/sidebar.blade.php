<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Barang.com</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('/admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('admin') }}">
            <i class="fas fa-tv"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Menemukan -->
    <li class="nav-item {{ request()->is('/admin/menemukans/*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('admin/menemukans') }}">
            <i class="far fa-check-circle"></i>
            <span>Menemukan</span></a>
    </li>

    <!-- Nav Item - Kehilangan -->
    <li class="nav-item {{ request()->is('/admin/kehilagans/*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('admin/kehilangans') }}">
            <i class="far fa-times-circle"></i>
            <span>Kehilangan</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
