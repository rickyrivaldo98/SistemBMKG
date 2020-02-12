

<!-- Navbar  -->
<style>
    .navbar{
        color: white !important;   
        background-color: #0099ff;
    }
    a.navbar-brand{
        color: white !important;
    }
    a.nav-item{
        color: white !important;


    }
    .nav-item:hover::after{
        content: '';
        display: block;
        border-bottom: 2px solid rgb(255, 255, 255);
        width: 50%;
        margin: auto;

    }


</style>
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
                <a class="nav-item nav-link"href="<?php echo base_url() . 'page/bantuan' ?>">Bantuan</a>
            </div>
        </div>
    </div>
</nav>
<!-- akhir navbar -->