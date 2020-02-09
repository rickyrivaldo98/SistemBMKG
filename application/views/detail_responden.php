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
          <a href="<?php echo base_url() . 'admin/index' ?>" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() . 'auth/logout' ?>">
            <span class="">Keluar</span>
            <i class="fas fa-sign-out-alt"></i>
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
              <a href="" class="nav-link active">
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
          <div class="row">
            <div class="col-6">
              <a class="btn btn-block btn-primary" style="width: 90px; margin-bottom: 20px; margin-left: 9px" href="<?php echo base_url() . 'admin/hasil_survey' ?>">Kembali</a>
            </div>
            <div class="col-6" style="text-align: right; margin-bottom: 20px; margin-right: 9px; margin-left: -9px">
              <?php foreach ($data_responden as $d) {
              ?>
                <a href="<?php echo base_url() . 'admin/export_detail_responden/' . $d->ID ?>" class="btn btn-primary"><i class="fas fa-print"></i> Export Detail Responden</a>
              <?php } ?>
            </div>

          </div>
          <div class="col mb-2">

            <div class="card card-primary">
              <div class="card-header">
                <h1 class="">Jawaban Responden No Responden
                  <?php foreach ($data_responden as $d) { ?>
                    <?php echo  $d->ID; ?>
                  <?php } ?>
                </h1>
              </div>
            </div>


            <!-- Main content -->
            <section class="content">
              <div class="row">
                <div class="col-12">
                  <!-- /.card-header -->
                  <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title"></h3>
                      </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                      <?php foreach ($data_responden as $d) { ?>
                        <div class="form-group">
                          <h5>No Responden</h5>
                          <input type="text" name="first_name" value="<?php echo  $d->ID; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>Umur</h5>
                          <input type="text" name="first_name" value="<?php echo  $d->Umur; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>Jenis Kelamin</h5>
                          <input type="text" name="first_name" value="<?php echo  $d->Jenis_kelamin; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>Pendidikan</h5>
                          <input type="text" name="first_name" value="<?php echo  $d->Pendidikan; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>Pekerjaan</h5>
                          <input type="text" name="first_name" value="<?php echo  $d->Pekerjaan; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>Email</h5>
                          <input type="text" name="first_name" value="<?php echo  $d->Email; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>Jenis Pelayanan</h5>
                          <input type="text" name="first_name" value="<?php echo  $d->Pelayanan; ?>" required class="form-control" disabled="">
                        </div>
                      <?php } ?>
                      <!-- /.card-body -->
                    </div>
                    <div class="card-body">
                      <?php foreach ($jawaban as $j) { ?>
                        <div class="form-group">
                          <h5>1. Bagaimana pendapat Saudara tentang Persyaratan pelayanan terbuka dan jelas di Staklim Semarang.</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi1a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi1b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>2. Bagaimana pendapat Saudara tentang Persyaratan pelayanan mudah dipenuhi di Staklim Semarang</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi2a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi2b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>3. Bagaimana pendapat Saudara tentang Informasi yang diperoleh dibutuhkan dalam kehidupan sehari-hari</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi3a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi3b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>4. Bagaimana pendapat Saudara tentang informasi yang diperoleh mudah diakses</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi4a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi4b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>5. Bagaimana pendapat Saudara tentang Informasi yang diperoleh mudah dipahami</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi5a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi5b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>6. Bagaimana pendapat Saudara tentang Informasi yang diperoleh akurat</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi6a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi6b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>7. Bagaimana pendapat Saudara tentang Informasi yang diperoleh ketersediaan jenis data dan informasi beragam</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi7a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi7b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>8. Bagaimana pendapat Saudara tentang Prosedur pelayanan alur pelayanan jelas dan sederhana di staklim semarang</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi8; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>9. Bagaimana pendapat Saudara tentang sistem dan prosedur pelayanan masih berpeluang menimbulkan KKN di Staklim Semarang</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi9; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>10. Bagaimana pendapat Saudara tentang Informasi target waktu penyelesaian pelayanan jelas di Staklim Semarang</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi10a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi10b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>11. Bagaimana pendapat Saudara tentang Penyelesaian pelayanan sesuai target waktu di Staklim Semarang</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi11a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi11b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>12. Bagaimana pendapat Saudara tentang biaya pelayanan jelas dan terbuka di Staklim Semarang</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi12a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi12b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>13. Bagaimana pendapat Saudara tentang Informasi daftar produk/jasa layanan terbuka dan jelas di Staklim Semarang</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi13a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi13b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>14. Bagaimana pendapat Saudara tentang Sarana pengaduan/keluhan pelayanan publik tersedia di Staklim Semarang</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi14a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi14b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>15. Bagaimana pendapat Saudara tentang Prosedur dan tindak lanjut penanganan pengaduan jelas di Staklim Semarang</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi15a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi15b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>16. Bagaimana pendapat Saudara tentang keberadaan petugas jelas di Staklim Semarang</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi16a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi16b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>17. Bagaimana pendapat Saudara tentang Petugas sigap, ahli dan cekatan di Staklim Semarang</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi17a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi17b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>18. Bagaimana pendapat Saudara tentang Sikap dan perilaku petugas pelayanan baik dan bertanggungjawab di Staklim Semarang</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi18a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi18b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>19. Bagaimana pendapat Saudara tentang Sarana dan prasarana pelayanan aman, nyaman dan mudah dijangkau di Staklim Semarang</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi19a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi19b; ?>" required class="form-control" disabled="">
                        </div>
                        <div class="form-group">
                          <h5>20. Bagaimana pendapat Saudara tentang Pelayanan publik pada instansi ini sudah berjalan dengan baik di Staklim Semarang</h5>
                          <label>Kualitas Pelayanan</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi20a; ?>" required class="form-control" disabled="">
                          <label>Harapan Konsumen</label>
                          <input type="text" name="first_name" value="<?php echo  $j->Jopsi20b; ?>" required class="form-control" disabled="">
                        </div>

                      <?php } ?>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
          </div>
        </div>
      </div>
    </div>
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
  <!-- DataTables -->
  <script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js' ?>"></script>
  <!-- page script -->
  <!-- <script>
  $( function() {
    
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      
    });
  });
</script> -->

</body>

</html>





<!-- 
<h1>haiii</h1>
<div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>ID</th>
                            <th>Nama Responden</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Pendidikan</th>
                            <th>Pekerjaan</th>
                            <th>Email</th>
                            <th>Aksi</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php foreach ($data_responden as $d) { ?> 
                            <td><?php echo  $d->Nama; ?></td>
                          <?php } ?>

                          <?php foreach ($jawaban as $j) {
                          ?>
                            <td><?php echo  $j->ID; ?></td>
                            
                          </tbody>
                          <?php } ?>
                          </table>
                      </div>
                      
                    </div>
                    
                  </div>
                  
                </div> -->