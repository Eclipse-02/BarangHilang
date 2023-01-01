<nav class="nav navbar-fixed-top">
    <div class="nav-menu flex-row">
        <div class="nav-brand">
            <a href="index.html" class="navbar-brand page">Kehilangan Barang</a>
        </div>
        <div class="toggle-collapse">
            <div class="toggle-icons">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div>
            <ul class="nav-items text-end">
                <li class="nav-link">
                    <a href="{{ url('/') }}" class="page-scroll">Home</a>
                </li>
                <li class="nav-link">
                    <a href="{{ url('kehilangans') }}" class="page-scroll">Kehilangan Barang</a>
                </li>
                <li class="nav-link">
                    <a href="{{ url('menemukans') }}" class="page-scroll">Menemukan Barang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>