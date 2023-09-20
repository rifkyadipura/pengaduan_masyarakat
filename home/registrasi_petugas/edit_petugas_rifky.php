<?php
    require "../../koneksi_rifky.php";
    session_start();
    $id_petugas_rifky = $_GET['id'];
    $sql = mysqli_query($dbConn, "SELECT * FROM petugas_rifky WHERE id_petugas_rifky='$id_petugas_rifky'");

    while ($data = mysqli_fetch_array($sql)) {
        $nama_petugas_rifky = $data['nama_petugas_rifky'];
        $username_rifky = $data['username_rifky'];
        $password_rifky = $data['password_rifky'];
        $telp_rifky = $data['telp_rifky'];
        $level_rifky = $data['level_rifky'];
    }

    if (isset($_POST['update'])) {
        $nama_petugas_rifky = $_POST['nama_petugas_rifky'];
        $username_rifky = $_POST['username_rifky'];
        $password_rifky = md5($_POST['password_rifky']);
        $telp_rifky = $_POST['telp_rifky'];
        $level_rifky = $_POST['level_rifky'];

        $sql_update = "UPDATE
                        petugas_rifky
                       SET
                        nama_petugas_rifky = '$nama_petugas_rifky',
                        username_rifky     = '$username_rifky',
                        password_rifky     = '$password_rifky',
                        telp_rifky         = '$telp_rifky',
                        level_rifky        = '$level_rifky'
                       WHERE
                        id_petugas_rifky = '$id_petugas_rifky'";
        // var_dump($sql_update);
        // die();
        $return = mysqli_query($dbConn, $sql_update);
        if (!$return) {
            die("Gagal Update Data!");
        }echo "<script>
                    alert('Berhasil Update Data');
                    document.location.href = 'registrasi_index_rifky.php';
                </script>";
    }
?>
<?php
    include '../master/page_rifky.php';
?>
    <main class="container">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h5 class="border-bottom pb-2 mb-0">Edit Petugas</h5>
                    <form action="" method="post">
                        <table>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="nama_petugas_rifky" class="form-label">Nama</label>
                                    <input type="text" name="nama_petugas_rifky" id="nama_petugas_rifky" class="form-control" value="<?= $nama_petugas_rifky ?>">
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="username_rifky" class="form-label">Username</label>
                                    <input type="text" name="username_rifky" id="username_rifky" class="form-control" value="<?= $username_rifky ?>">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="password_rifky" class="form-label">Password</label>
                                    <input type="password" name="password_rifky" id="password_rifky" class="form-control" value="<?= $password_rifky ?>">
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="telp_rifky" class="form-label">No Telp</label>
                                    <input type="number" name="telp_rifky" id="telp_rifky" class="form-control" value="<?= $telp_rifky ?>">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-12">
                                <label for="level_rifky" class="form-label">Level</label>
                                    <select name="level_rifky" id="level_rifky" class="form-select" aria-label="Default select example">
                                        <option value="admin"<?php if ("$level_rifky" == 'admin') { echo "selected"; } ?>>Admin</option>
                                        <option value="petugas"<?php if ("$level_rifky" == 'petugas') { echo "selected";} ?>>Petugas</option>
                                    </select>
                            </div>

                            <div class="mt-2">
                                <a href="registrasi_index_rifky.php" class="btn btn-success">Kembali</a>
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </div>
                        </table>
                    </form>
            </div>
    </main>
    <?php
        include '../master/foot_rifky.php';
    ?>

<!-- <h3>Edit Petugas</h3>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <label for="nama_petugas_rifky">Nama</label>
                        <input type="text" name="nama_petugas_rifky" id="nama_petugas_rifky" value="<?= $nama_petugas_rifky ?>">
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
                        <label for="telp_rifky">Telephone</label>
                        <input type="number" name="telp_rifky" id="telp_rifky" value="<?= $telp_rifky ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="level_rifky">level</label>
                        <select name="level_rifky" id="level_rifky">
                            <option value="admin"<?php if ("$level_rifky" == 'admin') { echo "selected"; } ?>>Admin</option>
                            <option value="petugas"<?php if ("$level_rifky" == 'petugas') { echo "selected";} ?>>Petugas</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="update">Update</button>
                    </td>
                </tr>
            </table>
        </form> -->