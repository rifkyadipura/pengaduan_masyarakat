<?php
    require "../../koneksi_rifky.php";
    session_start();

    $id_pengaduan_rifky = $_GET['id'];
    // var_dump($id_pengaduan_rifky);
    // die();
    $sql = "SELECT * FROM `pengaduan_rifky` 
            INNER JOIN masyarakat_rifky ON pengaduan_rifky.nik_rifky=masyarakat_rifky.nik_rifky
            WHERE pengaduan_rifky.id_pengaduan_rifky='$id_pengaduan_rifky'";
    $query = mysqli_query($dbConn, $sql);
    while ($data = mysqli_fetch_array($query)) {
        $nama_rifky = $data['nama_rifky'];
        $nik_rifky = $data['nik_rifky'];
        $tgl_pengaduan_rifky = $data['tgl_pengaduan_rifky'];
        $isi_laporan_rifky = $data['isi_laporan_rifky'];
        $foto_rifky = $data['foto_rifky'];
    }
    if (isset($_POST['submit'])) {
        $status_rifky = "proses";

        $sql2 = "UPDATE  pengaduan_rifky  
                 SET  status_rifky = '$status_rifky'   
                 WHERE   id_pengaduan_rifky = '$id_pengaduan_rifky'";
        $query = mysqli_query($dbConn, $sql2);
        if (!$query) {
            die("Verifikasi Gagal");
        }echo "<script>
                    alert('Status Sedang Di Proses');
                    document.location.href = 'verifikasi_index_rifky.php';
                </script>";
    }  
?>
<?php
    include '../master/page_rifky.php';
?>
    <main class="container">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h5 class="border-bottom pb-2 mb-0">Verifikasi</h5>
                    <form action="" method="post">
                        <table>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="nama_rifky" class="form-label">Nama</label>
                                    <input type="text" name="nama_rifky" id="nama_rifky" class="form-control" value="<?= $nama_rifky ?>" readonly>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="tgl_pengaduan_rifky" class="form-label">Tgl Pengaduan</label>
                                    <input type="date" name="tgl_pengaduan" id="tgl_pengaduan" class="form-control" value="<?= $tgl_pengaduan_rifky ?>" readonly>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="isi_laporan_rifky" class="form-label">Laporan</label>
                                    <textarea name="isi_laporan_rifky" id="isi_laporan_rifky" cols="30" rows="10" class="form-control" readonly><?= $isi_laporan_rifky ?></textarea>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="foto_rifky" class="form-label">Foto</label>
                                    <a href="../foto_pengaduan/<?= $foto_rifky;?>" target="_blank" class="d-block">
                                        <img src="../foto_pengaduan/<?= $foto_rifky;?>" alt="" style="width: 100px; height:100px;" class="form-control">
                                    </a>
                                </div>
                            </div>

                            <div class="mt-2">
                                <a href="verifikasi_index_rifky.php" class="btn btn-success">Kembali</a>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </table>
                    </form>
            </div>
    </main>
<?php
    include '../master/foot_rifky.php';
?>


<!-- <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="nama_rifky">Nama</label>
                    <input type="text" name="nama_rifky" id="nama_rifky" value="<?= $nama_rifky ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tgl_pengaduan_rifky">Tgl Pengaduan</label>
                    <input type="date" name="tgl_pengaduan" id="tgl_pengaduan" value="<?= $tgl_pengaduan_rifky ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="isi_laporan_rifky">Laporan</label>
                    <textarea name="isi_laporan_rifky" id="isi_laporan_rifky" cols="30" rows="10" readonly><?= $isi_laporan_rifky ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="foto_rifky">Bukti</label>
                    <img src="../foto_pengaduan/<?= $foto_rifky;?>" alt="" style="width: 100px; height:100px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="status_rifky">Status</label>
                    <select name="status_rifky" id="status_rifky">
                        <option value="0">0</option>
                        <option value="proses">Proses</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="verifikasi_index_rifky.php">Kembali</a>
                    <button type="submit" name="submit">Submit</button>
                </td>
                </tr>
            </table>
    </form> -->