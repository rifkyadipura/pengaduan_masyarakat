<?php
    require "../../koneksi_rifky.php";
    session_start();

    $sql = "SELECT * FROM `pengaduan_rifky` 
            INNER JOIN masyarakat_rifky ON pengaduan_rifky.nik_rifky=masyarakat_rifky.nik_rifky
            WHERE pengaduan_rifky.status_rifky='0' OR pengaduan_rifky.status_rifky='proses'";
    $query = mysqli_query($dbConn, $sql);
?>
<?php
    include '../master/page_rifky.php';
?>
<div class="card shadow-lg">
        <div class="card-header">
            <h5 class="mb-0">PENGADUAN MASYARAKAT</h5>
        </div>
        <div class="card-body">
            <div style="overflow-x:auto;">
                <table class="table table-striped table-bordered mt-2" style=" text-align: center;">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tgl Pengaduan</th>
                        <th>Status</th>
                        <th>Verifikasi</th>
                        <th>Tanggapan</th>
                    </tr>
                    <?php $i=1; ?>
                    <?php foreach ($query as $v):?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $v['nama_rifky']; ?></td>
                            <td><?= $v['tgl_pengaduan_rifky']; ?></td>
                            <td>
                                <?php 
                                    if ($v['status_rifky'] == '0') {
                                        echo "Baru Masuk";
                                    }else {
                                        echo $v['status_rifky'];
                                    }
                                ?>
                            </td>
                            <td><a href="form_verifikasi_rifky.php?id=<?= $v['id_pengaduan_rifky']; ?>" class="btn btn-info">verifikasi</a></td>
                            <td><a href="form_tanggapan_rifky.php?id=<?= $v['id_pengaduan_rifky']; ?>" class="btn btn-success <?php if ($v['status_rifky'] == '0') { echo "disabled"; } ?>">Tanggapan</a></td>
                        </tr>
                    <?php $i++; ?>
                    <?php endforeach?>
                </table>
            </div>
            <a href="../index_home_rifky.php">Kembali</a>
        </div>
<?php
    include '../master/foot_rifky.php';
?>

<!-- <table border="1" cellscpacing="10" cellpadding="">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tgl Pengaduan</th>
            <th>Status</th>
            <th>Verifikasi</th>
            <th>Tanggapan</th>
        </tr>
        <?php $i=1; ?>
        <?php foreach ($query as $v):?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $v['nama_rifky']; ?></td>
                <td><?= $v['tgl_pengaduan_rifky']; ?></td>
                <td><?= $v['status_rifky']; ?></td>
                <td><a href="form_verifikasi_rifky.php?id=<?= $v['id_pengaduan_rifky']; ?>">verifikasi</a></td>
                <td><a href="form_tanggapan_rifky.php?id=<?= $v['id_pengaduan_rifky']; ?>">Tanggapan</a></td>
            </tr>
        <?php $i++; ?>
        <?php endforeach?>
    </table> -->