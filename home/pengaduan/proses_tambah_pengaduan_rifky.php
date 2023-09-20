<?php
    require "../../koneksi_rifky.php";
    session_start();
    if (isset($_POST['submit'])) {
        $tgl_pengaduan      = $_POST['tgl_pengaduan']=date("Y-m-d");
        $nik_rifky          = $_SESSION['nik_rifky'];
        $isi_laporan_rifky  = $_POST['isi_laporan_rifky'];
        $status_rifky       = "0";

        $foto_rifky         = $_FILES['foto_rifky']['name'];
        $tmp_file_rifky     = $_FILES['foto_rifky']['tmp_name'];
        // cek tipe foto
        $tipe_gambar_valid  = ['jpg', 'jepg', 'png'];
        $ekstensi_gambar    = explode('.', $foto_rifky);
        $ekstensi_gambar    = strtolower(end($ekstensi_gambar));
        if (!in_array($ekstensi_gambar, $tipe_gambar_valid)) {
            echo "<script>
                    alert('Mohon untuk upload harus foto');
                    document.location.href ='tambah_pengaduan_rifky.php';
                  </script>";
            return false;
        }
        // var_dump($_FILES);
        // die();
        $sql = "INSERT INTO 
                pengaduan_rifky
                VALUES
                ('', '$tgl_pengaduan', '$nik_rifky', '$isi_laporan_rifky', '$foto_rifky', '$status_rifky ')";
        $query = mysqli_query($dbConn, $sql);
        if (!$query) {
            die("Gagal Menambah Laporan!!!");
        }
        move_uploaded_file($tmp_file_rifky, '../foto_pengaduan/' . $foto_rifky);
        echo "<script>
                    alert('Berhasil Menambah Laporan');
                    document.location.href = 'pengaduan_index_rifky.php';
                </script>";
    }
?>