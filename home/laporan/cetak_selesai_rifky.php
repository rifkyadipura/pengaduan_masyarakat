<?php
    require "../../koneksi_rifky.php";
    session_start();
    $sql_selesai_rifky = "SELECT  
                            tanggapan_rifky.id_tanggapan_rifky,
                            tanggapan_rifky.id_pengaduan_rifky,
                            masyarakat_rifky.nama_rifky AS nama_masyarakat_rifky,
                            pengaduan_rifky.tgl_pengaduan_rifky,
                            tanggapan_rifky.tgl_tanggapan_rifky,
                            pengaduan_rifky.isi_laporan_rifky,
                            pengaduan_rifky.foto_rifky,
                            pengaduan_rifky.status_rifky,
                            tanggapan_rifky.tanggapan_rifky,
                            tanggapan_rifky.id_petugas_rifky,
                            petugas_rifky.nama_petugas_rifky
                        FROM `tanggapan_rifky`
                        INNER JOIN pengaduan_rifky ON tanggapan_rifky.id_pengaduan_rifky = pengaduan_rifky.id_pengaduan_rifky
                        INNER JOIN masyarakat_rifky ON pengaduan_rifky.nik_rifky = masyarakat_rifky.nik_rifky
                        INNER JOIN petugas_rifky ON tanggapan_rifky.id_petugas_rifky = petugas_rifky.id_petugas_rifky
                        WHERE pengaduan_rifky.status_rifky = 'selesai'";
    $laporan_selesai_rifky = mysqli_query($dbConn, $sql_selesai_rifky);
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
            <h3 align="center">Cetak Laporan Selesai</h3>
        </div>
        <div class="card-body">
            <div style="overflow-x:auto;">
                <table border="1" style=" text-align: center;" width="100%">
                    <tr>
                        <th>No</th>
                        <th>Nama Masyarakat</th>
                        <th>Tgl Pengaduan</th>
                        <th>Tgl Tanggapan</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>Tanggapan</th>
                        <th>Status</th>
                        <th>Petugas</th>
                    </tr>
                    <?php $i=1; ?>
                    <?php foreach ($laporan_selesai_rifky as $ls):?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $ls['nama_masyarakat_rifky']; ?></td>
                            <td><?= $ls['tgl_pengaduan_rifky']; ?></td>
                            <td><?= $ls['tgl_tanggapan_rifky']; ?></td>
                            <td><?= $ls['isi_laporan_rifky'] ?></td>
                            <td><img src="../foto_pengaduan/<?= $ls['foto_rifky'] ?>" alt="" style="width:70px; height:50px;"></td>
                            <td><?= $ls['tanggapan_rifky'];?></td>
                            <td><?= $ls['status_rifky']; ?></td>
                            <td><?= $ls['nama_petugas_rifky']; ?></td>
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