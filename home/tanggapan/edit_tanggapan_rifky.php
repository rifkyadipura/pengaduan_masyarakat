<?php
    require "../../koneksi_rifky.php";
    session_start();

    $id_tanggapan_rifky = $_GET['id'];
    $sql = "SELECT
                tanggapan_rifky.id_tanggapan_rifky,
                tanggapan_rifky.id_pengaduan_rifky,  
                masyarakat_rifky.nama_rifky AS nama_masyarakat_rifky,
                pengaduan_rifky.tgl_pengaduan_rifky,
                tanggapan_rifky.tgl_tanggapan_rifky,
                pengaduan_rifky.isi_laporan_rifky,
                tanggapan_rifky.tanggapan_rifky
            FROM `tanggapan_rifky`
            INNER JOIN pengaduan_rifky ON tanggapan_rifky.id_pengaduan_rifky = pengaduan_rifky.id_pengaduan_rifky
            INNER JOIN masyarakat_rifky ON pengaduan_rifky.nik_rifky = masyarakat_rifky.nik_rifky
            WHERE id_tanggapan_rifky = '$id_tanggapan_rifky'";
    $edit_tanggapan_rifky = mysqli_query($dbConn, $sql);
    while ($data = mysqli_fetch_array($edit_tanggapan_rifky)) {
        $id_pengaduan_rifky = $data['id_pengaduan_rifky'];
        $nama_masyarakat_rifky = $data['nama_masyarakat_rifky'];
        $tgl_pengaduan_rifky = $data['tgl_pengaduan_rifky'];
        $tgl_tanggapan_rifky = $data['tgl_tanggapan_rifky'];
        $isi_laporan_rifky = $data['isi_laporan_rifky'];
        $tanggapan_rifky = $data['tanggapan_rifky'];
    }
    if (isset($_POST['update'])) {
        $tanggapan_rifky_update = $_POST['tanggapan_rifky'];
        $id_petugas_rifky = $_SESSION['id_petugas_rifky'];
        $sql = "UPDATE 
                tanggapan_rifky
                SET
                tanggapan_rifky = '$tanggapan_rifky_update',
                id_petugas_rifky = '$id_petugas_rifky'
                WHERE id_tanggapan_rifky = '$id_tanggapan_rifky'";
        $update_tanggapan_rifky = mysqli_query($dbConn, $sql);
        if (!$update_tanggapan_rifky) {
            die("Gagal Update Tanggapan");
        }
        echo "<script>
                alert('Tanggapan Berhasil Di Perbarui');
                document.location.href = 'lihat_tanggapan_index_rifky.php';
             </script>";
    }
?>
<?php include "../master/page_rifky.php" ?>
    <main class="container">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h5 class="border-bottom pb-2 mb-0">Edit Tanggapan</h5>
                    <form action="" method="post">
                        <table>
                        <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="nama_masyarakat_rifky" class="form-label">Nama Masyarakat</label>
                                    <input type="text" name="nama_masyarakat_rifky" id="nama_masyarakat_rifky" class="form-control" value="<?= $nama_masyarakat_rifky ?>" readonly>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                <label for="tgl_pengaduan_rifky" class="form-label">Tanggal Pengaduan</label>
                                    <input type="date" name="tgl_pengaduan_rifky" id="tgl_pengaduan_rifky" class="form-control" value="<?= $tgl_pengaduan_rifky ?>" readonly>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="tgl_tanggapan_rifky" class="form-label">Tanggal Tanggapan</label>
                                    <input type="date" name="tgl_tanggapan_rifky" id="tgl_tanggapan_rifky" class="form-control" value="<?= $tgl_tanggapan_rifky ?>" readonly>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="isi_laporan_rifky" class="form-label">Isi Laporan</label>
                                    <textarea name="isi_laporan_rifky" id="isi_laporan_rifky" cols="30" rows="3" class="form-control" readonly><?= $isi_laporan_rifky ?></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="tanggapan_rifky" class="form-label">Tanggapan</label>
                                    <textarea name="tanggapan_rifky" id="tanggapan_rifky" cols="30" rows="5" class="form-control"><?= $tanggapan_rifky ?></textarea>
                                </div>
                            </div>

                            <div class="mt-2">
                                <a href="lihat_tanggapan_index_rifky.php" class="btn btn-success">Kembali</a>
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </div>
                        </table>
                    </form>
            </div>
    </main>
    
<?php include "../master/foot_rifky.php" ?>