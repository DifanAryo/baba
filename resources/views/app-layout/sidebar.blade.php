<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        {{-- <img src="{{ asset('AdminLTE/dist') }}/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">Astana </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
                <li class="nav-item menu    ">
                    <a href="dashboard" class="nav-link {{ Request :: is('dashboard') ? 'active' : '' }}    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>   
                <li class="nav-item">
                    <a href="input" class="nav-link {{ Request :: is('input') ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-pen"></i>
                        <p>
                            Input
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="verif" class="nav-link {{ Request :: is('verif') ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-fa-sharp fa-solid fa-chart-pie"></i>
                        <p>
                            Verifikasi
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="asset" class="nav-link {{ Request :: is('asset') ? 'active' : '' }} ">
                        <i class="nav-icon fas  fa-chart-line"></i>
                        <p>
                            Asset
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link {{ Request :: is('stok') ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-solid fa-window-maximize fa-2xs"></i>
                        <p>
                            Stok
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link {{ Request :: is('master') ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-solid fa-users fa-2xs"></i>
                        <p>
                            Master Data
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link {{ Request :: is('setting') ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-sharp fa-solid fa-wrench"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
