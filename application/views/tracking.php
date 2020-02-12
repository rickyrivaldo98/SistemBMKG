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



    <div class="container">
        <div class="section-headline text-center">
            <br>
            <h2>Tracking Permohonan </h2>
            <p>| Membantu mengetahui status permohonan anda |</p>
        </div>
        <form   action="<?php echo base_url(). 'page/search'; ?>" method="POST">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label for="idpemohon">No. Tiket</label>
                    <input type="text" name="keyword" id="id" class="form-control" placeholder="Masukkan No tiket anda">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary center-block" name="submit" id="btn" value="Cari">Lacak</button>

                </div>
            </div>
        </form>
    </div>
    <br><br><br><br>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>



</body>

</html>