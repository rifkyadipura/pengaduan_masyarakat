<?php
    session_start();
    require "../../koneksi_rifky.php";
    $nik_rifky = $_SESSION['nik_rifky'];
    $sql = "SELECT * FROM `pengaduan_rifky` 
            INNER JOIN masyarakat_rifky ON pengaduan_rifky.nik_rifky=masyarakat_rifky.nik_rifky
            WHERE pengaduan_rifky.nik_rifky='$nik_rifky'
            AND pengaduan_rifky.status_rifky='proses'";
    $query = mysqli_query($dbConn, $sql);
?>

<?php
    include '../master_masyarakat/page_rifky.php';
?>

<div class="card shadow-lg">
    <div class="card-header">
        <h5 class="mb-0">PENGADUAN STATUS PROSES</h5>
    </div>
    <div class="card-body">
        <table border="1" cellscpacing="10" cellpadding="" class="table table-striped table-bordered mt-2" style=" text-align: center;">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Tgl Pengaduan</th>
                <th>Isi Laporan</th>
                <th>Foto</th>
                <th>Status</th>
                <!-- <th></th> -->
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($query as $p) :  ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $p['nama_rifky'] ?></td>
                    <td><?= $p['nik_rifky']; ?></td>
                    <td><?= $p['tgl_pengaduan_rifky']; ?></td>
                    <td><?= $p['isi_laporan_rifky']; ?></td>
                    <td>
                        <a href="../foto_pengaduan/<?= $p['foto_rifky']; ?>" target="_blank" class="d-block">
                            <img src="../foto_pengaduan/<?= $p['foto_rifky']; ?>" alt="" style="width: 70px; height:50px;">
                        </a>
                    </td>
                    <td>
                        <?php if ($p['status_rifky'] == '0') {
                            echo "Baru Masuk";
                        } else {
                            echo $p['status_rifky'];
                        } ?>
                    </td>
                    <!-- <td><a href="hapus_pengaduan_rifky.php?id=<?= $p['id_pengaduan_rifky'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus Pengaduan')">Hapus</a></td> -->
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </table>
    </div>
</div>

<?php
include '../master_masyarakat/foot_rifky.php';
?>