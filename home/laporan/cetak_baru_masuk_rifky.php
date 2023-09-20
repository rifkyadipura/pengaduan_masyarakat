<?php
    require "../../koneksi_rifky.php";
    session_start();
    $sql_baru_masuk_rifky = "SELECT
                                pengaduan_rifky.id_pengaduan_rifky,
                                masyarakat_rifky.nama_rifky,
                                pengaduan_rifky.tgl_pengaduan_rifky,
                                pengaduan_rifky.nik_rifky,
                                pengaduan_rifky.isi_laporan_rifky,
                                pengaduan_rifky.foto_rifky,
                                pengaduan_rifky.status_rifky
                            FROM `pengaduan_rifky` 
                            INNER JOIN masyarakat_rifky ON pengaduan_rifky.nik_rifky = masyarakat_rifky.nik_rifky
                            WHERE pengaduan_rifky.status_rifky='0'";
    $laporan_baru_masuk_rifky = mysqli_query($dbConn, $sql_baru_masuk_rifky);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apps | Pengaduan</title>
</head>
<body>
<div class="card shadow-lg">
        <center>
            <img class="mb-4" src="../../assets/brand/logo.png" alt="" width="72" height="72">
        </center>
        <div class="card-header">
            <h3 align="center">Cetak Laporan Baru Masuk</h3>
        </div>
        <div class="card-body">
            <div style="overflow-x:auto;">
                <table border="1" style=" text-align: center;" width="100%">
                    <tr>
                        <th>No</th>
                        <th>Nama Masyarakat</th>
                        <th>Nik</th>
                        <th>Tanggal Pengaduan</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>Status</th>
                    </tr>
                    <?php $i=1; ?>
                    <?php foreach ($laporan_baru_masuk_rifky as $lb):?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $lb['nama_rifky']; ?></td>
                            <td><?= $lb['nik_rifky']; ?></td>
                            <td><?= $lb['tgl_pengaduan_rifky']; ?></td>
                            <td><?= $lb['isi_laporan_rifky'] ?></td>
                            <td><img src="../foto_pengaduan/<?= $lb['foto_rifky'] ?>" alt="" style="width:70px; height:50px;"></td>
                            <td> <?php 
                                    if ($lb['status_rifky'] == '0') {
                                        echo "Baru Masuk";
                                    }else {
                                        echo $lb['status_rifky'];
                                    } ?>
                            </td>
                        </tr>
                    <?php $i++; ?>
                    <?php endforeach?>
                </table>
            </div>
        </div>
    <script>
        window.print();
    </script>
</body>
</html>