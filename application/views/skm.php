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

                    <h5>Indeks Kepuasan Masyarakat (IKM)</h5>
                    <h6>Peningkatan Kualitas Layanan Publik</h6>
                    <small>* Wajib Diisi</small>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url() . 'admin/tambah_responden' ?>" method="post">
                        <div class="form-group row">
                            <label for="InputEmail" class="col-sm-2 col-form-label">Alamat Email: *</label>
                            <div class="col-sm-10">
                                <input name="Email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Masukkan email" required>
                                <small id="emailHelp" class="form-text text-muted">Kami tidak akan pernah memberikan email anda kepada siapapun</small>
                            </div>
                        </div>
                        <b>1. DATA RESPONDEN</b>
                        <small class="row col-sm-10">Harap Mengisi Data Responden Dengan Benar</small>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Umur: *</legend>
                                <div class="col-sm-10">
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Umur" id="gridRadios1" value="Dibawah 15">
                                        <label class="custom-control-label" for="gridRadios1">
                                            Dibawah 15 Tahun
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Umur" id="gridRadios2" value="16-25">
                                        <label class="custom-control-label" for="gridRadios2">
                                            16 Tahun - 25 Tahun
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Umur" id="gridRadios3" value="26-35">
                                        <label class="custom-control-label" for="gridRadios3">
                                            26 Tahun - 35 Tahun
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Umur" id="gridRadios4" value="36-45">
                                        <label class="custom-control-label" for="gridRadios4">
                                            36 Tahun - 45 Tahun
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Umur" id="gridRadios5" value="Diatas 46">
                                        <label class="custom-control-label" for="gridRadios5">
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
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jenis_kelamin" id="lakilaki" value="Laki-Laki">
                                        <label class="custom-control-label" for="lakilaki">
                                            Laki-Laki
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jenis_kelamin" id="perempuan" value="Perempuan">
                                        <label class="custom-control-label" for="perempuan">
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
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Pendidikan" id="pendidikan1" value="SD ke bawah">
                                        <label class="custom-control-label" for="pendidikan1">
                                            SD ke Bawah
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Pendidikan" id="pendidikan2" value="SLTP">
                                        <label class="custom-control-label" for="pendidikan2">
                                            SLTP
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Pendidikan" id="pendidikan3" value="SLTA">
                                        <label class="custom-control-label" for="pendidikan3">
                                            SLTA
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Pendidikan" id="pendidikan4" value="D1/D2/D3">
                                        <label class="custom-control-label" for="pendidikan4">
                                            D1/D2/D3
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Pendidikan" id="pendidikan5" value="D4/S1">
                                        <label class="custom-control-label" for="pendidikan5">
                                            D4/S1
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Pendidikan" id="pendidikan6" value="S2 Ke atas">
                                        <label class="custom-control-label" for="pendidikan6">
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
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Pekerjaan" id="Pekerjaan1" value="Pelajar/Mahasiswa">
                                        <label class="custom-control-label" for="Pekerjaan1">
                                            Pelajar/Mahasiswa
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Pekerjaan" id="Pekerjaan2" value="Peneliti/Dosen">
                                        <label class="custom-control-label" for="Pekerjaan2">
                                            Peneliti/Dosen
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Pekerjaan" id="Pekerjaan3" value="PNS/TNI/POLRI">
                                        <label class="custom-control-label" for="Pekerjaan3">
                                            PNS/TNI/POLRI
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Pekerjaan" id="Pekerjaan4" value="Pegawai BUMN/D">
                                        <label class="custom-control-label" for="Pekerjaan4">
                                            Pegawai BUMN/D
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Pekerjaan" id="Pekerjaan5" value="Pegawai Swasta">
                                        <label class="custom-control-label" for="Pekerjaan5">
                                            Pegawai Swasta
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Pekerjaan" id="Pekerjaan6" value="Wiraswasta">
                                        <label class="custom-control-label" for="Pekerjaan6">
                                            Wiraswasta
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Pekerjaan" id="Pekerjaan7" value="Lainnya">
                                        <label class="custom-control-label" for="Pekerjaan7">
                                            Lainnya
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <br>
                        <b>2. JENIS PELAYANAN YANG RESPONDEN TERIMA</b>
                        <small class="row col-sm-10">Isi Sesuai Jenis Layanan Yang Responden Terima (Bisa Lebih Dari Satu)</small>
                        <div class="form-group">
                            <label>Meteorologi</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Informasi cuaca publik (rutin, peringatan dini cuaca, pasang surut air laut)">
                                <label class="form-check-label">Informasi cuaca publik (rutin, peringatan dini cuaca, pasang surut air laut)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Informasi cuaca khusus (maritim, penerbangan, klaim asuransi)">
                                <label class="form-check-label">Informasi cuaca khusus (maritim, penerbangan, klaim asuransi)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Analisis cuaca (kecelakaan pesawat, kecelakaan kapal laut)">
                                <label class="form-check-label">Analisis cuaca (kecelakaan pesawat, kecelakaan kapal laut)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Informasi titik panas (hotspot)">
                                <label class="form-check-label">Informasi titik panas (hotspot)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Informasi tentang tingkat kemudahan terjadinya kebakaran hutan dan lahan">
                                <label class="form-check-label">Informasi tentang tingkat kemudahan terjadinya kebakaran hutan dan lahan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Sewa peralatan meteorologi">
                                <label class="form-check-label">Sewa peralatan meteorologi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Kunjungan">
                                <label class="form-check-label">Kunjungan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Klimatologi</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Prakiraan musim">
                                <label class="form-check-label">Prakiraan musim</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Informasi iklim khusus">
                                <label class="form-check-label">Informasi iklim khusus </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Analisis dan prakiraan curah hujan bulanan/dasarian">
                                <label class="form-check-label">Analisis dan prakiraan curah hujan bulanan/dasarian</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Tren curah hujan">
                                <label class="form-check-label">Tren curah hujan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Informasi kualitas udara">
                                <label class="form-check-label">Informasi kualitas udara</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Analisis iklim ekstrim">
                                <label class="form-check-label">Analisis iklim ekstrim</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Informasi iklim terapan (peta potensi energi baru terbarukan, informasi potensi DBD, dst)">
                                <label class="form-check-label">Informasi iklim terapan (peta potensi energi baru terbarukan, informasi potensi DBD, dst)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Informasi perubahan iklim (keterpaparan dan/atau proyeksi)">
                                <label class="form-check-label">Informasi perubahan iklim (keterpaparan dan/atau proyeksi)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Pengambilan dan pengujian sampel parameter iklim dan kualitas udara (laboratorium)">
                                <label class="form-check-label">Pengambilan dan pengujian sampel parameter iklim dan kualitas udara (laboratorium)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Sewa peralatan klimatologi">
                                <label class="form-check-label">Sewa peralatan klimatologi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Kunjungan">
                                <label class="form-check-label">Kunjungan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Geofisika</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Informasi gempabumi dan peringatan dini tsunami">
                                <label class="form-check-label">Informasi gempabumi dan peringatan dini tsunami</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Peta seismisitas">
                                <label class="form-check-label">Peta seismisitas</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Informasi tanda waktu (hilal dan gerhana)">
                                <label class="form-check-label">Informasi tanda waktu (hilal dan gerhana)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Informasi geofisika potensial (gravitasi, magnet bumi, dan hari guruh/petir)">
                                <label class="form-check-label">Informasi geofisika potensial (gravitasi, magnet bumi, dan hari guruh/petir)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Peta rendaman tsunami">
                                <label class="form-check-label">Peta rendaman tsunami</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Informasi seismologi teknik (shake map) (peta mikrozonasi dan percepatan tanah)">
                                <label class="form-check-label">Informasi seismologi teknik (shake map) (peta mikrozonasi dan percepatan tanah)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Sewa peralatan geofisika">
                                <label class="form-check-label">Sewa peralatan geofisika</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Kunjungan">
                                <label class="form-check-label">Kunjungan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Instrumentasi, Kalibrasi, Rekayasa, dan Jaringan Komunikasi</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Data meteorologi, klimatologi, dan geofisika (suhu, curah hujan, angin, dan grid)">
                                <label class="form-check-label">Data meteorologi, klimatologi, dan geofisika (suhu, curah hujan, angin, dan grid).</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Kalibrasi (peralatan MKG)">
                                <label class="form-check-label">Kalibrasi (peralatan MKG)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Konsultasi (untuk penerapan informasi khusus MKG)">
                                <label class="form-check-label">Konsultasi (untuk penerapan informasi khusus MKG)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Sewa peralatan MKG">
                                <label class="form-check-label">Sewa peralatan MKG</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kehumasan</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Kunjungan">
                                <label class="form-check-label">Kunjungan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pelayanan[]" value="Lainnya">
                                <label class="form-check-label">Lainnya</label>
                            </div>
                            <br>
                            <br>
                            <b>3. PENDAPAT RESPONDEN TENTANG PELAYANAN PUBLIK</b>
                            <small class="row col-sm-10">Isilah Sesuai Dengan Bagaimana Kualitas Pelayanan dan Harapan Responden Terhadap BMKG</small>
                            <br>
                            <b class="info-box bg-success">A. Persyaratan pelayanan adalah syarat yang harus dipenuhi dalam pengurusan suatu jenis pelayanan, baik persyaratan teknis maupun administratif.</b>
                            <fieldset class="form-group">
                                <legend class="row col-sm-10">1. Bagaimana pendapat Saudara tentang Persyaratan pelayanan terbuka dan jelas di Staklim Semarang.</legend>
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <label>Kualitas Pelayanan</label>
                                        <div class="custom-control custom-radio">
                                            <input required class="custom-control-input" type="radio" name="Jopsi1a" id="pertanyaan1" value="Tidak Setuju">
                                            <label class="custom-control-label" for="pertanyaan1">
                                                Tidak Setuju
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi1a" id="pertanyaan2" value="Kurang Setuju">
                                            <label class="custom-control-label" for="pertanyaan2">
                                                Kurang Setuju
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi1a" id="pertanyaan3" value="Setuju">
                                            <label class="custom-control-label" for="pertanyaan3">
                                                Setuju
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi1a" id="pertanyaan4" value="Sangat Setuju">
                                            <label class="custom-control-label" for="pertanyaan4">
                                                Sangat Setuju
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <label>Harapan Konsumen</label>
                                        <div class="custom-control custom-radio">
                                            <input required class="custom-control-input" type="radio" name="Jopsi1b" id="pertanyaan5" value="Tidak Penting">
                                            <label class="custom-control-label" for="pertanyaan5">
                                                Tidak Penting
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi1b" id="pertanyaan6" value="Kurang Penting">
                                            <label class="custom-control-label" for="pertanyaan6">
                                                Kurang Penting
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi1b" id="pertanyaan7" value="Penting">
                                            <label class="custom-control-label" for="pertanyaan7">
                                                Penting
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi1b" id="pertanyaan8" value="Sangat Penting">
                                            <label class="custom-control-label" for="pertanyaan8">
                                                Sangat Penting
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div>
                                    <legend class="row col-sm-10">2. Bagaimana pendapat Saudara tentang Persyaratan pelayanan mudah dipenuhi di Staklim Semarang</legend>
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <label>Kualitas Pelayanan</label>
                                            <div class="custom-control custom-radio">
                                                <input required class="custom-control-input" type="radio" name="Jopsi2a" id="pertanyaan9" value="Tidak Setuju">
                                                <label class="custom-control-label" for="pertanyaan9">
                                                    Tidak Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi2a" id="pertanyaan10" value="Kurang Setuju">
                                                <label class="custom-control-label" for="pertanyaan10">
                                                    Kurang Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi2a" id="pertanyaan11" value="Setuju">
                                                <label class="custom-control-label" for="pertanyaan11">
                                                    Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi2a" id="pertanyaan12" value="Sangat Setuju">
                                                <label class="custom-control-label" for="pertanyaan12">
                                                    Sangat Setuju
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <label>Harapan Konsumen</label>
                                            <div class="custom-control custom-radio">
                                                <input required class="custom-control-input" type="radio" name="Jopsi2b" id="pertanyaan13" value="Tidak Penting">
                                                <label class="custom-control-label" for="pertanyaan13">
                                                    Tidak Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi2b" id="pertanyaan14" value="Kurang Penting">
                                                <label class="custom-control-label" for="pertanyaan14">
                                                    Kurang Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi2b" id="pertanyaan15" value="Penting">
                                                <label class="custom-control-label" for="pertanyaan15">
                                                    Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi2b" id="pertanyaan16" value="Sangat Penting">
                                                <label class="custom-control-label" for="pertanyaan16">
                                                    Sangat Penting
                                                </label>
                                            </div>
                                        </div>
                            </fieldset>
                            <b class="info-box bg-success">B. Informasi yang diperoleh</b>
                            <fieldset class="form-group">
                                <div>
                                    <legend class="row col-sm-10">3. Bagaimana pendapat Saudara tentang Informasi yang diperoleh dibutuhkan dalam kehidupan sehari-hari</legend>
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <label>Kualitas Pelayanan</label>
                                            <div class="custom-control custom-radio">
                                                <input required class="custom-control-input" type="radio" name="Jopsi3a" id="pertanyaan17" value="Tidak Setuju">
                                                <label class="custom-control-label" for="pertanyaan17">
                                                    Tidak Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi3a" id="pertanyaan18" value="Kurang Setuju">
                                                <label class="custom-control-label" for="pertanyaan18">
                                                    Kurang Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi3a" id="pertanyaan19" value="Setuju">
                                                <label class="custom-control-label" for="pertanyaan19">
                                                    Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi3a" id="pertanyaan20" value="Sangat Setuju">
                                                <label class="custom-control-label" for="pertanyaan20">
                                                    Sangat Setuju
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <label>Harapan Konsumen</label>
                                            <div class="custom-control custom-radio">
                                                <input required class="custom-control-input" type="radio" name="Jopsi3b" id="pertanyaan21" value="Tidak Penting">
                                                <label class="custom-control-label" for="pertanyaan21">
                                                    Tidak Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi3b" id="pertanyaan22" value="Kurang Penting">
                                                <label class="custom-control-label" for="pertanyaan22">
                                                    Kurang Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi3b" id="pertanyaan23" value="Penting">
                                                <label class="custom-control-label" for="pertanyaan23">
                                                    Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi3b" id="pertanyaan24" value="Sangat Penting">
                                                <label class="custom-control-label" for="pertanyaan24">
                                                    Sangat Penting
                                                </label>
                                            </div>
                                        </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div>
                                    <legend class="row col-sm-10">4. Bagaimana pendapat Saudara tentang informasi yang diperoleh mudah diakses</legend>
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <label>Kualitas Pelayanan</label>
                                            <div class="custom-control custom-radio">
                                                <input required class="custom-control-input" type="radio" name="Jopsi4a" id="pertanyaan25" value="Tidak Setuju">
                                                <label class="custom-control-label" for="pertanyaan25">
                                                    Tidak Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi4a" id="pertanyaan26" value="Kurang Setuju">
                                                <label class="custom-control-label" for="pertanyaan26">
                                                    Kurang Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi4a" id="pertanyaan27" value="Setuju">
                                                <label class="custom-control-label" for="pertanyaan27">
                                                    Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi4a" id="pertanyaan28" value="Sangat Setuju">
                                                <label class="custom-control-label" for="pertanyaan28">
                                                    Sangat Setuju
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <label>Harapan Konsumen</label>
                                            <div class="custom-control custom-radio">
                                                <input required class="custom-control-input" type="radio" name="Jopsi4b" id="pertanyaan29" value="Tidak Penting">
                                                <label class="custom-control-label" for="pertanyaan29">
                                                    Tidak Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi4b" id="pertanyaan30" value="Kurang Penting">
                                                <label class="custom-control-label" for="pertanyaan30">
                                                    Kurang Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi4b" id="pertanyaan31" value="Penting">
                                                <label class="custom-control-label" for="pertanyaan31">
                                                    Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi4b" id="pertanyaan32" value="Sangat Penting">
                                                <label class="custom-control-label" for="pertanyaan32">
                                                    Sangat Penting
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div>
                                    <legend class="row col-sm-10">5. Bagaimana pendapat Saudara tentang Informasi yang diperoleh mudah dipahami</legend>
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <label>Kualitas Pelayanan</label>
                                            <div class="custom-control custom-radio">
                                                <input required class="custom-control-input" type="radio" name="Jopsi5a" id="pertanyaan33" value="Tidak Setuju">
                                                <label class="custom-control-label" for="pertanyaan33">
                                                    Tidak Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi5a" id="pertanyaan34" value="Kurang Setuju">
                                                <label class="custom-control-label" for="pertanyaan34">
                                                    Kurang Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi5a" id="pertanyaan35" value="Setuju">
                                                <label class="custom-control-label" for="pertanyaan35">
                                                    Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi5a" id="pertanyaan36" value="Sangat Setuju">
                                                <label class="custom-control-label" for="pertanyaan36">
                                                    Sangat Setuju
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <label>Harapan Konsumen</label>
                                            <div class="custom-control custom-radio">
                                                <input required class="custom-control-input" type="radio" name="Jopsi5b" id="pertanyaan37" value="Tidak Penting">
                                                <label class="custom-control-label" for="pertanyaan37">
                                                    Tidak Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi5b" id="pertanyaan38" value="Kurang Penting">
                                                <label class="custom-control-label" for="pertanyaan38">
                                                    Kurang Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi5b" id="pertanyaan39" value="Penting">
                                                <label class="custom-control-label" for="pertanyaan39">
                                                    Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi5b" id="pertanyaan40" value="Sangat Penting">
                                                <label class="custom-control-label" for="pertanyaan40">
                                                    Sangat Penting
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div>
                                    <legend class="row col-sm-10">6. Bagaimana pendapat Saudara tentang Informasi yang diperoleh akurat</legend>
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <label>Kualitas Pelayanan</label>
                                            <div class="custom-control custom-radio">
                                                <input required class="custom-control-input" type="radio" name="Jopsi6a" id="pertanyaan41" value="Tidak Setuju">
                                                <label class="custom-control-label" for="pertanyaan41">
                                                    Tidak Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi6a" id="pertanyaan42" value="Kurang Setuju">
                                                <label class="custom-control-label" for="pertanyaan42">
                                                    Kurang Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi6a" id="pertanyaan43" value="Setuju">
                                                <label class="custom-control-label" for="pertanyaan43">
                                                    Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi6a" id="pertanyaan44" value="Sangat Setuju">
                                                <label class="custom-control-label" for="pertanyaan44">
                                                    Sangat Setuju
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <label>Harapan Konsumen</label>
                                            <div class="custom-control custom-radio">
                                                <input required class="custom-control-input" type="radio" name="Jopsi6b" id="pertanyaan45" value="Tidak Penting">
                                                <label class="custom-control-label" for="pertanyaan45">
                                                    Tidak Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi6b" id="pertanyaan46" value="Kurang Penting">
                                                <label class="custom-control-label" for="pertanyaan46">
                                                    Kurang Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi6b" id="pertanyaan47" value="Penting">
                                                <label class="custom-control-label" for="pertanyaan47">
                                                    Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi6b" id="pertanyaan48" value="Sangat Penting">
                                                <label class="custom-control-label" for="pertanyaan48">
                                                    Sangat Penting
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div>
                                    <legend class="row col-sm-10">7. Bagaimana pendapat Saudara tentang Informasi yang diperoleh ketersediaan jenis data dan informasi beragam</legend>
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <label>Kualitas Pelayanan</label>
                                            <div class="custom-control custom-radio">
                                                <input required class="custom-control-input" type="radio" name="Jopsi7a" id="pertanyaan49" value="Tidak Setuju">
                                                <label class="custom-control-label" for="pertanyaan49">
                                                    Tidak Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi7a" id="pertanyaan50" value="Kurang Setuju">
                                                <label class="custom-control-label" for="pertanyaan50">
                                                    Kurang Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi7a" id="pertanyaan51" value="Setuju">
                                                <label class="custom-control-label" for="pertanyaan51">
                                                    Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi7a" id="pertanyaan52" value="Sangat Setuju">
                                                <label class="custom-control-label" for="pertanyaan52">
                                                    Sangat Setuju
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <label>Harapan Konsumen</label>
                                            <div class="custom-control custom-radio">
                                                <input required class="custom-control-input" type="radio" name="Jopsi7b" id="pertanyaan53" value="Tidak Penting">
                                                <label class="custom-control-label" for="pertanyaan53">
                                                    Tidak Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi7b" id="pertanyaan54" value="Kurang Penting">
                                                <label class="custom-control-label" for="pertanyaan54">
                                                    Kurang Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi7b" id="pertanyaan55" value="Penting">
                                                <label class="custom-control-label" for="pertanyaan55">
                                                    Penting
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi7b" id="pertanyaan56" value="Sangat Penting">
                                                <label class="custom-control-label" for="pertanyaan56">
                                                    Sangat Penting
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                            </fieldset>
                            <b class="info-box bg-success">C. Prosedur pelayanan adalah tata cara pelayanan yang dibakukan bagi penerima pelayanan</b>
                            <fieldset class="form-group">
                                <legend class="row col-sm-10">8. Bagaimana pendapat Saudara tentang Prosedur pelayanan alur pelayanan jelas dan sederhana di staklim semarang</legend>
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <label>Kualitas Pelayanan</label>
                                        <div class="custom-control custom-radio">
                                            <input required class="custom-control-input" type="radio" name="Jopsi8" id="pertanyaan57" value="Tidak Setuju">
                                            <label class="custom-control-label" for="pertanyaan57">
                                                Tidak Setuju
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi8" id="pertanyaan58" value="Kurang Setuju">
                                            <label class="custom-control-label" for="pertanyaan58">
                                                Kurang Setuju
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi8" id="pertanyaan59" value="Setuju">
                                            <label class="custom-control-label" for="pertanyaan59">
                                                Setuju
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi8" id="pertanyaan60" value="Sangat Setuju">
                                            <label class="custom-control-label" for="pertanyaan60">
                                                Sangat Setuju
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div>
                                    <legend class="row col-sm-10">9. Bagaimana pendapat Saudara tentang sistem dan prosedur pelayanan masih berpeluang menimbulkan KKN di Staklim Semarang</legend>
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <label>Kualitas Pelayanan</label>
                                            <div class="custom-control custom-radio">
                                                <input required class="custom-control-input" type="radio" name="Jopsi9" id="pertanyaan61" value="Tidak Setuju">
                                                <label class="custom-control-label" for="pertanyaan61">
                                                    Tidak Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi9" id="pertanyaan62" value="Kurang Setuju">
                                                <label class="custom-control-label" for="pertanyaan62">
                                                    Kurang Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi9" id="pertanyaan63" value="Setuju">
                                                <label class="custom-control-label" for="pertanyaan63">
                                                    Setuju
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="Jopsi9" id="pertanyaan64" value="Sangat Setuju">
                                                <label class="custom-control-label" for="pertanyaan64">
                                                    Sangat Setuju
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </fieldset>
                        <b class="info-box bg-success">D. Waktu pelayanan adalah jangka waktu yang diperlukan untuk menyelesaikan seluruh proses pelayanan</b>
                        <fieldset class="form-group">
                            <div>
                                <legend class="row col-sm-10">10. Bagaimana pendapat Saudara tentang Informasi target waktu penyelesaian pelayanan jelas di Staklim Semarang</legend>
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <label>Kualitas Pelayanan</label>
                                        <div class="custom-control custom-radio">
                                            <input required class="custom-control-input" type="radio" name="Jopsi10a" id="pertanyaan65" value="Tidak Setuju">
                                            <label class="custom-control-label" for="pertanyaan65">
                                                Tidak Setuju
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi10a" id="pertanyaan66" value="Kurang Setuju">
                                            <label class="custom-control-label" for="pertanyaan66">
                                                Kurang Setuju
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi10a" id="pertanyaan67" value="Setuju">
                                            <label class="custom-control-label" for="pertanyaan67">
                                                Setuju
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi10a" id="pertanyaan68" value="Sangat Setuju">
                                            <label class="custom-control-label" for="pertanyaan68">
                                                Sangat Setuju
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <label>Harapan Konsumen</label>
                                        <div class="custom-control custom-radio">
                                            <input required class="custom-control-input" type="radio" name="Jopsi10b" id="pertanyaan69" value="Tidak Penting">
                                            <label class="custom-control-label" for="pertanyaan69">
                                                Tidak Penting
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi10b" id="pertanyaan70" value="Kurang Penting">
                                            <label class="custom-control-label" for="pertanyaan70">
                                                Kurang Penting
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi10b" id="pertanyaan71" value="Penting">
                                            <label class="custom-control-label" for="pertanyaan71">
                                                Penting
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi10b" id="pertanyaan72" value="Sangat Penting">
                                            <label class="custom-control-label" for="pertanyaan72">
                                                Sangat Penting
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div>
                                <legend class="row col-sm-10">11. Bagaimana pendapat Saudara tentang Penyelesaian pelayanan sesuai target waktu di Staklim Semarang</legend>
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <label>Kualitas Pelayanan</label>
                                        <div class="custom-control custom-radio">
                                            <input required class="custom-control-input" type="radio" name="Jopsi11a" id="pertanyaan73" value="Tidak Setuju">
                                            <label class="custom-control-label" for="pertanyaan73">
                                                Tidak Setuju
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi11a" id="pertanyaan74" value="Kurang Setuju">
                                            <label class="custom-control-label" for="pertanyaan74">
                                                Kurang Setuju
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi11a" id="pertanyaan75" value="Setuju">
                                            <label class="custom-control-label" for="pertanyaan75">
                                                Setuju
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi11a" id="pertanyaan76" value="Sangat Setuju">
                                            <label class="custom-control-label" for="pertanyaan76">
                                                Sangat Setuju
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <label>Harapan Konsumen</label>
                                        <div class="custom-control custom-radio">
                                            <input required class="custom-control-input" type="radio" name="Jopsi11b" id="pertanyaan77" value="Tidak Penting">
                                            <label class="custom-control-label" for="pertanyaan77">
                                                Tidak Penting
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi11b" id="pertanyaan78" value="Kurang Penting">
                                            <label class="custom-control-label" for="pertanyaan78">
                                                Kurang Penting
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi11b" id="pertanyaan79" value="Penting">
                                            <label class="custom-control-label" for="pertanyaan79">
                                                Penting
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="Jopsi11b" id="pertanyaan80" value="Sangat Penting">
                                            <label class="custom-control-label" for="pertanyaan80">
                                                Sangat Penting
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <b class="info-box bg-success">E. Biaya atau tarif adalah tarif yang dikenakan kepada penerima layanan dalam mengurus dan/atau memperoleh pelayanan</b>
                        <fieldset class="form-group">
                            <legend class="row col-sm-10">12. Bagaimana pendapat Saudara tentang biaya pelayanan jelas dan terbuka di Staklim Semarang</legend>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label>Kualitas Pelayanan</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi12a" id="pertanyaan81" value="Tidak Setuju">
                                        <label class="custom-control-label" for="pertanyaan81">
                                            Tidak Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi12a" id="pertanyaan82" value="Kurang Setuju">
                                        <label class="custom-control-label" for="pertanyaan82">
                                            Kurang Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi12a" id="pertanyaan83" value="Setuju">
                                        <label class="custom-control-label" for="pertanyaan83">
                                            Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi12a" id="pertanyaan84" value="Sangat Setuju">
                                        <label class="custom-control-label" for="pertanyaan84">
                                            Sangat Setuju
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label>Harapan Konsumen</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi12b" id="pertanyaan85" value="Tidak Penting">
                                        <label class="custom-control-label" for="pertanyaan85">
                                            Tidak Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi12b" id="pertanyaan86" value="Kurang Penting">
                                        <label class="custom-control-label" for="pertanyaan86">
                                            Kurang Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi12b" id="pertanyaan87" value="Penting">
                                        <label class="custom-control-label" for="pertanyaan87">
                                            Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi12b" id="pertanyaan88" value="Sangat Penting">
                                        <label class="custom-control-label" for="pertanyaan88">
                                            Sangat Penting
                                        </label>
                                    </div>
                                </div>
                        </fieldset>
                        <b class="info-box bg-success">F. Produk spesifikasi jenis layanan adalah hasil pelayanan yang diberikan dan diterima sesuai dengan ketentuan</b>
                        <fieldset class="form-group">
                            <legend class="row col-sm-10">13. Bagaimana pendapat Saudara tentang Informasi daftar produk/jasa layanan terbuka dan jelas di Staklim Semarang</legend>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label>Kualitas Pelayanan</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi13a" id="pertanyaan89" value="Tidak Setuju">
                                        <label class="custom-control-label" for="pertanyaan89">
                                            Tidak Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi13a" id="pertanyaan90" value="Kurang Setuju">
                                        <label class="custom-control-label" for="pertanyaan90">
                                            Kurang Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi13a" id="pertanyaan91" value="Setuju">
                                        <label class="custom-control-label" for="pertanyaan91">
                                            Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi13a" id="pertanyaan92" value="Sangat Setuju">
                                        <label class="custom-control-label" for="pertanyaan92">
                                            Sangat Setuju
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label>Harapan Konsumen</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi13b" id="pertanyaan149" value="Tidak Penting">
                                        <label class="custom-control-label" for="pertanyaan149">
                                            Tidak Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi13b" id="pertanyaan150" value="Kurang Penting">
                                        <label class="custom-control-label" for="pertanyaan150">
                                            Kurang Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi13b" id="pertanyaan151" value="Penting">
                                        <label class="custom-control-label" for="pertanyaan151">
                                            Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi13b" id="pertanyaan152" value="Sangat Penting">
                                        <label class="custom-control-label" for="pertanyaan152">
                                            Sangat Penting
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <b class="info-box bg-success">G. Penanganan pengaduan, saran, dan masukan adalah mekanisme penanganan dan tindak lanjut terhadap pengaduan saran dan masukan</b>
                        <fieldset class="form-group">
                            <legend class="row col-sm-10">14. Bagaimana pendapat Saudara tentang Sarana pengaduan/keluhan pelayanan publik tersedia di Staklim Semarang</legend>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label>Kualitas Pelayanan</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi14a" id="pertanyaan93" value="Tidak Setuju">
                                        <label class="custom-control-label" for="pertanyaan93">
                                            Tidak Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi14a" id="pertanyaan94" value="Kurang Setuju">
                                        <label class="custom-control-label" for="pertanyaan94">
                                            Kurang Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi14a" id="pertanyaan95" value="Setuju">
                                        <label class="custom-control-label" for="pertanyaan95">
                                            Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi14a" id="pertanyaan96" value="Sangat Setuju">
                                        <label class="custom-control-label" for="pertanyaan96">
                                            Sangat Setuju
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label>Harapan Konsumen</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi14b" id="pertanyaan97" value="Tidak Penting">
                                        <label class="custom-control-label" for="pertanyaan97">
                                            Tidak Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi14b" id="pertanyaan98" value="Kurang Penting">
                                        <label class="custom-control-label" for="pertanyaan98">
                                            Kurang Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi14b" id="pertanyaan99" value="Penting">
                                        <label class="custom-control-label" for="pertanyaan99">
                                            Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi14b" id="pertanyaan100" value="Sangat Penting">
                                        <label class="custom-control-label" for="pertanyaan100">
                                            Sangat Penting
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <legend class="row col-sm-10">15. Bagaimana pendapat Saudara tentang Prosedur dan tindak lanjut penanganan pengaduan jelas di Staklim Semarang</legend>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label>Kualitas Pelayanan</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi15a" id="pertanyaan101" value="Tidak Setuju">
                                        <label class="custom-control-label" for="pertanyaan101">
                                            Tidak Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi15a" id="pertanyaan102" value="Kurang Setuju">
                                        <label class="custom-control-label" for="pertanyaan102">
                                            Kurang Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi15a" id="pertanyaan103" value="Setuju">
                                        <label class="custom-control-label" for="pertanyaan103">
                                            Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi15a" id="pertanyaan104" value="Sangat Setuju">
                                        <label class="custom-control-label" for="pertanyaan104">
                                            Sangat Setuju
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label>Harapan Konsumen</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi15b" id="pertanyaan105" value="Tidak Penting">
                                        <label class="custom-control-label" for="pertanyaan105">
                                            Tidak Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi15b" id="pertanyaan106" value="Kurang Penting">
                                        <label class="custom-control-label" for="pertanyaan106">
                                            Kurang Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi15b" id="pertanyaan107" value="Penting">
                                        <label class="custom-control-label" for="pertanyaan107">
                                            Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi15b" id="pertanyaan108" value="Sangat Penting">
                                        <label class="custom-control-label" for="pertanyaan108">
                                            Sangat Penting
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <b class="info-box bg-success">H. Kriteria petugas/pelaksana layanan adalah keberadaan dan kepastian petugas yang memberikan pelayanan</b>
                        <fieldset class="form-group">
                            <legend class="row col-sm-10">16. Bagaimana pendapat Saudara tentang keberadaan petugas jelas di Staklim Semarang</legend>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label>Kualitas Pelayanan</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi16a" id="pertanyaan109" value="Tidak Setuju">
                                        <label class="custom-control-label" for="pertanyaan109">
                                            Tidak Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi16a" id="pertanyaan110" value="Kurang Setuju">
                                        <label class="custom-control-label" for="pertanyaan110">
                                            Kurang Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi16a" id="pertanyaan111" value="Setuju">
                                        <label class="custom-control-label" for="pertanyaan111">
                                            Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi16a" id="pertanyaan112" value="Sangat Setuju">
                                        <label class="custom-control-label" for="pertanyaan112">
                                            Sangat Setuju
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label>Harapan Konsumen</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi16b" id="pertanyaan113" value="Tidak Penting">
                                        <label class="custom-control-label" for="pertanyaan113">
                                            Tidak Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi16b" id="pertanyaan114" value="Kurang Penting">
                                        <label class="custom-control-label" for="pertanyaan114">
                                            Kurang Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi16b" id="pertanyaan115" value="Penting">
                                        <label class="custom-control-label" for="pertanyaan115">
                                            Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi16b" id="pertanyaan116" value="Sangat Penting">
                                        <label class="custom-control-label" for="pertanyaan116">
                                            Sangat Penting
                                        </label>
                                    </div>
                                </div>
                        </fieldset>
                        <b class="info-box bg-success">I. Kompetensi pelaksana adalah kemampuan yang harus dimiliki oleh pelaksana meliputi pengetahuan, keahlian, keterampilan dan pengalaman</b>
                        <fieldset class="form-group">
                            <legend class="row col-sm-10">17. Bagaimana pendapat Saudara tentang Petugas sigap, ahli dan cekatan di Staklim Semarang</legend>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label>Kualitas Pelayanan</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi17a" id="pertanyaan117" value="Tidak Setuju">
                                        <label class="custom-control-label" for="pertanyaan117">
                                            Tidak Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi17a" id="pertanyaan118" value="Kurang Setuju">
                                        <label class="custom-control-label" for="pertanyaan118">
                                            Kurang Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi17a" id="pertanyaan119" value="Setuju">
                                        <label class="custom-control-label" for="pertanyaan119">
                                            Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi17a" id="pertanyaan120" value="Sangat Setuju">
                                        <label class="custom-control-label" for="pertanyaan120">
                                            Sangat Setuju
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label>Harapan Konsumen</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi17b" id="pertanyaan121" value="Tidak Penting">
                                        <label class="custom-control-label" for="pertanyaan121">
                                            Tidak Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi17b" id="pertanyaan122" value="Kurang Penting">
                                        <label class="custom-control-label" for="pertanyaan122">
                                            Kurang Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi17b" id="pertanyaan123" value="Penting">
                                        <label class="custom-control-label" for="pertanyaan123">
                                            Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi17b" id="pertanyaan124" value="Sangat Penting">
                                        <label class="custom-control-label" for="pertanyaan124">
                                            Sangat Penting
                                        </label>
                                    </div>
                                </div>
                        </fieldset>
                        <b class="info-box bg-success">J. Perilaku pelaksana adalah sikap petugas dalam memberikan pelayanan</b>
                        <fieldset class="form-group">
                            <legend class="row col-sm-10">18. Bagaimana pendapat Saudara tentang Sikap dan perilaku petugas pelayanan baik dan bertanggungjawab di Staklim Semarang</legend>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label>Kualitas Pelayanan</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi18a" id="pertanyaan125" value="Tidak Setuju">
                                        <label class="custom-control-label" for="pertanyaan125">
                                            Tidak Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi18a" id="pertanyaan126" value="Kurang Setuju">
                                        <label class="custom-control-label" for="pertanyaan126">
                                            Kurang Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi18a" id="pertanyaan127" value="Setuju">
                                        <label class="custom-control-label" for="pertanyaan127">
                                            Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi18a" id="pertanyaan128" value="Sangat Setuju">
                                        <label class="custom-control-label" for="pertanyaan128">
                                            Sangat Setuju
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label>Harapan Konsumen</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi18b" id="pertanyaan129" value="Tidak Penting">
                                        <label class="custom-control-label" for="pertanyaan129">
                                            Tidak Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi18b" id="pertanyaan130" value="Kurang Penting">
                                        <label class="custom-control-label" for="pertanyaan130">
                                            Kurang Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi18b" id="pertanyaan131" value="Penting">
                                        <label class="custom-control-label" for="pertanyaan131">
                                            Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi18b" id="pertanyaan132" value="Sangat Penting">
                                        <label class="custom-control-label" for="pertanyaan132">
                                            Sangat Penting
                                        </label>
                                    </div>
                                </div>
                        </fieldset>
                        <b class="info-box bg-success">K. Keamanan dan kenyamanan sarana prasaran pelayanan yaitu terjaminnya tingkat keamanan dan kenyamanan sarana dan prasarana pelayanan</b>
                        <fieldset class="form-group">
                            <legend class="row col-sm-10">19. Bagaimana pendapat Saudara tentang Sarana dan prasarana pelayanan aman, nyaman dan mudah dijangkau di Staklim Semarang</legend>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label>Kualitas Pelayanan</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi19a" id="pertanyaan133" value="Tidak Setuju">
                                        <label class="custom-control-label" for="pertanyaan133">
                                            Tidak Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi19a" id="pertanyaan134" value="Kurang Setuju">
                                        <label class="custom-control-label" for="pertanyaan134">
                                            Kurang Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi19a" id="pertanyaan135" value="Setuju">
                                        <label class="custom-control-label" for="pertanyaan135">
                                            Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi19a" id="pertanyaan136" value="Sangat Setuju">
                                        <label class="custom-control-label" for="pertanyaan136">
                                            Sangat Setuju
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label>Harapan Konsumen</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi19b" id="pertanyaan137" value="Tidak Penting">
                                        <label class="custom-control-label" for="pertanyaan137">
                                            Tidak Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi19b" id="pertanyaan138" value="Kurang Penting">
                                        <label class="custom-control-label" for="pertanyaan138">
                                            Kurang Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi19b" id="pertanyaan139" value="Penting">
                                        <label class="custom-control-label" for="pertanyaan139">
                                            Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi19b" id="pertanyaan140" value="Sangat Penting">
                                        <label class="custom-control-label" for="pertanyaan140">
                                            Sangat Penting
                                        </label>
                                    </div>
                                </div>
                        </fieldset>
                        <b class="info-box bg-success">L. Komitmen penyelenggara layanan dalam pelayanan publik</b>
                        <fieldset class="form-group">
                            <legend class="row col-sm-10">20. Bagaimana pendapat Saudara tentang Pelayanan publik pada instansi ini sudah berjalan dengan baik di Staklim Semarang</legend>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label>Kualitas Pelayanan</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi20a" id="pertanyaan141" value="Tidak Setuju">
                                        <label class="custom-control-label" for="pertanyaan141">
                                            Tidak Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi20a" id="pertanyaan142" value="Kurang Setuju">
                                        <label class="custom-control-label" for="pertanyaan142">
                                            Kurang Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi20a" id="pertanyaan143" value="Setuju">
                                        <label class="custom-control-label" for="pertanyaan143">
                                            Setuju
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi20a" id="pertanyaan144" value="Sangat Setuju">
                                        <label class="custom-control-label" for="pertanyaan144">
                                            Sangat Setuju
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label>Harapan Konsumen</label>
                                    <div class="custom-control custom-radio">
                                        <input required class="custom-control-input" type="radio" name="Jopsi20b" id="pertanyaan145" value="Tidak Penting">
                                        <label class="custom-control-label" for="pertanyaan145">
                                            Tidak Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi20b" id="pertanyaan146" value="Kurang Penting">
                                        <label class="custom-control-label" for="pertanyaan146">
                                            Kurang Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi20b" id="pertanyaan147" value="Penting">
                                        <label class="custom-control-label" for="pertanyaan147">
                                            Penting
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="Jopsi20b" id="pertanyaan148" value="Sangat Penting">
                                        <label class="custom-control-label" for="pertanyaan148">
                                            Sangat Penting
                                        </label>
                                    </div>
                                </div>
                        </fieldset>
                        <div class=" form-group">
                            <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                            <!-- <a type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Submit</a> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector("#submit").addEventListener('click', function() {
            setTimeout(function() {
                swal.fire({
                    icon: 'success',
                    title: 'Your work has been saved',
                    timer: '3200',
                    showConfirmButton: true,
                });
            }, 5);
            window.setTimeout(function() {
                window.location.replace("<?php echo base_url() . 'admin/skm' ?>");
            }, 3000);
        });
    </script>
    <script src="<?php echo base_url() . 'assets/js/package/dist/sweetalert2.all.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/jquery/jquery.min.js' ?>"></script>
</body>


</html>