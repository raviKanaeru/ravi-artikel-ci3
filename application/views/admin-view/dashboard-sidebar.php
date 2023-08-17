<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="<?= base_url('asset/'); ?>dsb_admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('img/profile/'); ?><?= $this->session->userdata('profil'); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->userdata('nama'); ?></a>
            </div>
        </div>

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
                <li class="nav-header">Menu</li>
                <li class="nav-item">
                    <a href="<?= site_url('admin/dashboard'); ?>" class="nav-link  <?= $page == '' || $page == 'Dashboard' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-landmark"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">Kelola Artikel</li>
                <li class="nav-item">
                    <a href="<?= site_url('admin/add'); ?>" class="nav-link <?= $page == '' || $page == 'Add' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-calendar-plus"></i>
                        <p>
                            Tambahkan Artikel
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('admin/manage'); ?>" class="nav-link <?= $page == '' || $page == 'Manage' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>
                            Artikel
                        </p>
                    </a>
                </li>
                <li class="nav-header">Lainnya</li>
                <li class="nav-item">
                    <a href="<?= site_url('admin/category'); ?>" class="nav-link <?= $page == '' || $page == 'Manage Category' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>
                            Kategori
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>