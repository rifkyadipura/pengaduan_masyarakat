<?php
    require "../../koneksi_rifky.php";
    session_start();
    $petugas = "SELECT * FROM petugas_rifky";
    $query = mysqli_query($dbConn, $petugas);
?>
<?php
    include '../master/page_rifky.php';
?>
<div class="card shadow-lg">
    <div class="card-header">
        <h5 class="mb-0">REGISTRASI PETUGAS</h5>
    </div>
    <div class="card-body">
        <a href="tambah_petugas_rifky.php" class="btn btn-primary">Tambah Petugas</a>
        <br>
        <div style="overflow-x:auto;">
            <table class="table table-striped table-bordered mt-2" style=" text-align: center;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Telephone</th>
                    <th>Level</th>
                    <th></th>
                </tr>
                <?php $i = 1 ?>
                <?php foreach ($query as $p) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $p['nama_petugas_rifky']; ?></td>
                        <td><?= $p['username_rifky']; ?></td>
                        <td><?= $p['password_rifky']; ?></td>
                        <td><?= $p['telp_rifky']; ?></td>
                        <td><?= $p['level_rifky']; ?></td>
                        <td>
                            <a href="edit_petugas_rifky.php?id=<?= $p['id_petugas_rifky']; ?>" class="btn btn-success">Edit</a>
                            <a href="hapus_petugas_rifky.php?id=<?= $p['id_petugas_rifky'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Menghapus Petugas?');">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach ?>
            </table>
        </div>
        <a href="../index_home_rifky.php">Kembali</a>
    </div>
</div>
<?php
    include '../master/foot_rifky.php';
?>

<!-- <main class="container">
        <div class="bg-light rounded">
            <h1>Registasi Petugas</h1>
            <a href="tambah_petugas_rifky.php">Tambah Petugas</a>
            <div style="overflow-x:auto;">
                <table class="table table-striped mt-2" style=" text-align: center;">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Telephone</th>
                        <th>Level</th>
                        <th></th>
                    </tr>
                    <?php $i = 1 ?>
                    <?php foreach ($query as $p) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $p['nama_petugas_rifky']; ?></td>
                            <td><?= $p['username_rifky']; ?></td>
                            <td><?= $p['password_rifky']; ?></td>
                            <td><?= $p['telp_rifky']; ?></td>
                            <td><?= $p['level_rifky']; ?></td>
                            <td>
                                <a href="edit_petugas_rifky.php?id=<?= $p['id_petugas_rifky']; ?>">Edit</a>
                                <a href="hapus_petugas_rifky.php?id=<?= $p['id_petugas_rifky'] ?>" onclick="return confirm('Yakin Menghapus Petugas?');">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach ?>
                </table>
            </div>
            <a href="../index_home_rifky.php">Kembali</a>
        </div>
    </main> -->