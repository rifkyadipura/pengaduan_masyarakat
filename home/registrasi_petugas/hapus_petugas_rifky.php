<?php
    require "../../koneksi_rifky.php";
    $id_petugas_rifky = $_GET['id'];

    $sql = "DELETE FROM petugas_rifky WHERE id_petugas_rifky='$id_petugas_rifky'";
    $hapus = mysqli_query($dbConn, $sql);
    if (!$hapus) {
        die("Gagal Menghapus Petugas!");
    }echo "<script>
                alert('Data Telah Dihapus');
                document.location.href = 'registrasi_index_rifky.php';
            </script>";
?>