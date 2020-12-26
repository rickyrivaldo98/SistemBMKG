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
    <style>
        body {
            overflow-x: hidden;
        }

        .background {
            fill: none;
            pointer-events: all;
        }

        svg {
            width: inherit;
        }

        #subunits .active {
            fill: lightblue;
        }

        #state-borders {
            fill: none;
            stroke: black;
            stroke-width: 0.2px;
            stroke-linejoin: round;
            stroke-linecap: round;
            pointer-events: none;
        }

        #info-location {
            text-align: center;
            font-size: 26px;
            font-weight: medium;
        }

        #info-details {
            text-align: center;
            font-size: 22px;
        }

        #info-peta {
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php $this->load->view('template/sidebar'); ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div id="title" class="col-sm-12">
                        <a href="<?php echo site_url('admin/list_data/') ?>" class="btn btn-md btn-primary">Kembali</a>
                        <br>
                        <br>
                        <div class="card mb-3">
                            <div class="card-body">
                                <!-- <a id=" fileinput"><?php echo  $data_hujan->Bulan; ?></a> -->
                                <form action="<?= site_url('admin/edit_data') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $data_hujan->id ?>" />
                                    <input id="fileinput" type="hidden" name="id_data" value="<?php echo $data_hujan->id_data ?>" />
                                </form>
                                <div id="info" class="col-12">
                                    <div id="info-location">Perkiraan Curah Hujan Bulan <?php $this->load->helper('bulan_helper'); echo bulan($data_hujan->Bulan) ?> Tahun <?php echo $data_hujan->Tahun ?> di Jawa Tengah</div>
                                    <div id="info-details"></div>
                                    <div id="info-peta">
                                        <p><img class="img-fluid" src="<?php echo base_url() . 'assets/img/legenda.png' ?>" alt="Smiley face" style="float:center;width:511px;height:238px;"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
    <!-- D3.js Source -->
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://d3js.org/topojson.v1.min.js"></script>
    <script src="https://d3js.org/d3-scale-chromatic.v1.min.js"></script>
    <script src="https://d3js.org/d3-geo-projection.v2.min.js"></script>

    <!-- Script -->
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/script.js' ?>"></script>
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
</body>

</html>