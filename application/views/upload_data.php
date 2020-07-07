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
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/select2/css/select2.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css' ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
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
            <h1 class="m-0 text-dark">Upload Data</h1>
            <br>
            <?php if ($this->session->flashdata('error')) : ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $this->session->flashdata('error'); ?>
              </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('success')) : ?>
              <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
              </div>
            <?php endif; ?>
            <div class="card mb-3">
              <div class="card-body">
                <form action="<?php echo site_url('admin/upload_data') ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                  <div class="form-group">
                    <label for="Bulan">Bulan*</label>
                    <select class="form-control select2bs4 <?php echo form_error('Bulan') ? 'is-invalid' : '' ?>" name="Bulan" tabindex="-1">
                      <option value=""></option>
                      <option value="1">Januari</option>;
                      <option value="2">Februari</option>;
                      <option value="3">Maret</option>;
                      <option value="4">April</option>;
                      <option value="5">Mei</option>;
                      <option value="6">Juni</option>;
                      <option value="7">Juli</option>;
                      <option value="8">Agustus</option>;
                      <option value="9">September</option>;
                      <option value="10">Oktober</option>;
                      <option value="11">November</option>;
                      <option value="12">Desember</option>;
                    </select>
                    <div class="invalid-feedback">
                      <?php echo form_error('Bulan') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Tahun">Tahun*</label>
                    <input class="date-own form-control <?php echo form_error('Tahun') ? 'is-invalid' : '' ?>" style="width: 100%;" name="Tahun" type="text" placeholder="Masukkan Tahun">
                    <div class="invalid-feedback">
                      <?php echo form_error('Tahun') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Data CSV*</label>
                    <a href="<?php echo base_url() . 'upload/data/default.csv' ?>" class="float-right btn btn-xs btn-info">Download Format Data CSV</a>
                    <div class="custom-file">
                      <input name="CSV" type="file" class="custom-file-input <?php echo form_error('CSV') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
                      <label class="custom-file-label" for="exampleInputFile">Masukkan File CSV</label>
                      <div class="invalid-feedback">
                        <?php echo form_error('CSV') ?>
                      </div>
                    </div>
                  </div>
                  <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                </form>
              </div>
              <div class="card-footer small text-muted">
                * required fields
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.col -->

    <!-- /.content-wrapper -->
    <footer class="main-footer fixed-bottom">
      <strong>Copyright &copy; BMKG Jawa Tengah
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
  <!-- Select2 -->
  <script src="<?php echo base_url() . 'assets/plugins/select2/js/select2.full.min.js' ?>"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo base_url() . 'assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() . 'assets/js/adminlte.js' ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url() . 'assets/js/pages/dashboard.js' ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() . 'assets/js/demo.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js' ?>"></script>
  <script>
    $(document).ready(function() {
      bsCustomFileInput.init();
    });

    $(function() {
      $('.date-own').datepicker({
        minViewMode: 2,
        format: 'yyyy'
      })

      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4',
        placeholder: "Masukkan Bulan"
      })
    });
  </script>
</body>

</html>