<?php
 session_start();
  if (isset($_SESSION['status'])) {
    header("Location: home/index_home_rifky.php");
    die();
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
  <body class="text-center">
        <main class="form-signin w-100 m-auto">
        <form action="ceklogin_rifky.php" method="post">
            <img class="mb-4" src="assets/brand/logo.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>

            <div class="form-floating">
                <input type="text" name="username_rifky" id="username_rifky" class="form-control" placeholder="name@example.com">
                <label for="username_rifky">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password_rifky" id="password_rifky" class="form-control" placeholder="Password">
                <label id="password_rifky">Password</label>
            </div>
            
            <div class="mt-2">
                <button class="w-100 btn btn-md btn-primary" type="submit" name="submit">Sign in</button>
            </div>
            <div class="mt-2">
                <a class="w-100 btn btn-md btn-primary" href="tambah_masyarakat_rifky.php">Registrasi Masyarakat</a>
            </div>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2023</p>
        </form>
        </main>
  </body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="ceklogin_rifky.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="username_rifky">Username</label>
                    <input type="text" name="username_rifky" id="username_rifky">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password_rifky">Password</label>
                    <input type="text" name="password_rifky" id="password_rifky">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
    <a href="home/registrasi_masyarakat/tambah_masyarakat_rifky.php">Registrasi Masyarakat</a>
</body>
</html> -->