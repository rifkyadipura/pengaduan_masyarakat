<?php
    session_start();
    include '../master/page_rifky.php';
?>
<main class="container">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h5 class="border-bottom pb-2 mb-0">Tambah Petugas</h5>
        <form action="" method="post">
            <table>
                <div class="row mt-2">
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <label for="nama_petugas_rifky" class="form-label">Nama</label>
                        <input type="text" name="nama_petugas_rifky" id="nama_petugas_rifky" class="form-control" required>
                    </div>
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <label for="username_rifky" class="form-label">Username</label>
                        <input type="text" name="username_rifky" id="username_rifky" class="form-control" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <label for="password_rifky" class="form-label">Password</label>
                        <input type="password" name="password_rifky" id="password_rifky" class="form-control" required>
                    </div>
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <label for="telp_rifky" class="form-label">No Telp</label>
                        <input type="number" name="telp_rifky" id="telp_rifky" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <label for="level_rifky" class="form-label">Level</label>
                    <select name="level_rifky" id="level_rifky" class="form-select" aria-label="Default select example">
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                    </select>
                </div>

                <div class="mt-2">
                    <a href="registrasi_index_rifky.php" class="btn btn-success">Kembali</a>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </table>
        </form>
    </div>
</main>
<?php
    include '../master/foot_rifky.php';
?>

<?php
    require "../../koneksi_rifky.php";
    if (isset($_POST['submit'])) {
        $nama_petugas_rifky = $_POST['nama_petugas_rifky'];
        $username_rifky = $_POST['username_rifky'];
        $password_rifky = md5($_POST['password_rifky']);
        $telp_rifky = $_POST['telp_rifky'];
        $level_rifky = $_POST['level_rifky'];

        $sql = "INSERT INTO petugas_rifky
                    VALUES
                    ('', '$nama_petugas_rifky', '$username_rifky', '$password_rifky', '$telp_rifky', '$level_rifky')";
        // var_dump($sql);
        // die();
        $query = mysqli_query($dbConn, $sql);
        if (!$query) {
            die("Gagal menambahkan Petugas");
        }
        echo "<script>
                        alert('Berhasil Menambahkan Petugas');
                        document.location.href = 'registrasi_index_rifky.php';
                    </script>";
    }
?>


<!-- <h3>Tambah Petugas</h3>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="nama_petugas_rifky">Nama</label>
                    <input type="text" name="nama_petugas_rifky" id="nama_petugas_rifky">
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
                    <label for="telp_rifky">Telephone</label>
                    <input type="number" name="telp_rifky" id="telp_rifky">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="level_rifky">level</label>
                    <select name="level_rifky" id="level_rifky">
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form> -->