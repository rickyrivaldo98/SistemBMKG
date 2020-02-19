<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url() . 'admin/index' ?>" class="nav-link">Home</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() . 'auth/logout' ?>" style="font-weight: bold">
                    <i class="fas fa-sign-out-alt"></i>
                    Keluar
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo base_url() . 'admin/index' ?>" class="brand-link">
            <img src="<?php echo base_url() . 'assets/img/logo-bmkg.png' ?>" alt="logo" class="brand-image elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"> BMKG Jawa Tengah</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo base_url() . 'assets/img/avatar5.png' ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="<?php echo base_url() . 'admin/profile/' . '1' ?>" class="d-block">Admin</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-header">SISTEM KEPUASAN MASYARAKAT</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'admin/hasil_survey' ?>" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Hasil Survey
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'admin/statistika_hasil' ?>" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Statistika Hasil
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">LAYANAN PENGADUAN BMKG</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'admin/hasil_pengaduan' ?>" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Hasil Pengaduan
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">SISTEM PERMINTAAN DATA</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'admin/list_permintaan_data' ?>" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Data Berbayar
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'admin/list_ketersediaan_data' ?>" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Data 0 Rupiah
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">SISTEM PEMETAAN CURAH HUJAN</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'admin/list_data' ?>" class="nav-link">
                            <i class="nav-icon fas fa-map"></i>
                            <p>
                                Data Curah Hujan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'admin/upload_data' ?>" class="nav-link">
                            <i class="nav-icon fas fa-file-import"></i>
                            <p>
                                Upload Data Curah Hujan
                            </p>
                        </a>
                    </li>


            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>