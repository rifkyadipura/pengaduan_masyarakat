<?php
    require "../../koneksi_rifky.php";
    session_start();
    $id_pengaduan_rifky = $_GET['id'];
    $sql = "SELECT  
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
                WHERE tanggapan_rifky.id_pengaduan_rifky = '$id_pengaduan_rifky'";
    $read_tanggapan_rifky = mysqli_query($dbConn, $sql);
    while ($data = mysqli_fetch_array($read_tanggapan_rifky)) {
        $id_pengaduan_rifky = $data['id_pengaduan_rifky'];
        $nama_masyarakat_rifky = $data['nama_masyarakat_rifky'];
        $tgl_pengaduan_rifky = $data['tgl_pengaduan_rifky'];
        $tgl_tanggapan_rifky = $data['tgl_tanggapan_rifky'];
        $isi_laporan_rifky = $data['isi_laporan_rifky'];
        $foto_rifky = $data['foto_rifky'];
        $tanggapan_rifky = $data['tanggapan_rifky'];
        // var_dump($foto_rifky);
        // die();
        $status_rifky = $data['status_rifky'];
        $nama_petugas_rifky = $data['nama_petugas_rifky'];
    }
?>
<?php include "../master_masyarakat/page_rifky.php" ?>
<main class="container">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h5 class="border-bottom pb-2 mb-0">Lihat Tanggapan</h5>
        <table>
            <div class="row mt-2">
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <label for="nama_masyarakat_rifky" class="form-label"><b>Nama Mayarakat</b></label>
                    <input type="text" name="nama_masyarakat_rifky" id="nama_masyarakat_rifky" class="form-control" value="<?= $nama_masyarakat_rifky ?>" readonly>
                </div>
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <label for="tgl_pengaduan_rifky" class="form-label"><b>Tgl Pengaduan</b></label>
                    <input type="date" name="tgl_pengaduan_rifky" id="tgl_pengaduan_rifky" class="form-control" value="<?= $tgl_pengaduan_rifky ?>" readonly>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <label for="tgl_tanggapan_rifky" class="form-label"><b>Tanggal Tanggapan</b></label>
                    <input type="date" name="tgl_tanggapan_rifky" id="tgl_tanggapan_rifky" class="form-control" value="<?= $tgl_tanggapan_rifky ?>" readonly>
                </div>
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <label for="foto_rifky" class="form-label"><b>Foto</b></label>
                    <br>
                    <a href="../foto_pengaduan/<?= $foto_rifky; ?>" target="_blank" class="d-block">
                        <img src="../foto_pengaduan/<?= $foto_rifky; ?>" alt="" style="width: 250px; height:250px;">
                    </a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <label for="isi_laporan_rifky" class="form-label"><b>Isi Laporan</b></label>
                    <textarea name="isi_laporan_rifky" id="isi_laporan_rifky" class="form-control" cols="30" rows="5" readonly><?= $isi_laporan_rifky ?></textarea>
                </div>
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <label for="tanggapan_rifky" class="form-label"><b>Tanggapan</b></label>
                    <textarea name="tanggapan_rifky" id="tanggapan_rifky" class="form-control" cols="30" rows="5" readonly><?= $tanggapan_rifky ?></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <label for="status_rifky" class="form-label"><b>Status</b></label>
                    <input type="text" name="status_rifky" id="status_rifky" class="form-control" value="<?= $status_rifky ?>" readonly>
                </div>
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <label for="nama_petugas_rifky" class="form-label"><b>Nama Petugas</b></label>
                    <input type="text" name="nama_petugas_rifky" id="nama_petugas_rifky" class="form-control" value="<?= $nama_petugas_rifky ?>" readonly>
                </div>
            </div>
            <div class="mt-2">
                <a href="daftar_tanggapan_pengaduan_selesai_rifky.php" class="btn btn-success">Kembali</a>
            </div>
        </table>
    </div>
</main>
<?php include "../master_masyarakat/foot_rifky.php" ?>