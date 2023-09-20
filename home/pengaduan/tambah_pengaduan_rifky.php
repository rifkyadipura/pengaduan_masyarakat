<?php
    require "../../koneksi_rifky.php";
    session_start();
    include '../master_masyarakat/page_rifky.php';
?>
    <main class="container">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h5 class="border-bottom pb-2 mb-0">Tambah Pengaduan</h5>
                    <form action="proses_tambah_pengaduan_rifky.php" method="post" enctype="multipart/form-data">
                        <table>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="nama_rifky" class=" col-form-label">Nama</label>
                                    <input type="text" name="nama_rifky" id="nama_rifky" class="form-control" value="<?php echo $_SESSION['nama_rifky']; ?>" readonly>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="tgl_pengaduan_rifky" class="col-form-label">Tgl Pengaduan</label>
                                    <input type="date" name="tgl_pengaduan" id="tgl_pengaduan" class="form-control" value="<?php echo date('Y-m-d') ?>" readonly>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="isi_laporan_rifky" class="col-form-label">Laporan</label>
                                    <textarea name="isi_laporan_rifky" id="isi_laporan_rifky" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="foto_rifky" class="col-form-label">Bukti</label>
                                    <input type="file" name="foto_rifky" id="foto_rifky" class="form-control">
                                </div>
                            </div>

                            <div class="mt-2">
                                <a href="pengaduan_index_rifky.php" class="btn btn-success">Kembali</a>
                                <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Yakin Pengaduan sudah benar? jika sudah silahkan klik ok')">Submit</button>
                            </div>
                        </table>
                    </form>
            </div>
    </main>

<?php
    include '../master_masyarakat/foot_rifky.php';
?>


<!-- <main class="container">
    <div class="bg-light p-5 rounded">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Tambah Pengaduan</h5>
            </div>
            <div class="card-body border-top">
                <div class="row mb-3">
                    <div class="col-lg-4 offset-lg-4">
                        <form action="proses_tambah_pengaduan_rifky.php" method="post" enctype="multipart/form-data">
                            <table>
                                <div class="row mb-3">
                                    <label for="nama_rifky" class=" col-form-label">Nama</label>
                                    <input type="text" name="nama_rifky" id="nama_rifky" class="form-control" value="<?php echo $_SESSION['nama_rifky']; ?>" readonly>
                                </div>
                                <div class="row mb-3">
                                        <label for="tgl_pengaduan_rifky" class="col-form-label">Tgl Pengaduan</label>
                                        <input type="date" name="tgl_pengaduan" id="tgl_pengaduan" class="form-control">
                                        <input type="datetime" name="" id="">
                                        <input type="datetime-local" name="" id="">
                                </div>
                                <div class="row mb-3">
                                        <label for="isi_laporan_rifky" class="col-form-label">Laporan</label>
                                        <textarea name="isi_laporan_rifky" id="isi_laporan_rifky" class="form-control" cols="30" rows="10"></textarea>
                                        <input type="text" name="isi_laporan_rifky" id="isi_laporan_rifky" class="form-control">
                                </div>
                                <div class="row mb-3">
                                        <label for="foto_rifky" class="col-form-label">Bukti</label>
                                        <input type="file" name="foto_rifky" id="foto_rifky" class="form-control">
                                </div>
                                <div class="row mb-3">
                                        <button type="submit" name="submit">Submit</button>
                                </div>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> -->