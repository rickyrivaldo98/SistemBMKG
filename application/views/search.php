<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body>


    <?php

    $this->load->view('template/header');

    ?>
    <br><br>

    <div class="container">
        <div class="section-headline text-center">
            <h2> Hasil Tracking Permohonan </h2>
        </div>
        <form method="POST">
            <?php foreach ($pencarian as $tracking) { ?>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row justify-content-center">
                        <table class="table table-hover">

                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>No Tiket</td>
                                    <td>:</td>
                                    <td><?= $tracking->idpemohon; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>Nama Pemohon</td>
                                    <td>:</td>
                                    <td><?= $tracking->nama; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?= $tracking->alamat; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><?= $tracking->email; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>Instansi</td>
                                    <td>:</td>
                                    <td><?= $tracking->instansi; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>No. Hp</td>
                                    <td>:</td>
                                    <td><?= $tracking->nohp; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>Informasi yang dibutuhkan</td>
                                    <td>:</td>
                                    <td><?= $tracking->informasi; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php   } ?>

                    </div>
                </div>
        </form>
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