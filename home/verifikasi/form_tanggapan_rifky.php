<?php
    require "../../koneksi_rifky.php";
    session_start();

    $id_pengaduan_rifky = $_GET['id'];
    $pengaduan = "SELECT * FROM `pengaduan_rifky` 
                  INNER JOIN masyarakat_rifky ON pengaduan_rifky.nik_rifky=masyarakat_rifky.nik_rifky
                  WHERE pengaduan_rifky.id_pengaduan_rifky='$id_pengaduan_rifky'";
    $query_pengaduan = mysqli_query($dbConn, $pengaduan);
    while ($data = mysqli_fetch_array($query_pengaduan)) {
            $nama_rifky = $data['nama_rifky'];
            $nik_rifky = $data['nik_rifky'];
            $tgl_pengaduan_rifky = $data['tgl_pengaduan_rifky'];
            $isi_laporan_rifky = $data['isi_laporan_rifky'];
            $foto_rifky = $data['foto_rifky'];
            $status_rifky = $data['status_rifky'];
    }
    if (isset($_POST['submit'])) {
        $tgl_tanggapan_rifky = $_POST['tgl_tanggapan_rifky'] = date("Y-m-d");
        $tanggapan_rifky = $_POST['tanggapan_rifky'];
        $id_petugas_rifky = $_SESSION['id_petugas_rifky'];
        $status_rifky = "selesai";
        
        $sql = "INSERT INTO tanggapan_rifky
                VALUES
                ('', '$id_pengaduan_rifky', '$tgl_tanggapan_rifky', '$tanggapan_rifky', '$id_petugas_rifky')";
        $query = mysqli_query($dbConn, $sql);
        if (!$query) {
            die("Gagal Memberikan Tanggapan");
        }
        $sql2 = "UPDATE pengaduan_rifky
                 SET status_rifky = '$status_rifky'
                 WHERE id_pengaduan_rifky = '$id_pengaduan_rifky'";
        $query2 = mysqli_query($dbConn, $sql2);
        if (!$query) {
            die("Gagal Mengubah Status");
        }
        echo "<script>
                    alert('Berhasil Memberikan Tanggapan');
                    document.location.href = 'verifikasi_index_rifky.php';
                </script>";
    }
?>
<?php
    include '../master/page_rifky.php';
?>
    <main class="container">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h5 class="border-bottom pb-2 mb-0">Tanggapan</h5>
                    <form action="" method="post">
                        <table>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="nama_rifky" class="form-label">Nama</label>
                                    <input type="text" name="nama_rifky" id="nama_rifky" class="form-control" value="<?= $nama_rifky ?>" readonly>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="isi_laporan_rifky" class="form-label">Laporan</label>
                                    <textarea name="isi_laporan_rifky" id="isi_laporan_rifky" cols="30" rows="10" class="form-control" readonly><?= $isi_laporan_rifky ?></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="tgl_tanggapan_rifky" class="form-label">Tanggal Tanggapan</label>
                                    <input type="date" name="tgl_tanggapan_rifky" id="tgl_tanggapan_rifky" class="form-control" value="<?php echo date('Y-m-d') ?>" readonly>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="tanggapan_rifky" class="form-label">Tanggapan</label>
                                    <textarea name="tanggapan_rifky" id="tanggapan_rifky" cols="30" rows="10" class="form-control" required></textarea>
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
                <label for="tgl_tanggapan">Tanggal Tanggapan</label>
                <input type="date" name="tgl_tanggapan" id="tgl_tanggapan">
            </tr>
            <tr>
                <td>
                    <label for="tanggapan_rifky">Tanggapan</label>
                </td>
                <td>
                    <textarea name="tanggapan_rifky" id="tanggapan_rifky" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form> -->