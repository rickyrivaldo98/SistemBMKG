<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">



    <title>Selamat datang di website</title>
</head>

<body>

    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
        <a class="navbar-brand" href="<?php echo base_url()?>">
            <img src="<?php echo base_url() . 'assets/img/logo.png' ?>" alt="logo" class="brand-image elevation-3" style="opacity: .8; width:30px; ">
        <span>BMKG</span> 
    
    
    
    </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">hehehe<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Tentang</a>
                    <a class="nav-item nav-link" href="<?php echo base_url() . 'page/bantuan' ?>">Bantuan</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Jumbotron -->

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div id="text" class="text-center">
                <h1 class="display-4">Selamat Datang Di Sistem Pelayanan Online BMKG Jawa Tengah</h1>
            </div>
        </div>
    </div>

    <!-- akhir jumbotron -->

    <!-- video -->

    <div class="container">
    <div class="row justify-content-center">
        <img class="logo" src="<?php echo base_url() . 'assets/img/logo.png' ?>" alt="">
    </div>  
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <br><br><br><br><br>
            <h1 id="text2" class="display-4">Profil Layanan BMKG Jateng</h1>
            <!-- kotak video -->
            <div id="video" class="info-panel">
                <iframe width="612" height="312" src="https://www.youtube.com/embed/BxlxzgFhWdk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <!-- akhir video -->

        <br><br><br>
        <h1 style="text-align: center">Jenis Layanan</h1>
        <br><br><br><br>
        <div id="apa" class="row justify-content-center">

            <div class="col-lg-4 col-md-4">
                <div id="kotak-info" class="info-panel text-center">
                    <a class="icon-link" href="<?php echo base_url() . 'page/form' ?>">
                        <img id="berbayar" href="www.google.com" class="icon" src="https://img.icons8.com/wired/60/000000/pay-wall.png">
                        <h4>Berbayar</h4>
                        <p>Lorem, ipsum dolor.</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div id="kotak-info" class="info-panel text-center">
                    <a class="icon-link" href="<?php echo base_url() . 'page/syarat' ?>">
                        <img id="0-rupiah" class="icon" src="https://img.icons8.com/wired/60/000000/gift.png">
                        <h4>0 Rupiah</h4>
                        <p>Lorem, ipsum dolor.</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div id="kotak-info" class="info-panel text-center">
                    <a class="icon-link" href="<?php echo base_url() . 'page/redirect' ?>" target="blank">
                        <img id="free-icon" class="icon" src="https://img.icons8.com/carbon-copy/60/000000/service.png">
                        <div class="tulisan">
                            <h4>Informasi Gratis</h4>
                            <p>Lorem, ipsum dolor.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">


                <div id="kotak-info" class="info-panel text-center">
                    <a class="icon-link" href="<?php echo base_url() . 'page/skm' ?>">

                        <img id="survey" class="icon" src="https://img.icons8.com/ios/60/000000/survey.png">

                        <h4>Survei IKM</h4>
                        <p>Lorem, ipsum dolor.</p>
                </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <div id="kotak-info" class="info-panel text-center">
                    <a class="icon-link" href="<?php echo base_url() . 'page/kritik' ?>">

                        <img id="timbangan" class="icon" src="https://img.icons8.com/dotty/60/000000/scales.png">

                        <h4>Layanan Pengaduan</h4>
                        <p>Lorem, ipsum dolor.</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div id="kotak-info" class="info-panel text-center">
                    <a class="icon-link" href="<?php echo base_url() . 'page/tracking' ?>">

                        <img id="track-icon" class="icon" src="https://img.icons8.com/dotty/60/000000/order-shipped.png">

                        <h4>Tracking</h4>
                        <p>Lorem, ipsum dolor.</p>
                    </a>

                </div>
            </div>
            <div class="col-lg-4 col-md-4">

                <div id="kotak-info" class="info-panel text-center">
                    <a class="icon-link" href="">

                        <img id="informasi" class="icon" src="https://img.icons8.com/dotty/60/000000/info.png">

                        <h4>Informasi dan Layanan </h4>
                        <p>Lorem, ipsum dolor.</p>
                    </a>
                </div>

            </div>

        </div>
    </div>
    <br><br><br><br>
    <div class="card">
        <div class="container">
            <div class="card-body">
                <br><br>
                <div id="tes" class="row text-center">

                    <div id="kotak" class="col-lg-4 col-md-12">
                        <h1><?php foreach ($data_pemohon as $d) { ?>
                          <?php echo  $d->count; ?>
                        <?php } ?></h1>
                        <p>Informasi berbayar</p>
                    </div>
                    <div id="kotak" class="col-lg-4 col-md-12">
                        <h1>1</h1>
                        <p>Informasi 0 Rupiah</p>
                    </div>
                    <div id="kotak" class="col-lg-4 col-md-12">
                        <h1>1</h1>
                        <p>Total</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <!-- Footer -->
    <div class="container">
        <footer class="page-footer font-small blue pt-4">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0 mt-3">

                        <!-- Content -->
                        <h5 class="text-uppercase">BMKG Jawa Tengah</h5>
                        <p>Melayani anda dengan sepenuh hati</p>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none pb-3">

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Link 1</a>
                            </li>
                            <li>
                                <a href="#!">Link 2</a>
                            </li>
                            <li>
                                <a href="#!">Link 3</a>
                            </li>
                            <li>
                                <a href="#!">Link 4</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Link 1</a>
                            </li>
                            <li>
                                <a href="#!">Link 2</a>
                            </li>
                            <li>
                                <a href="#!">Link 3</a>
                            </li>
                            <li>
                                <a href="#!">Link 4</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>


</html>




<!-- ICON nya -->