<?php
    require "../../koneksi_rifky.php";
    session_start();

    if (isset($_POST['cari'])) {
        $cari_status_rifky = $_POST['status_rifky'];
        if ($cari_status_rifky == '0') {
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
        }elseif ($cari_status_rifky == 'proses') {
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
        }elseif ($cari_status_rifky == 'selesai') {
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
        }
    }
?>
<?php
    include '../master/page_rifky.php';
?>
<div class="card shadow-lg">
    <div class="card-header">
        <h5 class="mb-0">LAPORAN</h5>
    </div>
    <form action="" method="post">
        <div class="row mt-2">
            <div class="col-md-2 col-sm-4 col-xs-12 ms-4">
                    <select name="status_rifky" id="status_rifky" class="form-select" aria-label="Default select example">
                        <option selected>Cari status</option>
                        <option value="0">Baru Masuk</option>
                        <option value="proses">Proses</option>
                        <option value="selesai">Selesai</option>
                    </select>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12 ms-4">
                <button type="cari" name="cari" class="btn btn-primary">Cari</button>
            </div>
        </div>
    </form>
    <div class="card-body">
        <div style="overflow-x:auto;">

            <!-- status yang baru masuk -->
            <?php  if (isset($_POST['cari'])) { ?>
                <?php if ($cari_status_rifky == '0') { ?>
                    <a href="cetak_baru_masuk_rifky.php" class="btn btn-success" target="_blank">Cetak</a>
                    <table class="table table-striped table-bordered mt-2" style=" text-align: center;">
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
                <?php } ?>
            <?php } ?>

            <!-- status yang proses -->
            <?php  if (isset($_POST['cari'])) { ?>
                <?php if ($cari_status_rifky == 'proses') { ?>
                    <a href="cetak_proses_rifky.php" class="btn btn-success" target="_blank">Cetak</a>
                        <table class="table table-striped table-bordered mt-2" style=" text-align: center;">
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
                <?php } ?>
            <?php } ?>

            <!-- status yang selesai -->
            <?php  if (isset($_POST['cari'])) { ?>
                <?php if ($cari_status_rifky == 'selesai') { ?>
                    <a href="cetak_selesai_rifky.php" class="btn btn-success" target="_blank">Cetak</a>
                        <table class="table table-striped table-bordered mt-2" style=" text-align: center;">
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
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
<?php
    include '../master/foot_rifky.php';
?>
<!-- 
<div class="card shadow-lg">
        <div class="card-header">
            <center>
                <img class="mb-4" src="../../assets/brand/logo.png" alt="" width="72" height="72">
            </center>
            <h3 align="center">Cetak Laporan Pengaduan</h3>
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
                    <?php foreach ($laporan_rifky as $lr):?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $lr['nama_masyarakat_rifky']; ?></td>
                            <td><?= $lr['tgl_pengaduan_rifky']; ?></td>
                            <td><?= $lr['tgl_tanggapan_rifky']; ?></td>
                            <td><?= $lr['isi_laporan_rifky'] ?></td>
                            <td><img src="../foto_pengaduan/<?= $lr['foto_rifky'] ?>" alt="" style="width:70px; height:50px;"></td>
                            <td><?= $lr['tanggapan_rifky'];?></td>
                            <td><?= $lr['status_rifky']; ?></td>
                            <td><?= $lr['nama_petugas_rifky']; ?></td>
                        </tr>
                    <?php $i++; ?>
                    <?php endforeach?>
                </table>
        </div>
    </div> -->
    <!-- <script>
        window.print();
    </script> -->
</body>
</html>