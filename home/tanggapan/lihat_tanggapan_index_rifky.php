<?php
    require "../../koneksi_rifky.php";
    session_start();
    $sql = "SELECT  
                tanggapan_rifky.id_tanggapan_rifky,
                tanggapan_rifky.id_pengaduan_rifky,
                masyarakat_rifky.nama_rifky AS nama_masyarakat_rifky,
                pengaduan_rifky.tgl_pengaduan_rifky,
                tanggapan_rifky.tgl_tanggapan_rifky,
                pengaduan_rifky.isi_laporan_rifky,
                pengaduan_rifky.foto_rifky,
                pengaduan_rifky.status_rifky,
                tanggapan_rifky.id_petugas_rifky,
                petugas_rifky.nama_petugas_rifky
            FROM `tanggapan_rifky`
            INNER JOIN pengaduan_rifky ON tanggapan_rifky.id_pengaduan_rifky = pengaduan_rifky.id_pengaduan_rifky
            INNER JOIN masyarakat_rifky ON pengaduan_rifky.nik_rifky = masyarakat_rifky.nik_rifky
            INNER JOIN petugas_rifky ON tanggapan_rifky.id_petugas_rifky = petugas_rifky.id_petugas_rifky
            WHERE pengaduan_rifky.status_rifky = 'selesai'";
    $tanggapan_rifky = mysqli_query($dbConn, $sql);
?>
<?php
    include "../master/page_rifky.php";
?>
    <div class="card shadow-lg">
        <div class="card-header">
            <h5 class="mb-0">LIHAT TANGGAPAN</h5>
        </div>
        <div class="card-body">
            <div style="overflow-x:auto;">
                <table class="table table-striped table-bordered mt-2" style=" text-align: center;">
                    <tr>
                        <th>No</th>
                        <th>Nama Masyarakat</th>
                        <th>Tgl Pengaduan</th>
                        <th>Tgl Tanggapan</th>
                        <th>Status</th>
                        <th>Petugas</th>
                        <th>Read</th>
                    </tr>
                    <?php $i=1; ?>
                    <?php foreach ($tanggapan_rifky as $tr):?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $tr['nama_masyarakat_rifky']; ?></td>
                            <td><?= $tr['tgl_pengaduan_rifky']; ?></td>
                            <td><?= $tr['tgl_tanggapan_rifky']; ?></td>
                            <td><?= $tr['status_rifky']; ?></td>
                            <td><?= $tr['nama_petugas_rifky']; ?></td>
                            <td>
                                <a href="read_tanggapan_rifky.php?id=<?= $tr['id_tanggapan_rifky']; ?>" class="btn btn-primary">Lihat</a>
                                <!-- <a href="edit_tanggapan_rifky.php?id=<?= $tr['id_tanggapan_rifky']; ?>" class="btn btn-success">Edit</a> -->
                            </td>
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