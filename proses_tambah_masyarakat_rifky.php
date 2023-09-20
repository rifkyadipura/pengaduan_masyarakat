<?php
    require "koneksi_rifky.php";
    session_start();

    if (isset($_POST['submit'])) {
        $nik_rifky = $_POST['nik_rifky'];
        $nama_rifky = $_POST['nama_rifky'];
        $username_rifky = $_POST['username_rifky'];
        $password_rifky = md5($_POST['password_rifky']);
        $telp_rifky = $_POST['telp_rifky'];

        $sql = "INSERT INTO masyarakat_rifky
                VALUES
                ('$nik_rifky', '$nama_rifky', '$username_rifky', '$password_rifky', '$telp_rifky')";
        // var_dump($sql);
        // die();
        $query = mysqli_query($dbConn, $sql);
        if (!$query) {
            die("Gagal Menambahkan Masyarakat");
        }
            echo "<script>
                    alert('Masyarakat Berhasil Di tambahkan, Silahkan Login');
                    document.location.href = 'login_rifky.php';
                  </script>";
    }
?>