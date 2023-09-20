<?php
    require "../../koneksi_rifky.php";
    session_start();
    $sql_proses_rifky = "SELECT
                            pengaduan_rifky.id_pengaduan_rifky,
                            masyarakat_rifky.nama_rifky,
                            pengaduan_rifky.tgl_pengaduan_rifky,
                            pengaduan_rifky.nik_rifky,
                            pengaduan_rifky.isi_laporan_rifky,
                            pengaduan_rifky.foto_rifky,
                            pengaduan_rifky.status_rifky
                        FROM `pengaduan_rifky` 
                        INNER JOIN masyarakat_rifky ON pengaduan_rifky.nik_rifky = masyarakat_rifky.nik_rifky
                        WHERE pengaduan_rifky.status_rifky='proses'";
    $laporan_proses_rifky = mysqli_query($dbConn, $sql_proses_rifky);
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
            <h3 align="center">Cetak Laporan Proses</h3>
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
                    <?php foreach ($laporan_proses_rifky as $lp):?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $lp['nama_rifky']; ?></td>
                            <td><?= $lp['nik_rifky']; ?></td>
                            <td><?= $lp['tgl_pengaduan_rifky']; ?></td>
                            <td><?= $lp['isi_laporan_rifky'] ?></td>
                            <td><img src="../foto_pengaduan/<?= $lp['foto_rifky'] ?>" alt="" style="width:70px; height:50px;"></td>
                            <td><?= $lp['status_rifky']; ?></td>
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