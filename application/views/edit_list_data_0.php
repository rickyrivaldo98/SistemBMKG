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
                    <div id="title" class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit Data</h1>
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
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="<?php echo site_url('admin/list_data_0') ?>"><i class="fas fa-arrow-left"></i>
                                    Kembali</a>
                            </div>
                            <div class="card-body">
                                <?php foreach ($pemohon as $p) { ?>

                                    <form action="<?php echo base_url() . 'admin/edit_data_0' ?>" method="post">
                                        <div class="form-group">
                                            <label for="idpemohon">ID</label>
                                            <input type="text"" name=" idpemohon" id="id" class="form-control" value="<?php echo $p->idpemohon;?>" placeholder="ID Anda" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama Pemohon</label>
                                            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $p->nama;?>" placeholder="Nama Lengkap Anda...">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat Pemohon</label>
                                            <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $p->alamat;?>" placeholder="Alamat Lengkap Anda...">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Pemohon</label>
                                            <input type="text" name="email" id="email" class="form-control" value="<?php echo $p->email;?>" placeholder="Masukkan email anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="instansi">Asal Instansi Pemohon</label>
                                            <input type="text" name="instansi" id="instansi" class="form-control" value="<?php echo $p->instansi;?>" placeholder="Asal instansi anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="nohp">Nomor HP Pemohon</label>
                                            <input type="text" name="nohp" id="hp" class="form-control" value="<?php echo $p->nohp;?>" placeholder="Masukkan no. HP anda">
                                        </div>
                                        <div class="form-group">

                                            <label for="informasi">Informasi yang dibutuhkan <p style="color: grey; font-size: 14px;">*Contoh : informasi curah hujan di kota semarang daerah simpang lima tanggal 20 januari 2020</p> </label>
                                            <textarea name="informasi" type="text" class="form-control" id="informasi" placeholder="Informasi yang dibutuhkan"><?php echo $p->informasi; ?></textarea>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="nohp">Surat pengantar</label>
                                            <input type="text" name="nohp" id="hp" class="form-control" value="<?php echo $p->suratpengantar;?>" placeholder="Masukkan no. HP anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="nohp">surat pernyataan</label>
                                            <input type="text" name="nohp" id="hp" class="form-control" value="<?php echo $p->suratpernyataan;?>" placeholder="Masukkan no. HP anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="nohp">Proposal</label>
                                            <input type="text" name="nohp" id="hp" class="form-control" value="<?php echo $p->proposal;?>" placeholder="Masukkan no. HP anda">
                                        </div> -->
                                    <?php  } ?>
                                    <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                                    </form>
                            </div>
                            <div class="card-footer small text-muted">
                                * required fields
                            </div>
                        </div>
                    </div><!-- /.col -->

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
                <!-- D3.js Source -->
                <!-- <script src="https://d3js.org/d3.v4.min.js"></script>
                    <script src="https://d3js.org/topojson.v3.min.js"></script>
                    <script src="https://d3js.org/d3-geo-projection.v2.min.js"></script> -->

                <!-- Script -->
                <!-- <script type="text/javascript" src="<?php echo base_url() . 'assets/js/script.js' ?>"></script> -->
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
                <!-- Select2 -->
                <script src="<?php echo base_url() . 'assets/plugins/select2/js/select2.full.min.js' ?>"></script>
                <!-- Summernote -->
                <script src="<?php echo base_url() . 'assets/plugins/summernote/summernote-bs4.min.js' ?>"></script>
                <!-- overlayScrollbars -->
                <script src="<?php echo base_url() . 'assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' ?>"></script>
                <!-- AdminLTE App -->
                <script src="<?php echo base_url() . 'assets/js/adminlte.js' ?>"></script>
                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                <script src="<?php echo base_url() . 'assets/js/pages/dashboard.js' ?>"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="<?php echo base_url() . 'assets/js/demo.js' ?>"></script>
                <script src="<?php echo base_url() . 'assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js' ?>"></script>
</body>

</html>