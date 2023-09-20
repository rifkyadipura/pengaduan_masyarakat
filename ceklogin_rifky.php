<?php
    require "koneksi_rifky.php";
    session_start();
    if (isset($_POST['submit'])) {
        $username_rifky = $_POST['username_rifky'];
        $password_rifky = md5($_POST['password_rifky']);

        $sql_rifky = "SELECT * FROM petugas_rifky
                WHERE username_rifky = '$username_rifky'
                AND  password_rifky = '$password_rifky'";
        $query_rifky = mysqli_query($dbConn, $sql_rifky);
        if (!$query_rifky) {
            echo "Terjadi kesalahan Login!";
            die();
        }
        $sql2_rifky = "SELECT * FROM masyarakat_rifky
                WHERE username_rifky = '$username_rifky'
                AND  password_rifky = '$password_rifky'";
        $query2_rifky = mysqli_query($dbConn, $sql2_rifky);
        if (!$query2_rifky) {
            echo "Terjadi kesalahan Login!";
            die();
        }

        $row_rifky = mysqli_num_rows($query_rifky);
        $row2_rifky = mysqli_num_rows($query2_rifky);
        // var_dump($sql);
        // die();
        if ($row_rifky == 1) {
            $data = mysqli_fetch_assoc($query_rifky);
            $_SESSION['status'] = 'login_petugas'; 
            $_SESSION['id_petugas_rifky'] = $data['id_petugas_rifky'];
            $_SESSION['nama_petugas_rifky'] = $data['nama_petugas_rifky'];
            $_SESSION['level_rifky'] = $data['level_rifky'];
            echo "<script>
                    alert('Anda Berhasi Login');
                    document.location.href = 'home/index_home_rifky.php';
                </script>";
        }elseif ($row2_rifky == 1) {
            $data = mysqli_fetch_assoc($query2_rifky);
            $_SESSION['status'] = 'login_masyarakat'; 
            $_SESSION['nik_rifky'] = $data['nik_rifky'];
            $_SESSION['nama_rifky'] = $data['nama_rifky'];
            echo "<script>
                    alert('Anda Berhasi Login');
                    document.location.href = 'home/pengaduan/pengaduan_index_rifky.php';
                </script>";
        } else {
          echo "<script>
                    alert('username atau password yang anda masukan salah!');
                    document.location.href = 'login_rifky.php';
                </script>";
        }
    }else {
        echo "Anda belum login";
    }
?>