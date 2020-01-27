<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/fontawesome-free/css/all.min.css' ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() . 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' ?>">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css' ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css' ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/jqvmap/jqvmap.min.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/adminlte.min.css' ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css' ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/summernote/summernote-bs4.css' ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url() . 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700' ?>" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index" class="nav-link">Home</a>
        </li>
      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">a

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url() . 'assets/img/logo-bmkg.png' ?>" alt="logo" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"> BMKG Jawa Tengah</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url() . 'assets/img/user2-160x160.jpg' ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Ricky Rivaldo</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
            <li class="nav-header">MENU APLIKASI</li>
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
              <a href="" class="nav-link active">
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
                  List Permintaan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'admin/list_ketersediaan_data' ?>" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Lihat Ketersediaan Data
                </p>
              </a>
            </li>

            <li class="nav-header">SISTEM PEMETAAN CURAH HUJAN</li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'admin/list_data' ?>" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  List Data
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'admin/upload_data' ?>" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Upload Data
                </p>
              </a>
            </li>


        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">

          <div class="row mb-2">

            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Statistika Hasil</h1>

            </div>
            <div class="col-sm-6" style="text-align: right">
              <a href="" class="btn btn-primary"><i class="fas fa-print"></i> Print Statistika Hasil</a>
            </div>
          </div>
        </div>
      </div>

      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Total Pengisi Responden</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6" style="margin: 0px">
                      <p class="count" style="font-size:120px; text-align:right; "><?php foreach ($data_responden as $d) { ?>
                          <?php echo  $d->count; ?>
                        <?php } ?>
                        <p>
                    </div>
                    <div class="col-md-6" style="padding-top: 60px; font-size:20px">
                      <h3>Pengisi</h3>
                      <p>Responden</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Umur Responden</h3>
                </div>
                <div class="card-body text-center">
                  <canvas id="umur_responden" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  <br>
                  <label><?php foreach ($umur as $u) { ?>
                      Umur <?php echo  $u->umur; ?>:
                      <?php echo  $u->count; ?>&nbsp;&nbsp;&nbsp
                    <?php } ?>
                  </label>
                </div>
              </div>
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Jenis Kelamin Responden</h3>
                </div>
                <div class="card-body text-center">
                  <canvas id="jeniskelamin_responden" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  <br>
                  <label><?php foreach ($jeniskelamin as $j) { ?>
                      <?php echo  $j->jenis_kelamin; ?>:
                      <?php echo  $j->count; ?>&nbsp;&nbsp;&nbsp
                    <?php } ?>
                  </label>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Pendidikan Responden</h3>
                </div>
                <div class="card-body text-center">
                  <canvas id="pendidikan_responden" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  <br>
                  <label><?php foreach ($pendidikan as $p) { ?>
                      <?php echo  $p->pendidikan; ?>:
                      <?php echo  $p->count; ?>&nbsp;&nbsp;&nbsp
                    <?php } ?>
                  </label>
                </div>
              </div>
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Pekerjaan Responden</h3>
                </div>
                <div class="card-body text-center">
                  <canvas id="pekerjaan_responden" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  <br>
                  <label style="font-size: 12px"><?php foreach ($pekerjaan as $pj) { ?>
                      <?php echo  $pj->pekerjaan; ?>:
                      <?php echo  $pj->count; ?>&nbsp;&nbsp;&nbsp
                    <?php } ?>
                  </label>
                </div>
              </div>
            </div>




            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">1. Bagaimana pendapat Saudara tentang Persyaratan pelayanan terbuka dan jelas di Staklim Semarang.</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi1a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi1a as $j1a) { ?>
                          <?php echo  $j1a->jopsi1a; ?>:
                          <?php echo  $j1a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi1b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi1b as $j1b) { ?>
                          <?php echo  $j1b->jopsi1b; ?>:
                          <?php echo  $j1b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">2. Bagaimana pendapat Saudara tentang Persyaratan pelayanan mudah dipenuhi di Staklim Semarang</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi2a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi2a as $j2a) { ?>
                          <?php echo  $j2a->jopsi2a; ?>:
                          <?php echo  $j2a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi2b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi2b as $j2b) { ?>
                          <?php echo  $j2b->jopsi2b; ?>:
                          <?php echo  $j2b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">3. Bagaimana pendapat Saudara tentang Informasi yang diperoleh dibutuhkan dalam kehidupan sehari-hari</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi3a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi3a as $j3a) { ?>
                          <?php echo  $j3a->jopsi3a; ?>:
                          <?php echo  $j3a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi3b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi3b as $j3b) { ?>
                          <?php echo  $j3b->jopsi3b; ?>:
                          <?php echo  $j3b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">4. Bagaimana pendapat Saudara tentang informasi yang diperoleh mudah diakses</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi4a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi4a as $j4a) { ?>
                          <?php echo  $j4a->jopsi4a; ?>:
                          <?php echo  $j4a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi4b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi4b as $j4b) { ?>
                          <?php echo  $j4b->jopsi4b; ?>:
                          <?php echo  $j4b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">5. Bagaimana pendapat Saudara tentang Informasi yang diperoleh mudah dipahami</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi5a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi5a as $j5a) { ?>
                          <?php echo  $j5a->jopsi5a; ?>:
                          <?php echo  $j5a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi5b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi5b as $j5b) { ?>
                          <?php echo  $j5b->jopsi5b; ?>:
                          <?php echo  $j5b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">6. Bagaimana pendapat Saudara tentang Informasi yang diperoleh akurat</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi6a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi6a as $j6a) { ?>
                          <?php echo  $j6a->jopsi6a; ?>:
                          <?php echo  $j6a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi6b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi6b as $j6b) { ?>
                          <?php echo  $j6b->jopsi6b; ?>:
                          <?php echo  $j6b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">7. Bagaimana pendapat Saudara tentang Informasi yang diperoleh ketersediaan jenis data dan informasi beragam</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi7a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi7a as $j7a) { ?>
                          <?php echo  $j7a->jopsi7a; ?>:
                          <?php echo  $j7a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi7b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi7b as $j7b) { ?>
                          <?php echo  $j7b->jopsi7b; ?>:
                          <?php echo  $j7b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">8. Bagaimana pendapat Saudara tentang Prosedur pelayanan alur pelayanan jelas dan sederhana di staklim semarang</h3>
                    </div>
                    <div class="card-body">
                      <canvas id="jopsi8" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">9. Bagaimana pendapat Saudara tentang sistem dan prosedur pelayanan masih berpeluang menimbulkan KKN di Staklim Semarang</h3>
                    </div>
                    <div class="card-body">
                      <canvas id="jopsi9" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">10. Bagaimana pendapat Saudara tentang Informasi target waktu penyelesaian pelayanan jelas di Staklim Semarang</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi10a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi10a as $j10a) { ?>
                          <?php echo  $j10a->jopsi10a; ?>:
                          <?php echo  $j10a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi10b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi10b as $j10b) { ?>
                          <?php echo  $j10b->jopsi10b; ?>:
                          <?php echo  $j10b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">11. Bagaimana pendapat Saudara tentang Penyelesaian pelayanan sesuai target waktu di Staklim Semarang</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi11a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi11a as $j11a) { ?>
                          <?php echo  $j11a->jopsi11a; ?>:
                          <?php echo  $j11a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi11b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi11b as $j11b) { ?>
                          <?php echo  $j11b->jopsi11b; ?>:
                          <?php echo  $j11b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">12. Bagaimana pendapat Saudara tentang biaya pelayanan jelas dan terbuka di Staklim Semarang</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi12a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi12a as $j12a) { ?>
                          <?php echo  $j12a->jopsi12a; ?>:
                          <?php echo  $j12a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi12b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi12b as $j12b) { ?>
                          <?php echo  $j12b->jopsi12b; ?>:
                          <?php echo  $j12b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">13. Bagaimana pendapat Saudara tentang Informasi daftar produk/jasa layanan terbuka dan jelas di Staklim Semarang</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi13a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi13a as $j13a) { ?>
                          <?php echo  $j13a->jopsi13a; ?>:
                          <?php echo  $j13a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi13b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi13b as $j13b) { ?>
                          <?php echo  $j13b->jopsi13b; ?>:
                          <?php echo  $j13b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">14. Bagaimana pendapat Saudara tentang Sarana pengaduan/keluhan pelayanan publik tersedia di Staklim Semarang</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi14a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi14a as $j14a) { ?>
                          <?php echo  $j14a->jopsi14a; ?>:
                          <?php echo  $j14a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi14b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi14b as $j14b) { ?>
                          <?php echo  $j14b->jopsi14b; ?>:
                          <?php echo  $j14b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">15. Bagaimana pendapat Saudara tentang Prosedur dan tindak lanjut penanganan pengaduan jelas di Staklim Semarang</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi15a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi15a as $j15a) { ?>
                          <?php echo  $j15a->jopsi15a; ?>:
                          <?php echo  $j15a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi15b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi15b as $j15b) { ?>
                          <?php echo  $j15b->jopsi15b; ?>:
                          <?php echo  $j15b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">16. Bagaimana pendapat Saudara tentang keberadaan petugas jelas di Staklim Semarang</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi16a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi16a as $j16a) { ?>
                          <?php echo  $j16a->jopsi16a; ?>:
                          <?php echo  $j16a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi16b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi16b as $j16b) { ?>
                          <?php echo  $j16b->jopsi16b; ?>:
                          <?php echo  $j16b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">17. Bagaimana pendapat Saudara tentang Petugas sigap, ahli dan cekatan di Staklim Semarang</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi17a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi17a as $j17a) { ?>
                          <?php echo  $j17a->jopsi17a; ?>:
                          <?php echo  $j17a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi17b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi17b as $j17b) { ?>
                          <?php echo  $j17b->jopsi17b; ?>:
                          <?php echo  $j17b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">18. Bagaimana pendapat Saudara tentang Sikap dan perilaku petugas pelayanan baik dan bertanggungjawab di Staklim Semarang</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi18a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi18a as $j18a) { ?>
                          <?php echo  $j18a->jopsi18a; ?>:
                          <?php echo  $j18a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi18b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi18b as $j18b) { ?>
                          <?php echo  $j18b->jopsi18b; ?>:
                          <?php echo  $j18b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">19. Bagaimana pendapat Saudara tentang Sarana dan prasarana pelayanan aman, nyaman dan mudah dijangkau di Staklim Semarang</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi19a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi19a as $j19a) { ?>
                          <?php echo  $j19a->jopsi19a; ?>:
                          <?php echo  $j19a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi19b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi19b as $j19b) { ?>
                          <?php echo  $j19b->jopsi19b; ?>:
                          <?php echo  $j19b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">20. Bagaimana pendapat Saudara tentang Pelayanan publik pada instansi ini sudah berjalan dengan baik di Staklim Semarang</h3>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Kualitas Pelayanan</label>
                      <canvas id="jopsi20a" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi20a as $j20a) { ?>
                          <?php echo  $j20a->jopsi20a; ?>:
                          <?php echo  $j20a->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label>Harapan Konsumen</label>
                      <canvas id="jopsi20b" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      <br>
                      <label><?php foreach ($jopsi20b as $j20b) { ?>
                          <?php echo  $j20b->jopsi20b; ?>:
                          <?php echo  $j20b->count; ?>&nbsp;&nbsp;&nbsp
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <br>
      <br>
      <!-- /.content-wrapper -->
      <footer class="main-footer fixed-bottom">
        <strong>Copyright &copy; Turu Teams
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 0.0.1
          </div>
      </footer>


    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url() . 'assets/plugins/jquery/jquery.min.js' ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url() . 'assets/plugins/jquery-ui/jquery-ui.min.js' ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() . 'assets/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url() . 'assets/plugins/chart.js/Chart.min.js' ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url() . 'assets/plugins/sparklines/sparkline.js' ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url() . 'assets/plugins/jqvmap/jquery.vmap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/jqvmap/maps/jquery.vmap.usa.js' ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url() . 'assets/plugins/jquery-knob/jquery.knob.min.js' ?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url() . 'assets/plugins/moment/moment.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.js' ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url() . 'assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js' ?>"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url() . 'assets/plugins/summernote/summernote-bs4.min.js' ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url() . 'assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . 'assets/js/adminlte.js' ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url() . 'assets/js/pages/dashboard.js' ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() . 'assets/js/demo.js' ?>"></script>
    <script>
      $('.count').each(function() {
        $(this).prop('Counter', 0).animate({
          Counter: $(this).text()
        }, {
          duration: 700,
          easing: 'swing',
          step: function(now) {
            $(this).text(Math.ceil(now));
          }
        });
      });



      var donutChartCanvas = $('#umur_responden').get(0).getContext('2d')
      var chart_data = JSON.parse('<?php echo $chart_data ?>');

      // $.post("<?php base_url() . 'admin/statisumur' ?>",
      // function (data) {
      //   var obj = JSON.parse(data);
      //   $.each(obj, function(test,item){
      //     umur_responden.push(item.umur);
      //   })


      var donutData = {
        labels: chart_data.labelumur,
        // [
        //     '< 15', 
        //     '16 - 25',
        //     '26 - 35', 
        //     '36 - 45', 
        //     '> 46', 

        // ],
        datasets: [{
          data: chart_data.dataumur,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })
      // })



      var donutChartCanvas = $('#jeniskelamin_responden').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljeniskelamin,
        datasets: [{
          data: chart_data.datajeniskelamin,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })



      var donutChartCanvas = $('#pendidikan_responden').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labelpendidikan,
        datasets: [{
          data: chart_data.datapendidikan,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })




      var donutChartCanvas = $('#pekerjaan_responden').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labelpekerjaan,
        datasets: [{
          data: chart_data.datapekerjaan,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi1a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi1a,
        datasets: [{
          data: chart_data.datajopsi1a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi1b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi1b,
        datasets: [{
          data: chart_data.datajopsi1b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi2a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi2a,
        datasets: [{
          data: chart_data.datajopsi2a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi2b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi2b,
        datasets: [{
          data: chart_data.datajopsi2b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi3a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi3a,
        datasets: [{
          data: chart_data.datajopsi3a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi3b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi3b,
        datasets: [{
          data: chart_data.datajopsi3b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi4a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi4a,
        datasets: [{
          data: chart_data.datajopsi4a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi4b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi4b,
        datasets: [{
          data: chart_data.datajopsi4b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi5a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi5a,
        datasets: [{
          data: chart_data.datajopsi5a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi5b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi5b,
        datasets: [{
          data: chart_data.datajopsi5b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi6a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi6a,
        datasets: [{
          data: chart_data.datajopsi6a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi6b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi6b,
        datasets: [{
          data: chart_data.datajopsi6b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi7a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi7a,
        datasets: [{
          data: chart_data.datajopsi7a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi7b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi7b,
        datasets: [{
          data: chart_data.datajopsi7b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi8').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi8,
        datasets: [{
          data: chart_data.datajopsi8,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi9').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi9,
        datasets: [{
          data: chart_data.datajopsi9,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi10a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi10a,
        datasets: [{
          data: chart_data.datajopsi10a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi10b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi10b,
        datasets: [{
          data: chart_data.datajopsi10b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })



      var donutChartCanvas = $('#jopsi11a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi11a,
        datasets: [{
          data: chart_data.datajopsi11a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi11b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi11b,
        datasets: [{
          data: chart_data.datajopsi11b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi12a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi12a,
        datasets: [{
          data: chart_data.datajopsi12a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi12b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi12b,
        datasets: [{
          data: chart_data.datajopsi12b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })



      var donutChartCanvas = $('#jopsi13a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi13a,
        datasets: [{
          data: chart_data.datajopsi13a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi13b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi13b,
        datasets: [{
          data: chart_data.datajopsi13b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi14a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi14a,
        datasets: [{
          data: chart_data.datajopsi14a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi14b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi14b,
        datasets: [{
          data: chart_data.datajopsi14b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi15a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi15a,
        datasets: [{
          data: chart_data.datajopsi15a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi15b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi15b,
        datasets: [{
          data: chart_data.datajopsi15b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi16a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi16a,
        datasets: [{
          data: chart_data.datajopsi16a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi16b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi16b,
        datasets: [{
          data: chart_data.datajopsi16b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi17a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi17a,
        datasets: [{
          data: chart_data.datajopsi17a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi17b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi17b,
        datasets: [{
          data: chart_data.datajopsi17b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi18a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi18a,
        datasets: [{
          data: chart_data.datajopsi18a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi18b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi18b,
        datasets: [{
          data: chart_data.datajopsi18b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi19a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi19a,
        datasets: [{
          data: chart_data.datajopsi19a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi19b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi19b,
        datasets: [{
          data: chart_data.datajopsi19b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


      var donutChartCanvas = $('#jopsi20a').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi20a,
        datasets: [{
          data: chart_data.datajopsi20a,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      var donutChartCanvas = $('#jopsi20b').get(0).getContext('2d')
      var donutData = {
        labels: chart_data.labeljopsi20b,
        datasets: [{
          data: chart_data.datajopsi20b,
          backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })
    </script>
</body>

</html>