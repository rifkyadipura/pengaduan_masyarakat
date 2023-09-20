<?php
    require "../../koneksi_rifky.php";
    session_start();
    $sql = "SELECT * FROM masyarakat_rifky";
    $query = mysqli_query($dbConn, $sql);
?>
<?php
    include '../master/page_rifky.php';
?>
<div class="card shadow-lg">
        <div class="card-header">
            <h5 class="mb-0">REGISTRASI MASYARAKAT</h5>
        </div>
        <div class="card-body">
            <a href="tambah_masyarakat_rifky.php" class="btn btn-primary">Tambah Masyarakat</a>
            <br>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-bordered mt-2" style=" text-align: center;">
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>No Telp</th>
                        <th></th>
                    </tr>
                    <?php $i = 1 ?>
                    <?php foreach ($query as $m):?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $m['nik_rifky']; ?></td>
                            <td><?= $m['nama_rifky']; ?></td>
                            <td><?= $m['username_rifky']; ?></td>
                            <td><?= $m['password_rifky']; ?></td>
                            <td><?= $m['telp_rifky']; ?></td>
                            <td>
                                <a href="edit_masyarakat_rifky.php?nik=<?= $m['nik_rifky'] ?>" class="btn btn-success">Edit</a>
                                <a href="hapus_masyarakat_rifky.php?nik=<?= $m['nik_rifky'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus Masyarakat?')">Hapus</a>
                            </td>
                        </tr>
                    <?php $i++?>
                    <?php endforeach ?>
                </table>
            </div>
            <a href="../index_home_rifky.php">Kembali</a>
        </div>
    </div>
    <?php
        include '../master/foot_rifky.php';
    ?>

<!-- <table border = "1" cellscpacing = "10" cellpadding = "">
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>No Telp</th>
            <th></th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($query as $m):?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $m['nik_rifky']; ?></td>
                <td><?= $m['nama_rifky']; ?></td>
                <td><?= $m['username_rifky']; ?></td>
                <td><?= $m['password_rifky']; ?></td>
                <td><?= $m['telp_rifky']; ?></td>
                <td>
                    <a href="edit_masyarakat_rifky.php?nik=<?= $m['nik_rifky'] ?>">Edit</a>
                    <a href="hapus_masyarakat_rifky.php?nik=<?= $m['nik_rifky'] ?>" onclick="return confirm('Yakin Hapus Masyarakat?')">Hapus</a>
                </td>
            </tr>
        <?php $i++?>
        <?php endforeach ?>
    </table>
    <a href="../index_home_rifky.php">Kembali</a> -->