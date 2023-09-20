<?php
    require "../../koneksi_rifky.php";
    session_start();
?>
<?php
    include '../master/page_rifky.php';
?>
    <main class="container">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h5 class="border-bottom pb-2 mb-0">Tambah Masyarakat</h5>
                    <form action="proses_tambah_masyarakat_rifky.php" method="post">
                        <table>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="nik_rifky" class="form-label">NIK</label>
                                    <input type="number" name="nik_rifky" id="nik_rifky" class="form-control" required>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="nama_rifky" class="form-label">Nama</label>
                                    <input type="text" name="nama_rifky" id="nama_rifky" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="username_rifky" class="form-label">Username</label>
                                    <input type="text" name="username_rifky" id="username_rifky" class="form-control" required>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="password_rifky" class="form-label">Password</label>
                                    <input type="password" name="password_rifky" id="password_rifky" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="telp_rifky" class="form-label">No Telp</label>
                                    <input type="number" name="telp_rifky" id="telp_rifky" class="form-control" required>
                                </div>
                            </div>

                            <div class="mt-2">
                                <a href="registrasi_index_masyarakat_rifky.php" class="btn btn-success">Kembali</a>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </table>
                    </form>
            </div>
    </main>
<?php
    include '../master/foot_rifky.php';
?>

<!-- <form action="proses_tambah_masyarakat_rifky.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="nik_rifky">NIK</label>
                    <input type="number" name="nik_rifky" id="nik_rifky">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama_rifky">Nama</label>
                    <input type="text" name="nama_rifky" id="nama_rifky">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="username_rifky">Username</label>
                    <input type="text" name="username_rifky" id="username_rifky">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password_rifky">Password</label>
                    <input type="password" name="password_rifky" id="password_rifky">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="telp_rifky">No Telp</label>
                    <input type="number" name="telp_rifky" id="telp_rifky">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form> -->