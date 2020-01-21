<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Layanan Pengaduan BMKG</title>
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
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css' ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="<?php echo base_url() . 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700' ?>" rel="stylesheet">
</head>
<br>
<br>

<body>
    <div class="container">
        <div class="col-md6">
            <div class="card card-primary">
                <div class="card-header">

                    <h5>Layanan Pengaduan BMKG</h5>
                    <h6>Peningkatan Kualitas Layanan Publik</h6>
                    <small>* Wajib Diisi</small>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url() . 'admin/tambah_kritik'; ?>" method="post">
                        <div class="form-group row">
                            <label for="InputEmail" class="col-sm-2 col-form-label">Alamat Email: *</label>
                            <div class="col-sm-10">
                                <input name="Email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Masukkan email" required>
                                <small id="emailHelp" class="form-text text-muted">Kami tidak akan pernah memberikan email anda kepada siapapun</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="InputNama" class="col-sm-2 col-form-label">Nama Responden: *</label>
                            <div class="col-sm-10">
                                <input name="Nama" type="text" class="form-control" id="InputNama" aria-describedby="emailHelp" placeholder="Masukkan Nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="InputKritik" class="col-sm-2 col-form-label">Kritik dan Saran: *</label>
                            <div class="col-sm-10">
                                <textarea name="Kritik" type="text" class="form-control" id="InputKritik" placeholder="Masukkan kritik dan Saran" required></textarea>
                            </div>
                        </div>
                        <div class=" form-group">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>