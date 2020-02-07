<!DOCTYPE html>
<html>

<head>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Laporan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            .line-title {
                border: 0;
                border-style: inset;
                border-top: 1px solid #000;
            }
        </style>
    </head>
</head>

<body>
    <img src="assets/img/logo-bmkg.png" style="position: absolute; width: 60px; height: auto;">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 2.5; font-weight:bold;">
                    BADAN METEOROLOGI, KLIMATOLOGI DAN GEOFISIKA
                </span><br>
                <small>JAWA TENGAH</small>
                <br>
            </td>
        </tr>
    </table>
    <hr class="line-title">
    <p align="center">
        LAPORAN HASIL PENGADUAN KEPUASAN MASYARAKAT
    </p>
    <div style="font-size: 10px;">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Nama Pengaduan</th>
                <th>Email</th>
                <th>Kritik & Saran</th>
                <th>File Pendukung</th>
            </tr>
            <tbody>
                <?php foreach ($kritik as $k) :
                ?>
                    <tr>
                        <td><?php echo  $k->ID; ?></td>
                        <td><?php echo  $k->Nama; ?></td>
                        <td><?php echo  $k->Email; ?></td>
                        <td><?php echo  $k->Kritik; ?></td>
                        <td><?php
                            if ($k->File == null) {
                                echo  "Tidak ada File Pendukung";
                            } else {
                                echo $k->File;
                            } ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>