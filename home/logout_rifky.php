<?php
    session_start();
    $_SESSION =[];
    session_unset();
    session_destroy();

    echo "<script>
            alert('Anda Berhasil Logout');
            document.location.href = '../login_rifky.php';
        </script>"
?>