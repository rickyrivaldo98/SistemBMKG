<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->



    <title>Selamat datang di website</title>
</head>

<body>

    <!-- Navbar  -->
    <?php
    $this->load->view('template/header');
    ?>
    <!-- akhir navbar -->

    <div class="container my-5" id="content">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" id="v-pills-login-tab" data-toggle="pill" href="#login" role="tab" aria-controls="login" aria-selected="true">Login or Register</a>
                            <a class="nav-link" id="v-pills-order-tab" data-toggle="pill" href="#order" role="tab" aria-controls="order" aria-selected="true">How to Order?</a>
                            <a class="nav-link" id="v-pills-tiket-tab" data-toggle="pill" href="#tiket" role="tab" aria-controls="tiket" aria-selected="true">How if my E-ticket/Voucher not send?</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="v-pills-login-tab">
                                <h4>Login or Register</h4>
                                <hr style="color: white">
                                <p>
                                    <tr>
                                        <ol>
                                            <li> Click on "Sign in or Register" bar </li>
                                            <li> If you haven't had an account, you can fill in the registration form </li>
                                            <li> We recommend you to choose a password that contains uppercase, number, or symbols</li>
                                            <li> If you have had an account, choose "Sign In"</li>
                                            <li> You can start to choose your destination and have fun!</li>
                                        </ol>
                                    </tr>
                            </div>


                            <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="v-pills-order-tab">
                                <h4>How to Order?</h4>
                                <hr>
                                <ol>
                                    <li> You can Log In/Register first or directly choose your destination </li>
                                    <li> Choose a category : Culture, Event, or Beauty & Relax</li>
                                    <li> Fill the search box with your destination, if you choose "Event", then you have to choose the date. Or you can Explore Everything with the category</li>
                                    <li> Choose the destination </li>
                                    <li> Add the amount of ticket(s) that you are needed </li>
                                    <li> Finish the traveller form and payment</li>
                                </ol>
                                <hr>
                            </div>

                            <div class="tab-pane fade" id="tiket" role="tabpanel" aria-labelledby="v-pills-tiket-tab">
                                <h4>Where's My E-Ticket?</h4>
                                <hr>
                                <dl>
                                    <dd>Send an email to Amuse.admin@gmail.com</dd>
                                    <dd>or</dd>
                                    <dd>Call us at 021-238938</dd>
                                </dl>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <br><br><br><br>

    <!-- Footer -->
    <?php
    $this->load->view('template/footer');
    ?>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>


</html>




<!-- ICON nya -->