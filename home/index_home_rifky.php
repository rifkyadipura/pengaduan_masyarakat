<?php
    session_start();
    if ( $_SESSION['status'] != 'login_petugas') {
        echo "<script>
                alert('Anda Harus Login Dahulu/Mohon logout Dahulu');
                document.location.href = '../login_rifky.php';
              </script>";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apps | Pengaduan</title>
    <link rel="stylesheet" href="../assets/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="page-content">
        <div class="content-wrapper">
			<div class="content-inner">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">App Pengaduan</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index_home_rifky.php">Home</a>
                            </li>
                            <?php
                                if($_SESSION['level_rifky'] != 'petugas'){ ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="registrasi_petugas/registrasi_index_rifky.php">Registrasi Petugas</a>
                                    </li>
                            <?php } ?>
                            <?php
                                if($_SESSION['level_rifky'] != 'petugas'){ ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="registrasi_masyarakat/registrasi_index_masyarakat_rifky.php">Registrasi Masyarakat</a>
                                    </li>
                            <?php } ?>
                            <li class="nav-item">
                                <a class="nav-link" href="verifikasi/verifikasi_index_rifky.php">Verfikasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tanggapan/lihat_tanggapan_index_rifky.php">Tanggapan</a>
                            </li>
                            <?php
                                if ($_SESSION['level_rifky'] != 'petugas') { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="laporan/laporan_index_rifky.php">Laporan</a>
                                    </li>
                            <?php } ?>
                            <?php
                            if ($_SESSION['level_rifky'] != 'petugas') { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="laporan_user_masyarakat/report_user_masyarakat_index_rifky.php">Report Masyarakat</a>
                                </li>
                            <?php } ?>
                        </ul>
                        <a href="logout_rifky.php" class="btn btn-danger" onclick="return confirm('Yakin Untuk Logout?')">Logout</a>
                    </div>
                </div>
            </nav>
        <div class="page-header">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                <h4 class="page-title mb-0"></h4>
                    <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="content pt-0">
            <main class="container">
                <div class="bg-light p-5 rounded">
                    <h1>Anda telah login</h1>
                    <p class="lead">Selamat Datang di App Pengaduan Mari Bekerja Untuk Masyarakat</p>
                </div>
            </main>
        </div>
                <!-- Footer -->
                    <span style="position: absolute; bottom: 0;">&copy; 2023 by <a href="">Rifky Najra Adipura</a></span>
                <!-- /Footer -->
            </div>
        </div>
    </div>

</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Anda telah login</h1>
    <nav>
        <table>
            <tr>
                <td>
                    <a href="registrasi_petugas/registrasi_index_rifky.php">Registrasi Petugas</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="registrasi_masyarakat/registrasi_index_masyarakat_rifky.php">Registrasi Masyarakat</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="pengaduan/pengaduan_index_rifky.php">Pengaduan</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="verifikasi/verifikasi_index_rifky.php">Verfikasi</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="tanggapan/tanggapan_index_rifky.php">Tanggapan</a>
                </td>
            </tr>
        </table>
    </nav>
    <a href="logout_rifky.php">Logout</a>
</body>
</html> -->