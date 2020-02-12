<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <style>
    .loader {
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid #3498db;
      width: 120px;
      height: 120px;
      -webkit-animation: spin 2s linear infinite;
      /* Safari */
      animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
      0% {
        -webkit-transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
      }
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }
  </style>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Pengalihan Halaman....</title>
</head>

<body>
  <br><br><br><br>
  <div class="container">
    <div class="row justify-content-center">
      <b style="text-align: center;">please disable adblock and active javasript to acess this page... if you use ucbrowser or operamini change it to default browser, because that browser disable javascript function.</b>
    </div>

    <br>
    <center style="color: red;">
      <h3>Anda Akan dialihkan ke halaman Data Online BMKG</h3>
      if you not redirected to download page click <a href="http://dataonline.bmkg.go.id/"><b>HERE</b></a>
      <br>
      <div class="loader">
      </div>
    </center>

  </div>

  <!-- Optional JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    var url = "http://dataonline.bmkg.go.id/"; // url tujuan
    var count = 5; // dalam detik
    function countDown() {
      if (count > 0) {
        count--;
        var waktu = count + 1;
        $('#kata').html('<b>Halaman Ini Akan Otomatis Di Redirect KE </b> ' + url + ' dalam ' + waktu + ' detik.');
        setTimeout("countDown()", 1000);
      } else {
        window.location.href = url;
      }
    }
    countDown();
  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>