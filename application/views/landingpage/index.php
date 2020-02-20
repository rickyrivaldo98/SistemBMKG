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
    <style>
        html {
            scroll-behavior: smooth;
        }

        .ignielToTop {
            display: none;
            width: 50px;
            height: 50px;
            position: fixed;
            bottom: 50px;
            right: 50px;
            z-index: 1;
            cursor: pointer;
            border-radius: 100px;
            transition: all .5s;
            background: #008c5f url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;
        }

        .ignielToTop:hover {
            background: #1d2129 url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;
        }
    </style>

    <script>
        // window.addEventListener('scroll',  () =>{
        //     const scrollable = document.documentElement.scrollHeight = window.innerHeight;
        //     const scrolled = window.scrollY;

        //     if(Math.ceil(scrolled) === scrollable){


        //     }

        // });
        $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 30) {
    $('.ignielToTop').fadeIn();
  } else {
    $('.ignielToTop').fadeOut();
  }
});
    </script>



    <title>Selamat datang di website</title>
</head>

<body>

    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url() ?>">
                <img src="<?php echo base_url() . 'assets/img/logo.png' ?>" alt="logo" class="brand-image elevation-3" style="opacity: .8; width:30px; ">
                <span>BMKG</span>



            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#"><span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#video">Tentang</a>
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

        <br><br><br>
        <h1 style="text-align: center">Jenis Layanan</h1>
        <br><br><br><br>
        <div id="apa" class="row justify-content-center">

            <div class="col-lg-4 col-md-4">
                <div id="kotak-info" class="info-panel text-center">
                    <a class="icon-link" href="<?php echo base_url() . 'page/form' ?>">
                        <img alt="berbayar" id="berbayar" href="www.google.com" class="icon" src="https://img.icons8.com/wired/60/000000/pay-wall.png">
                        <h4>Berbayar</h4>
                        <p>Layanan Informasi Berbayar</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div id="kotak-info" class="info-panel text-center">
                    <a class="icon-link" href="<?php echo base_url() . 'page/syarat' ?>">
                        <img alt="0 rupiah" id="0-rupiah" class="icon" src="https://img.icons8.com/wired/60/000000/gift.png">
                        <h4>0 Rupiah</h4>
                        <p>Layanan Informasi 0 rupiah</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div id="kotak-info" class="info-panel text-center">
                    <a class="icon-link" href="<?php echo base_url() . 'page/redirect' ?>" target="blank">
                        <img alt="free" id="free-icon" class="icon" src="https://img.icons8.com/carbon-copy/60/000000/service.png">
                        <div class="tulisan">
                            <h4>Informasi Gratis</h4>
                            <p>Layanan Informasi tanpa biaya</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">


                <div id="kotak-info" class="info-panel text-center">
                    <a class="icon-link" href="<?php echo base_url() . 'page/skm' ?>">

                        <img alt="survei IKM" id="survey" class="icon" src="https://img.icons8.com/ios/60/000000/survey.png">

                        <h4>Survei IKM</h4>
                        <p>Survei IKM terhadap Layanan BMKG</p>
                </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <div id="kotak-info" class="info-panel text-center">
                    <a class="icon-link" href="<?php echo base_url() . 'page/kritik' ?>">

                        <img alt="pengaduan" id="timbangan" class="icon" src="https://img.icons8.com/dotty/60/000000/scales.png">

                        <h4>Layanan Pengaduan</h4>
                        <p>Pengaduan Terhadap Pungli</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div id="kotak-info" class="info-panel text-center">
                    <a class="icon-link" href="<?php echo base_url() . 'page/tracking' ?>">

                        <img alt="Tracking" id="track-icon" class="icon" src="https://img.icons8.com/dotty/60/000000/order-shipped.png">

                        <h4>Tracking</h4>
                        <p>Lacak Proses permohonan</p>
                    </a>

                </div>
            </div>
            <div class="col-lg-4 col-md-4">

                <div id="kotak-info" class="info-panel text-center">
                    <a class="icon-link" href="">

                        <img alt="informasi dan layanan" id="informasi" class="icon" src="https://img.icons8.com/dotty/60/000000/info.png">

                        <h4>Informasi dan Layanan </h4>
                        <p>Informasi dan layanan BMKG</p>
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
                                <?php echo $b = $d->count; ?>
                            <?php } ?></h1>
                        <p>Informasi berbayar</p>
                    </div>
                    <div id="kotak" class="col-lg-4 col-md-12">
                        <h1><?php foreach ($data_pemohon1 as $d1) { ?>
                                <?php echo $A = $d1->count; ?>
                            <?php } ?></h1>
                        <p>Informasi 0 Rupiah</p>
                    </div>
                    <div id="kotak" class="col-lg-4 col-md-12">
                        <h1><?php echo $A + $b; ?> </h1>
                        <p>Total</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <!-- awal video -->
    <div class="container">
        <div class="row justify-content-center">
            <br><br><br><br><br>
            <h1 id="text2" class="display-4">Profil Layanan BMKG Jateng</h1>
            <!-- kotak video -->
            <div id="video" class="info-panel">
                <iframe width="612" height="312" src="https://www.youtube.com/embed/Dkt0asxxfQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <!-- akhir video -->
    </div>



    <br><br><br><br>

    <!-- Footer -->
                    <?php $this->load->view('template/footer')  ?>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <a href="#" class="ignielToTop"></a>
</body>


</html>




<!-- ICON nya -->