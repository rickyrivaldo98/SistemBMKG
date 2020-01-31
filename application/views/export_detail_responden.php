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
        LAPORAN HASIL SURVEY KEPUASAN MASYARAKAT
    </p>
    <p align="center">Responden ID<?php foreach ($data_responden as $d) { ?>
        <?php echo  $d->ID; ?>
    <?php } ?></p>

    <!-- <div style="font-size: 10px;">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Email</th>
                <th>Jenis Pelayanan</th>
            </tr>
            <tbody>
                <?php foreach ($data_responden as $d) :
                ?>
                    <tr>
                        <td><?php echo  $d->ID; ?></td>
                        <td><?php echo  $d->Umur; ?></td>
                        <td><?php echo  $d->Jenis_kelamin; ?></td>
                        <td><?php echo  $d->Pendidikan; ?></td>
                        <td><?php echo  $d->Pekerjaan; ?></td>
                        <td><?php echo  $d->Email; ?></td>
                        <td><?php echo  $d->Pelayanan; ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div> -->
    <div class="col-12">
        <?php foreach ($data_responden as $d) { ?>
            <div class="form-group">
                <h5>No Responden</h5>
                <div>
                    <?php echo  $d->ID; ?>
                </div>
            </div>
            <div class="form-group">
                <h5>Umur</h5>
                <?php echo  $d->Umur; ?>
            </div>
            <div class="form-group">
                <h5>Jenis Kelamin</h5>
                <?php echo  $d->Jenis_kelamin; ?>
            </div>
            <div class="form-group">
                <h5>Pendidikan</h5>
                <?php echo  $d->Pendidikan; ?>
            </div>
            <div class="form-group">
                <h5>Pekerjaan</h5>
                <?php echo  $d->Pekerjaan; ?>
            </div>
            <div class="form-group">
                <h5>Email</h5>
                <?php echo  $d->Email; ?>
            </div>
            <div class="form-group">
                <h5>Jenis Pelayanan</h5>
                <?php echo  $d->Pelayanan; ?>
            </div>
        <?php } ?>
        <!-- /.card-body -->
    </div>
    <div class="col-12">
        <?php foreach ($jawaban as $j) { ?>
            <div class="form-group">
                <h5>1. Bagaimana pendapat Saudara tentang Persyaratan pelayanan terbuka dan jelas di Staklim Semarang.</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi1a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi1b; ?>
            </div>
            <div class="form-group">
                <h5>2. Bagaimana pendapat Saudara tentang Persyaratan pelayanan mudah dipenuhi di Staklim Semarang</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi2a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi2b; ?>
            </div>
            <div class="form-group">
                <h5>3. Bagaimana pendapat Saudara tentang Informasi yang diperoleh dibutuhkan dalam kehidupan sehari-hari</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi3a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi3b; ?>
            </div>
            <div class="form-group">
                <h5>4. Bagaimana pendapat Saudara tentang informasi yang diperoleh mudah diakses</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi4a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi4b; ?>
            </div>
            <div class="form-group">
                <h5>5. Bagaimana pendapat Saudara tentang Informasi yang diperoleh mudah dipahami</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi5a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi5b; ?>
            </div>
            <div class="form-group">
                <h5>6. Bagaimana pendapat Saudara tentang Informasi yang diperoleh akurat</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi6a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi6b; ?>
            </div>
            <div class="form-group">
                <h5>7. Bagaimana pendapat Saudara tentang Informasi yang diperoleh ketersediaan jenis data dan informasi beragam</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi7a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi7b; ?>
            </div>
            <div class="form-group">
                <h5>8. Bagaimana pendapat Saudara tentang Prosedur pelayanan alur pelayanan jelas dan sederhana di staklim semarang</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi8; ?>
            </div>
            <div class="form-group">
                <h5>9. Bagaimana pendapat Saudara tentang sistem dan prosedur pelayanan masih berpeluang menimbulkan KKN di Staklim Semarang</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi9; ?>
            </div>
            <div class="form-group">
                <h5>10. Bagaimana pendapat Saudara tentang Informasi target waktu penyelesaian pelayanan jelas di Staklim Semarang</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi10a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi10b; ?>
            </div>
            <div class="form-group">
                <h5>11. Bagaimana pendapat Saudara tentang Penyelesaian pelayanan sesuai target waktu di Staklim Semarang</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi11a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi11b; ?>
            </div>
            <div class="form-group">
                <h5>12. Bagaimana pendapat Saudara tentang biaya pelayanan jelas dan terbuka di Staklim Semarang</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi12a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi12b; ?>
            </div>
            <div class="form-group">
                <h5>13. Bagaimana pendapat Saudara tentang Informasi daftar produk/jasa layanan terbuka dan jelas di Staklim Semarang</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi13a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi13b; ?>
            </div>
            <div class="form-group">
                <h5>14. Bagaimana pendapat Saudara tentang Sarana pengaduan/keluhan pelayanan publik tersedia di Staklim Semarang</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi14a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi14b; ?>
            </div>
            <div class="form-group">
                <h5>15. Bagaimana pendapat Saudara tentang Prosedur dan tindak lanjut penanganan pengaduan jelas di Staklim Semarang</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi15a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi15b; ?>
            </div>
            <div class="form-group">
                <h5>16. Bagaimana pendapat Saudara tentang keberadaan petugas jelas di Staklim Semarang</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi16a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi16b; ?>
            </div>
            <div class="form-group">
                <h5>17. Bagaimana pendapat Saudara tentang Petugas sigap, ahli dan cekatan di Staklim Semarang</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi17a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi17b; ?>
            </div>
            <div class="form-group">
                <h5>18. Bagaimana pendapat Saudara tentang Sikap dan perilaku petugas pelayanan baik dan bertanggungjawab di Staklim Semarang</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi18a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi18b; ?>
            </div>
            <div class="form-group">
                <h5>19. Bagaimana pendapat Saudara tentang Sarana dan prasarana pelayanan aman, nyaman dan mudah dijangkau di Staklim Semarang</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi19a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi19b; ?>
            </div>
            <div class="form-group">
                <h5>20. Bagaimana pendapat Saudara tentang Pelayanan publik pada instansi ini sudah berjalan dengan baik di Staklim Semarang</h5>
                <h6>Kualitas Pelayanan</h6>
                <?php echo  $j->Jopsi20a; ?>
                <br>
                <h6>Harapan Konsumen</h6>
                <?php echo  $j->Jopsi20b; ?>
            </div>

        <?php } ?>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</body>

</html>