<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('produk') }}">
                <i class="bi bi-inboxes"></i>
                <span>Produk</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="">
                <i class="bi bi-journal-text"></i>
                <span>Pesanan</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Pesanan Baru</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Diproses</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Diterima</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Gagal</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-heading">User</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-inboxes"></i>
                <span>Customer</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-inboxes"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>

</aside>
<!-- End Sidebar-->
