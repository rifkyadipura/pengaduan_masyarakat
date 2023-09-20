<?php
    session_start();
    require "../../koneksi_rifky.php";
    $nik_rifky = $_SESSION['nik_rifky'];
    $sql = "SELECT  
                tanggapan_rifky.id_tanggapan_rifky,
                tanggapan_rifky.id_pengaduan_rifky,
                masyarakat_rifky.nama_rifky AS nama_masyarakat_rifky,
                masyarakat_rifky.nik_rifky, 
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
            WHERE pengaduan_rifky.nik_rifky='$nik_rifky'AND pengaduan_rifky.status_rifky='selesai'";
    $query = mysqli_query($dbConn, $sql);
?>

<?php
    include '../master_masyarakat/page_rifky.php';
?>

<div class="card shadow-lg">
    <div class="card-header">
        <h5 class="mb-0">DAFTAR TANGGAPAN</h5>
    </div>
    <div class="card-body">
        <p><b>Melihat Tanggapan yang sudah di selesai tanggapi oleh Petugas</b></p>
        <table border="1" cellscpacing="10" cellpadding="" class="table table-striped table-bordered mt-2" style=" text-align: center;">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Tgl Pengaduan</th>
                <th>Tgl Tanggapan</th>
                <th>Status</th>
                <th></th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($query as $p) :  ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $p['nama_masyarakat_rifky'] ?></td>
                    <td><?= $p['nik_rifky']; ?></td>
                    <td><?= $p['tgl_pengaduan_rifky']; ?></td>
                    <td><?= $p['tgl_tanggapan_rifky']; ?></td>
                    <td>
                        <?php if ($p['status_rifky'] == '0') {
                            echo "Baru Masuk";
                        } else {
                            echo $p['status_rifky'];
                        } ?>
                    </td>
                    <td><a href="lihat_tanggapan_pengaduan_selesai_rifky.php?id=<?= $p['id_pengaduan_rifky'] ?>" class="btn btn-primary">Lihat</a></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </table>
    </div>
</div>

<?php
include '../master_masyarakat/foot_rifky.php';
?>