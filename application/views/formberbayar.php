<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/gaya.css' ?>">

</head>

<body>

    <?php

    $this->load->view('template/header');

    ?>
    <div class="jumbotron">




        <br>
        <div class="container">
            <div class="card">
                <div style="background-color:#0099ff; color:white;" class="card-header">
                    <div class="section-headline text-center">
                        <h2>Formulir Permohonan Data </h2>
                    </div>
                </div>

                <form action="<?php echo base_url() . 'page/form'; ?>" method="POST">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="idpemohon">ID</label>
                                <input type="text"" name=" idpemohon" id="id" class="form-control" placeholder="ID Anda">
                            </div>
                            <div class="form-group <?= form_error('nama') ? 'has-error' : null ?>">
                                <label for="nama">Nama Pemohon</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap Anda...">
                                <?= form_error('nama') ?>
                            </div>
                            <div class="form-group <?= form_error('alamat') ? 'has-error' : null ?>">
                                <label for="alamat">Alamat Pemohon</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Lengkap Anda...">
                                <?= form_error('alamat') ?>
                            </div>
                            <div class="form-group <?= form_error('email') ? 'has-error' : null ?>">
                                <label for="email">Email Pemohon</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan email anda">
                                <?= form_error('email') ?>

                            </div>
                            <div class="form-group <?= form_error('instansi') ? 'has-error' : null ?>">
                                <label for="instansi">Asal Instansi Pemohon</label>
                                <input type="text" name="instansi" id="instansi" class="form-control" placeholder="Asal instansi anda">
                                <?= form_error('instansi') ?>
                            </div>
                            <div class="form-group  <?= form_error('nohp') ? 'has-error' : null ?>">
                                <label for="nohp ">Nomor HP Pemohon <p style="color: grey; font-size: 14px;">*Diutamakan nomor yang sudah terhubung dengan WhatsApp</p></label>
                                <input type="text" name="nohp" id="hp" class="form-control" placeholder="Masukkan no. HP anda">
                                <?= form_error('nohp') ?>
                            </div>
                            <div class="form-group <?= form_error('informasi') ? 'has-error' : null ?>">
                                <label for="informasi">Informasi yang dibutuhkan <p style="color: grey; font-size: 14px;">*Contoh : informasi curah hujan di kota semarang daerah simpang lima tanggal 20 januari 2020</p> </label>
                                <textarea name="informasi" type="text" class="form-control" id="informasi" placeholder="Informasi yang dibutuhkan"></textarea>
                                <?= form_error('informasi') ?>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" name="submit" id="btn" value="Submit">Submit</button>

                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <br><br><br>

    </div>

    <?php

    $this->load->view('template/footer');

    ?>



    <script src="js/jquery-3.4.1.min.js"> </script>
    <script src="js/app.js"></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>



</body>

</html>