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
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/adminlte.min.css' ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="<?php echo base_url() . 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700' ?>" rel="stylesheet">
</head>
<br>
<br>

<body>
    <div class="container">
        <div style="color: red;"><?php echo (isset($message)) ? $message : ""; ?></div>
        <div class="col-md6">
            <div class="card card-primary">
                <div class="card-header">

                    <h5>Layanan Pengaduan BMKG</h5>
                    <h6>Peningkatan Kualitas Layanan Publik</h6>
                    <small>* Wajib Diisi</small>
                </div>
                <form enctype="multipart/form-data" role="form" method="post">
                    <div class="card-body">
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
                        <div class="form-group row">
                            <label for="exampleInputFile" class="col-sm-2 col-form-label">Masukkan File: </label>
                            <div class="input-group col-sm-10">
                                <div class="custom-file">
                                    <input name="File" type="file" class="custom-file-input" id="exampleInputFile"></input>
                                    <label class="custom-file-label" for="exampleInputFile">Masukkan File (Jika Ada)</label>
                                </div>
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
    <script src="<?php echo base_url() . 'assets/plugins/jquery/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/adminlte.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js' ?>"></script>
    <script>
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>