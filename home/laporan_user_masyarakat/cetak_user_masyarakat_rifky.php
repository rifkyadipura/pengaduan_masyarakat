<?php
    require "../../koneksi_rifky.php";
    session_start();
    $sql_report_masyarakat_rifky = "SELECT DISTINCT 
                b.nama_rifky, 
                b.nik_rifky, 
                b.telp_rifky 
            FROM pengaduan_rifky a 
            INNER JOIN masyarakat_rifky b ON (a.nik_rifky = b.nik_rifky) WHERE a.nik_rifky = b.nik_rifky;";
    $query_report_masyarakat_rifky = mysqli_query($dbConn, $sql_report_masyarakat_rifky);
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
            <h3 align="center">Cetak Report Masyarakat</h3>
        </div>
        <div class="card-body">
            <div style="overflow-x:auto;">
                <table border="1" style=" text-align: center;" width="100%">
                    <tr>
                        <th>No</th>
                        <th>Nama Masyarakat</th>
                        <th>Nik</th>
                        <th>No Telp</th>
                    </tr>
                    <?php $i=1; ?>
                    <?php foreach ($query_report_masyarakat_rifky as $rm):?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $rm['nama_rifky']; ?></td>
                            <td><?= $rm['nik_rifky']; ?></td>
                            <td><?= $rm['telp_rifky']; ?></td>
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