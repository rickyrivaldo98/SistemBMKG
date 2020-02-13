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
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<?php $this->load->view('template/sidebar'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="col-lg-12">
          <!-- Widget: user widget style 1 -->
          <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-primary">
              <h3 class="widget-user-username">Selamat Datang</h3>
              <h5 class="widget-user-desc">Ke Dalam Admin Sistem Pelayanan</h5>
            </div>
            <div class="widget-user-image">
              <img class="" src="<?php echo base_url() . 'assets/img/logo-bmkg.png' ?>" alt="User Avatar" style="border: 0px ">
            </div>
            <div class="card-footer">
              <br>
              <div class="">

                <!-- /.col -->
                <div class="Widget-user-username">
                  <div class="description-block">
                    <h5 class="description-header">BADAN METEOROLOGI, KLIMATOLOGI DAN GEOFISIKA</h5>
                    <span class="description-text">JAWA TENGAH</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-md-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <div class="row" style="padding-left:6px">
                      <h3 class="count"><?php foreach ($data_responden as $d) { ?>
                          <?php echo  $d->count; ?>
                        <?php } ?> </h3>
                      <h3 style="padding-left:10px">Data</h3>
                    </div>
                    <p>Sistem Kepuasan Masyarakat</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="<?php echo base_url() . 'admin/hasil_survey' ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <div class="row" style="padding-left:6px">
                      <h3 class="count"><?php foreach ($kritik as $k) { ?>
                          <?php echo  $k->count; ?>
                        <?php } ?></h3>
                      <h3 style="padding-left:10px">Data</h3>
                    </div>
                    <p>Layanan Pengaduan Masyarakat</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="<?php echo base_url() . 'admin/hasil_pengaduan' ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>

              <!-- ./col -->
              <div class="col-md-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <div class="row" style="padding-left:6px">
                      <h3 style="color: white" class="count"><?php foreach ($data_hujan as $h) { ?>
                          <?php echo  $h->count; ?>
                        <?php } ?></h3>
                      <h3 style="padding-left:10px;color: white" >Data</h3>
                    </div>
                    <p style="color: white">Sistem Permintaan Data</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="<?php echo base_url() . 'admin/list_permintaan_data' ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="small-box bg-primary">
                  <div class="inner">
                    <div class="row" style="padding-left:6px">
                      <h3 class="count"><?php foreach ($data_hujan as $h) { ?>
                          <?php echo  $h->count; ?>
                        <?php } ?></h3>
                      <h3 style="padding-left:10px">Data</h3>
                    </div>
                    <p>Sistem Curah Hujan</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="<?php echo base_url() . 'admin/list_data' ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
          </div>
          <br>
          <br>
          <!-- /.row -->
          <!-- Main row -->

          <!-- Left col -->

          <!-- /.content -->

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
        </script>
</body>

</html>