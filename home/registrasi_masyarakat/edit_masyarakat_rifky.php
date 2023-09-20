<?php
    require "../../koneksi_rifky.php";
    session_start();
    $nik = $_GET['nik'];
    // var_dump($nik);
    // die();
    $sql = mysqli_query($dbConn, "SELECT * FROM masyarakat_rifky WHERE nik_rifky=$nik");
    while ( $data = mysqli_fetch_array($sql) ) {
        $nik_rifky = $data['nik_rifky'];
        $nama_rifky = $data['nama_rifky'];
        $username_rifky = $data['username_rifky'];
        $password_rifky = $data['password_rifky'];
        $telp_rifky = $data['telp_rifky'];
    }

    if (isset($_POST['update'])) {
        $nik_rifky = $_POST['nik_rifky'];
        $nama_rifky = $_POST['nama_rifky'];
        $username_rifky = $_POST['username_rifky'];
        $password_rifky =   MD5($_POST['password_rifky']);
        $telp_rifky = $_POST['telp_rifky'];

        $sql_update = "UPDATE
                        masyarakat_rifky
                       SET
                        nama_rifky = '$nama_rifky',
                        username_rifky = '$username_rifky',
                        password_rifky = '$password_rifky',
                        telp_rifky = '$telp_rifky'
                       WHERE
                        nik_rifky = $nik_rifky";
        $update = mysqli_query($dbConn, $sql_update);
        if (!$update) {
            die("Gagal Memambahkan Data!!!");
        }echo "<script>
                    alert('Data Berhasil Di Update');
                    document.location.href = 'registrasi_index_masyarakat_rifky.php';
                </script>";
    }
?>
<?php
    include '../master/page_rifky.php';
?>
    <main class="container">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h5 class="border-bottom pb-2 mb-0">Edit Masyarakat</h5>
                    <form action="" method="post">
                        <table>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="nik_rifky" class="form-label">NIK</label>
                                    <input type="number" name="nik_rifky" id="nik_rifky" class="form-control" value="<?= $nik_rifky ?>" readonly>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="nama_rifky" class="form-label">Nama</label>
                                    <input type="text" name="nama_rifky" id="nama_rifky" class="form-control" value="<?= $nama_rifky ?>">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="username_rifky" class="form-label">Username</label>
                                    <input type="text" name="username_rifky" id="username_rifky" class="form-control" value="<?= $username_rifky ?>">
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="password_rifky" class="form-label">Password</label>
                                    <input type="password" name="password_rifky" id="password_rifky" class="form-control" value="<?= $password_rifky ?>">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="telp_rifky" class="form-label">No Telp</label>
                                    <input type="number" name="telp_rifky" id="telp_rifky" class="form-control" value="<?= $telp_rifky ?>">
                                </div>
                            </div>

                            <div class="mt-2">
                                <a href="registrasi_index_masyarakat_rifky.php" class="btn btn-success">Kembali</a>
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </div>
                        </table>
                    </form>
            </div>
    </main>
<?php
    include '../master/foot_rifky.php';
?>
<!-- 
<form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="nik_rifky">NIK</label>
                    <input type="number" name="nik_rifky" id="nik_rifky" value="<?= $nik_rifky ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama_rifky">Nama</label>
                    <input type="text" name="nama_rifky" id="nama_rifky" value="<?= $nama_rifky ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="username_rifky">Username</label>
                    <input type="text" name="username_rifky" id="username_rifky" value="<?= $username_rifky ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password_rifky">Password</label>
                    <input type="password" name="password_rifky" id="password_rifky" value="<?= $password_rifky ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="telp_rifky">No Telp</label>
                    <input type="number" name="telp_rifky" id="telp_rifky" value="<?= $telp_rifky ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <a href="registrasi_index_masyarakat_rifky.php">Kembali</a>
                    <button type="submit" name="update">Update</button>
                </td>
            </tr>
        </table>
    </form> -->