<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Indeks Kepuasan Masyarakat</title>
    <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/fontawesome-free/css/all.min.css'?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'?>">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/jqvmap/jqvmap.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/adminlte.min.css'?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/summernote/summernote-bs4.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css'?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url().'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700'?>" rel="stylesheet">
</head>
<br>
<br>
<body>
    <div class="container">
        <div class="col-md6">
<div class="card card-primary">
    <div class="card-header">
    
        <h5>Indeks Kepuasan Masyarakat (IKM)</h5>
        <h6>Peningkatan Kualitas Layanan Publik</h6>
        <small>* Wajib Diisi</small>
    </div>
    <div class="card-body">
    <form action="<?php echo base_url().'admin/tambah_responden'; ?>" method="post">
        <div class="form-group row">
            <label for="InputEmail" class="col-sm-2 col-form-label">Alamat Email: *</label>
            <div class="col-sm-10">
                <input name="Email" type="email" class="form-control" id="InputEmail"aria-describedby="emailHelp" placeholder="Masukkan email" required>
                <small id="emailHelp" class="form-text text-muted">Kami tidak akan pernah memberikan email anda kepada siapapun</small>
            </div>
        </div>
        <b>1. DATA RESPONDEN</b>
        <div class="form-group row">
            <label for="InputNama" class="col-sm-2 col-form-label">Nama Responden: *</label>
            <div class="col-sm-10">
                <input name="Nama" type="text" class="form-control" id="InputNama"aria-describedby="emailHelp" placeholder="Masukkan Nama" required>
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Umur: *</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                    <input required class="form-check-input" type="radio" name="Umur" id="gridRadios1" value="<15" >
                    <label class="form-check-label" for="gridRadios1">
                        Dibawah 15 Tahun
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="Umur" id="gridRadios2" value="16-25">
                    <label class="form-check-label" for="gridRadios2">
                        16 Tahun - 25 Tahun
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="Umur" id="gridRadios3" value="26-35" >
                    <label class="form-check-label" for="gridRadios3">
                        26 Tahun - 35 Tahun
                    </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Umur" id="gridRadios4" value="36-45" >
                        <label class="form-check-label" for="gridRadios4">
                        36 Tahun - 45 Tahun
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Umur" id="gridRadios5" value=">46" >
                        <label class="form-check-label" for="gridRadios5">
                        Diatas 46 tahun
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0"> Jenis Kelamin: *</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jenis_kelamin" id="lakilaki" value="Laki-Laki" >
                        <label class="form-check-label" for="lakilaki">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jenis_kelamin" id="perempuan" value="Perempuan" >
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Pendidikan Terakhir: *</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Pendidikan" id="pendidikan1" value="SD" >
                        <label class="form-check-label" for="pendidikan1">
                            SD
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Pendidikan" id="pendidikan2" value="SMP">
                        <label class="form-check-label" for="pendidikan2">
                            SMP
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Pendidikan" id="pendidikan3" value="SMU" >
                        <label class="form-check-label" for="pendidikan3">
                            SMU
                    </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Pendidikan" id="pendidikan4" value="S1" >
                        <label class="form-check-label" for="pendidikan4">
                        S1
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Pendidikan" id="pendidikan5" value="S2 Keatas" >
                        <label class="form-check-label" for="pendidikan5">
                        S2 ke-atas
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Pekerjaan Utama: *</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Pekerjaan" id="Pekerjaan1" value="PNS/TNI/POLRI" >
                        <label class="form-check-label" for="Pekerjaan1">
                            PNS/TNI/POLRI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Pekerjaan" id="Pekerjaan2" value="Pegawai Swasta">
                        <label class="form-check-label" for="Pekerjaan2">
                            Pegawai Swasta
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Pekerjaan" id="Pekerjaan3" value="Wiraswasta" >
                        <label class="form-check-label" for="Pekerjaan3">
                            Wiraswasta
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Pekerjaan" id="Pekerjaan4" value="Pelajar/Mahasiswa" >
                        <label class="form-check-label" for="Pekerjaan4">
                        Pelajar/Mahasiswa
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Pekerjaan" id="Pekerjaan5" value="Lainnya" >
                        <label class="form-check-label" for="Pekerjaan5">
                        Lainnya
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <b>2. PENDAPAT RESPONDEN TENTANG PELAYANAN PUBLIK</b>
        <fieldset class="form-group">
            <div>
            <legend class="col-md-auto">Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan data dan informasi iklim di Stasklim Semarang.</legend>
                <div class="col col-lg-2">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jopsi1" id="pertanyaan1" value="Tidak Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Tidak Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi1" id="pertanyaan1" value="Kurang Mudah">
                        <label class="form-check-label" for="pertanyaan1">
                            Kurang Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi1" id="pertanyaan1" value="Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi1" id="pertanyaan1" value="Sangat Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                        Sangat Mudah
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div>
            <legend class="col-md-auto">Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya</legend>
                <div class="col col-lg-2">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jopsi2" id="pertanyaan1" value="Tidak Sesuai" >
                        <label class="form-check-label" for="pertanyaan1">
                            Tidak Sesuai
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi2" id="pertanyaan1" value="Kurang Sesuai">
                        <label class="form-check-label" for="pertanyaan1">
                            Kurang Sesuai
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi2" id="pertanyaan1" value="Sesuai" >
                        <label class="form-check-label" for="pertanyaan1">
                            Sesuai
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi2" id="pertanyaan1" value="Sangat Sesuai" >
                        <label class="form-check-label" for="pertanyaan1">
                        Sangat Sesuai
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div>
            <legend class="col-md-auto">Bagaimana pendapat Saudara tentang kejelasan dan kepastian petugas yang melayani di Staklim Semarang</legend>
                <div class="col col-lg-2">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jopsi3" id="pertanyaan1" value="Tidak Jelas" >
                        <label class="form-check-label" for="pertanyaan1">
                            Tidak Jelas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi3" id="pertanyaan1" value="Kurang Jelas">
                        <label class="form-check-label" for="pertanyaan1">
                            Kurang Jelas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi3" id="pertanyaan1" value="Jelas" >
                        <label class="form-check-label" for="pertanyaan1">
                            Jelas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi3" id="pertanyaan1" value="Sangat Jelas" >
                        <label class="form-check-label" for="pertanyaan1">
                        Sangat Mudah
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div>
            <legend class="col-md-auto">Bagaimana pendapat Saudara tentang kedisiplinan petugas dalam memberikan pelayanan data dan informasi iklim di Staklim Semarang</legend>
                <div class="col col-lg-2">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jopsi4" id="pertanyaan1" value="Tidak Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Tidak Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi4" id="pertanyaan1" value="Kurang Mudah">
                        <label class="form-check-label" for="pertanyaan1">
                            Kurang Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi4" id="pertanyaan1" value="Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi4" id="pertanyaan1" value="Sangat Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                        Sangat Mudah
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div>
            <legend class="col-md-auto">Bagaimana pendapat Saudara tentang tanggung jawab petugas dalam memberikan pelayanan data dan informasi iklim di Staklim Semarang</legend>
                <div class="col col-lg-2">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jopsi5" id="pertanyaan1" value="Tidak Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Tidak Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi5" id="pertanyaan1" value="Kurang Mudah">
                        <label class="form-check-label" for="pertanyaan1">
                            Kurang Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi5" id="pertanyaan1" value="Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi5" id="pertanyaan1" value="Sangat Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                        Sangat Mudah
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div>
            <legend class="col-md-auto">Bagaimana pendapat Saudara tentang kemampuan petugas dalam memberikan pelayanan data dan informasi iklim di Staklim Semarang</legend>
                <div class="col col-lg-2">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jopsi6" id="pertanyaan1" value="Tidak Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Tidak Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi6" id="pertanyaan1" value="Kurang Mudah">
                        <label class="form-check-label" for="pertanyaan1">
                            Kurang Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi6" id="pertanyaan1" value="Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi6" id="pertanyaan1" value="Sangat Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                        Sangat Mudah
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div>
            <legend class="col-md-auto">Bagaimana pendapat Saudara tentang kecepatan pelayanan data dan informasi iklim di Staklim Semarang</legend>
                <div class="col col-lg-2">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jopsi7" id="pertanyaan1" value="Tidak Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Tidak Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi7" id="pertanyaan1" value="Kurang Mudah">
                        <label class="form-check-label" for="pertanyaan1">
                            Kurang Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi7" id="pertanyaan1" value="Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi7" id="pertanyaan1" value="Sangat Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                        Sangat Mudah
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div>
            <legend class="col-md-auto">Bagaimana pendapat Saudara tentang keadilan untuk mendapatkan pelayanan di Staklim Semarang</legend>
                <div class="col col-lg-2">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jopsi8" id="pertanyaan1" value="Tidak Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Tidak Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi8" id="pertanyaan1" value="Kurang Mudah">
                        <label class="form-check-label" for="pertanyaan1">
                            Kurang Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi8" id="pertanyaan1" value="Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi8" id="pertanyaan1" value="Sangat Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                        Sangat Mudah
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div>
            <legend class="col-md-auto">Bagaimana pendapat Saudara tentang kesopanan dan keramahan petugas dalam memberikan pelayanan data dan informasi iklim di Staklim Semarang</legend>
                <div class="col col-lg-2">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jopsi9" id="pertanyaan1" value="Tidak Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Tidak Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi9" id="pertanyaan1" value="Kurang Mudah">
                        <label class="form-check-label" for="pertanyaan1">
                            Kurang Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi9" id="pertanyaan1" value="Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi9" id="pertanyaan1" value="Sangat Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                        Sangat Mudah
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div>
            <legend class="col-md-auto">Bagaimana pendapat Saudara tentang kewajaran biaya untuk mendapatkan pelayanan data dan informasi iklim di Staklim Semarang</legend>
                <div class="col col-lg-2">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jopsi10" id="pertanyaan1" value="Tidak Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Tidak Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi10" id="pertanyaan1" value="Kurang Mudah">
                        <label class="form-check-label" for="pertanyaan1">
                            Kurang Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi10" id="pertanyaan1" value="Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi10" id="pertanyaan1" value="Sangat Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                        Sangat Mudah
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div>
            <legend class="col-md-auto">Bagaimana pendapat Saudara tentang kesesuaian antara biaya yang dibayarkan dengan biaya yang telah ditetapkan di Staklim Semarang</legend>
                <div class="col col-lg-2">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jopsi11" id="pertanyaan1" value="Tidak Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Tidak Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi11" id="pertanyaan1" value="Kurang Mudah">
                        <label class="form-check-label" for="pertanyaan1">
                            Kurang Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi11" id="pertanyaan1" value="Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi11" id="pertanyaan1" value="Sangat Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                        Sangat Mudah
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div>
            <legend class="col-md-auto">Bagaimana pendapat Saudara tentang ketepatan pelaksanaan terhadap jadwal waktu pelayanan data dan informasi iklim di Staklim Semarang</legend>
                <div class="col col-lg-2">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jopsi12" id="pertanyaan1" value="Tidak Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Tidak Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi12" id="pertanyaan1" value="Kurang Mudah">
                        <label class="form-check-label" for="pertanyaan1">
                            Kurang Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi12" id="pertanyaan1" value="Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi12" id="pertanyaan1" value="Sangat Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                        Sangat Mudah
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div>
            <legend class="col-md-auto">Bagaimana pendapat Saudara tentang kenyamanan di lingkungan unit pelayanan data di Staklim Semarang</legend>
                <div class="col col-lg-2">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jopsi13" id="pertanyaan1" value="Tidak Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Tidak Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi13" id="pertanyaan1" value="Kurang Mudah">
                        <label class="form-check-label" for="pertanyaan1">
                            Kurang Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi13" id="pertanyaan1" value="Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi13" id="pertanyaan1" value="Sangat Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                        Sangat Mudah
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div>
            <legend class="col-md-auto">Bagaimana pendapat Saudara tentang keamanan pelayanan data di Staklim Semarang</legend>
                <div class="col col-lg-2">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="Jopsi14" id="pertanyaan1" value="Tidak Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Tidak Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi14" id="pertanyaan1" value="Kurang Mudah">
                        <label class="form-check-label" for="pertanyaan1">
                            Kurang Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi14" id="pertanyaan1" value="Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                            Mudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jopsi14" id="pertanyaan1" value="Sangat Mudah" >
                        <label class="form-check-label" for="pertanyaan1">
                        Sangat Mudah
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
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