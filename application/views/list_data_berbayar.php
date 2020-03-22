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
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css' ?>">
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
            <h1 class="m-0 text-dark">List Permintaan Data Berbayar</h1>
          </div><!-- /.col -->
        </div>
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
              <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                  <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                  <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('info')) : ?>
                <div class="alert alert-info" role="alert">
                  <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                  <?php echo $this->session->flashdata('info'); ?>
                </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('warning')) : ?>
                <div class="alert alert-warning" role="alert">
                  <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                  <?php echo $this->session->flashdata('warning'); ?>
                </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('danger')) : ?>
                  <div  data-aos="fade-up" class="alert alert-danger" role="alert">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                    <?php echo $this->session->flashdata('danger'); ?>
                  </div>
              <?php endif; ?>

             


              <table id="example1" class="table table-bordered table-striped">
                <thead style="background-color: white;">
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No.Hp</th>
                    <th>Email</th>
                    <th>Instansi</th>
                    <th>Informasi</th>
                    <th>status</th>

                    <th>Aksi</th>
                  </tr>
                </thead>
                <style>
                  tbody.belang tr:nth-child(even) {
                    background-color: white;
                  }
                </style>
                <div>
                  <tbody class="belang">
                    <?php foreach ($pemohon as $k) {
                    ?>
                      <tr>
                        <td><?php echo  $k->idpemohon; ?></td>
                        <td><?php echo  $k->nama; ?></td>
                        <td><?php echo  $k->alamat; ?></td>
                        <td><?php echo  $k->nohp; ?></td>
                        <td><?php echo  $k->email; ?></td>
                        <td><?php echo  $k->instansi; ?></td>
                        <td><?php echo  $k->informasi; ?></td>
                        <td>
                          <?php
                          if ($k->status == 'no') {
                            echo  "<b style='color:red;'>belum dikonfirmasi</b>";
                          } else {
                            if ($k->status == 'yes') {
                              echo "<b style='color:green;'>telah dikonfirmasi</b>";
                            }
                          }
                          ?>
                        </td>
                        <td>

                          <?php
                          if ($k->status == 'yes') { ?>
                            <button class="btn btn-xs btn-block btn-success" disabled>Confirm</button>
                            <?php  } else {
                            if ($k->status == 'no') { ?>
                              <a onclick="Confirm('<?php echo base_url() . 'admin/konfirmasi/' . $k->idpemohon ?>')" href="#konfirmasidata" class="btn btn-xs btn-block btn-success">Confirm</a>
                              <a href="<?php echo base_url() . 'admin/edit_list_data/' . $k->idpemohon ?>" class="btn btn-xs btn-block btn-info">Edit</a>

                          <?php }
                          }



                          ?>
                          <a onclick="deleteConfirm('<?php echo base_url() . 'admin/hapus_data/' . $k->idpemohon ?>')" href="#!" class="btn btn-xs btn-block btn-danger">Hapus</a>

                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </div>
                <tfoot style="background-color: white;">
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No.Hp</th>
                    <th>Email</th>
                    <th>Instansi</th>
                    <th>Informasi</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <!-- Modal Delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Confirm -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda yakin?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Data yang sudah dikonfirmasi tidak bisa diubah</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a id="btn-confirm" class="btn btn-warning" href="#">Konfirmasi</a>
          </div>
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
  <script>
    function deleteConfirm(url) {
      $('#btn-delete').attr('href', url);
      $('#deleteModal').modal();
    }

    function Confirm(url) {
      $('#btn-confirm').attr('href', url);
      $('#confirmModal').modal();
    }
  </script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "scrollX":"1999px",
        "scrollCollapse": true,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
</body>

</html>