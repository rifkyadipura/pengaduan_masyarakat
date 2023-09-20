<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">App Pengaduan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index_home_rifky.php">Home</a>
                </li>
                <?php
                if ($_SESSION['level_rifky'] != 'petugas') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../registrasi_petugas/registrasi_index_rifky.php">Registrasi Petugas</a>
                    </li>
                <?php } ?>
                <?php
                if ($_SESSION['level_rifky'] != 'petugas') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../registrasi_masyarakat/registrasi_index_masyarakat_rifky.php">Registrasi Masyarakat</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="../verifikasi/verifikasi_index_rifky.php">Verfikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../tanggapan/lihat_tanggapan_index_rifky.php">Tanggapan</a>
                </li>
                <?php
                if ($_SESSION['level_rifky'] != 'petugas') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../laporan/laporan_index_rifky.php">Laporan</a>
                    </li>
                <?php } ?>
                <?php
                if ($_SESSION['level_rifky'] != 'petugas') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../laporan_user_masyarakat/report_user_masyarakat_index_rifky.php">Report Masyarakat</a>
                    </li>
                <?php } ?>
                <!-- <li class="nav-item">
                        <a class="nav-link" href=""></a>
                    </li> -->
            </ul>
            <a href="../logout_rifky.php" class="btn btn-danger" onclick="return confirm('Yakin Untuk Logout?')">Logout</a>
        </div>
    </div>
</nav>