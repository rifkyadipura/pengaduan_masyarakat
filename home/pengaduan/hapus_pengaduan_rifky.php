<?php
    require "../../koneksi_rifky.php";
    session_start();
    $id = $_GET['id'];
    // var_dump($nik_rifky);
    // die();
    $sql = "DELETE FROM pengaduan_rifky WHERE id_pengaduan_rifky='$id'";
    $hapus = mysqli_query($dbConn, $sql);
    if (!$hapus) {
        die("Gagal Menghapus Pengaduan");
    }
    echo "<script>
                alert('Pengaduan Berhasil Dihapus');
                document.location.href = 'pengaduan_index_rifky.php';
            </script>";
?>