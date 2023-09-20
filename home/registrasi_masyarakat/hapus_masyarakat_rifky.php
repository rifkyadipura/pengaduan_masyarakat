<?php
 require "../../koneksi_rifky.php";
 $nik_rifky = $_GET['nik'];

 $sql_hapus = "DELETE FROM masyarakat_rifky WHERE nik_rifky='$nik_rifky'";
 $hapus = mysqli_query($dbConn, $sql_hapus);
 if (!$hapus) {
     die("Gagal Menghapus Masyarakat");
 } echo "<script>
            alert('Berhasil Hapus Masyarakat');
            document.location.href = 'registrasi_index_masyarakat_rifky.php';
        </script>";
?>