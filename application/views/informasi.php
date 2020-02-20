<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi dan Layanan</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body>

    <?php

    $this->load->view('template/header');

    ?>
    <br><br><br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div id="gambar" class="col-lg 6 col-md-12 text-center">
            <h3>Alur Pelayanan dan Infomrasi</h3>
                <a href="" >
                    <img src="<?php echo base_url() . 'assets/img/alur.jpg' ?>" alt="" >
                </a>
            </div>
            <div id="gambar" class="col-lg 6 col-md-12 text-center">
            <h3>Jenis Tarif PNBP</h3>

            <a href="">
                    <img src="<?php echo base_url() . 'assets/img/jenistarif.jpg' ?>" alt="">
                </a>

            </div>
        </div>

    </div>
    




    <br><br><br><br>


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