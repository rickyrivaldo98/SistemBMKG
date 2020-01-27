<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <button id="tombol">
        klik
    </button>
    <script>
        document.querySelector("#tombol").addEventListener('click', function() {
            swal.fire({

                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: true,

            });

        });
    </script>
    <script src="<?php echo base_url() . 'assets/js/package/dist/sweetalert2.all.min.js' ?>"></script>

</body>

</html>