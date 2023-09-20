<?php
 session_start();
 if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] == 'login') {
        echo "<script>
               alert('Berhasil Login');
               document.location.href = 'home/index_home_rifky.php';
               </script>";
 }
 }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Aps | Pengaduan</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/"> -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
  </head>
    <main class="container">
        <h1 class="h3 mb-3 fw-normal">Registrasi Masyarakat</h1>
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <form action="proses_tambah_masyarakat_rifky.php" method="post">
                        <table>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="nik_rifky" class="form-label">NIK</label>
                                    <input type="number" name="nik_rifky" id="nik_rifky" class="form-control" required>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="nama_rifky" class="form-label">Nama</label>
                                    <input type="text" name="nama_rifky" id="nama_rifky" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="username_rifky" class="form-label">Username</label>
                                    <input type="text" name="username_rifky" id="username_rifky" class="form-control" required>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="password_rifky" class="form-label">Password</label>
                                    <input type="password" name="password_rifky" id="password_rifky" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <label for="telp_rifky" class="form-label">No Telp</label>
                                    <input type="number" name="telp_rifky" id="telp_rifky" class="form-control" required>
                                </div>
                            </div>

                            <div class="mt-2">
                                <a href="login_rifky.php" class="btn btn-success">Login</a>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </table>
                    </form>
            </div>
    </main>
  </body>
</html>

<!-- <form action="proses_tambah_masyarakat_rifky.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="nik_rifky">NIK</label>
                    <input type="number" name="nik_rifky" id="nik_rifky">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama_rifky">Nama</label>
                    <input type="text" name="nama_rifky" id="nama_rifky">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="username_rifky">Username</label>
                    <input type="text" name="username_rifky" id="username_rifky">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password_rifky">Password</label>
                    <input type="password" name="password_rifky" id="password_rifky">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="telp_rifky">No Telp</label>
                    <input type="number" name="telp_rifky" id="telp_rifky">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form> -->