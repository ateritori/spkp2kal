<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class=" brand-link">
        <img src="<?= base_url(); ?>/dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light"><b>SPK</b>P2Kal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">USER</li>
                <li class="nav-item">
                    <a href="/user" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/user/profil" class="nav-link">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                            Profil User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/user/input" class="nav-link">
                        <i class="nav-icon fas fa-pen"></i>
                        <p>
                            Input Penilaian
                        </p>
                    </a>
                </li>
                <?php if (in_groups('admin')) : ?>
                    <li class="nav-header">ADMIN</li>
                    <li class="nav-item">
                        <a href="/admin" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Manage User
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/kriteria" class="nav-link">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>
                                Input Kriteria
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/alternatif" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>
                                Input Alternatif
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/prom" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Proses Promethee
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/topsis" class="nav-link">
                            <i class="nav-icon fas fa-chart-bar"></i>
                            <p>
                                Proses Topsis
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-header">KELUAR</li>
                <li class="nav-item">
                    <a href="<?= base_url('logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>