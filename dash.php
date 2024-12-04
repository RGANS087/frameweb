<?php
session_start();

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'admin') {
        header("Location: ./admin");
        exit();
    } elseif ($_SESSION['role'] == 'user') {
        header("Location: ./login/berhasil_login.php");
        exit();
    }
}

if (!isset($_SESSION['role'])) {
    echo "
    <html>
    <head>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    <body>
        <script>
            Swal.fire({
                title: 'Oops!',
                text: 'Anda belum login',
                icon: 'warning',
                confirmButtonText: 'OK'
            }).then(function() {
                window.location.href = './login';
            });
        </script>
    </body>
    </html>";
    exit();
}
?>