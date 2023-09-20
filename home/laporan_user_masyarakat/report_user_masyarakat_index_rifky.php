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
<?php
    include "../master/page_rifky.php";
?>
    <div class="card shadow-lg">
        <div class="card-header">
            <h5 class="mb-0">REPORT MASYARAKAT</h5>
        </div>
        <div class="card-body">
            <div style="overflow-x:auto;">
                <a href="cetak_user_masyarakat_rifky.php" class="btn btn-success" target="_blank">Cetak</a>
                <table class="table table-striped table-bordered mt-2" style=" text-align: center;">
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
        <a href="../index_home_rifky.php">Kembali</a>
    </div>
<?php
    include "../master/foot_rifky.php";
?>