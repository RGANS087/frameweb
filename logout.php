<?php
include './login/config.php';
session_start();

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
                window.location.href = 'index.html';
            });
        </script>
    </body>
    </html>";
    exit();
}


// Pastikan ada sesi aktif
if ($_SESSION['role'] == 'admin') {
    $username = $_SESSION['username'];

    // Hapus sesi dari tabel aktif
    $stmt_delete = $conn->prepare("DELETE FROM adminac WHERE username = ?");
    $stmt_delete->bind_param("s", $username);
    $stmt_delete->execute();
    
    // Hapus variabel sesi
    session_unset();
    session_destroy();
    
    // Redirect ke halaman login
    header("Location: ../");
    exit();
} 

elseif ($_SESSION['role'] == 'user') {
    $username = $_SESSION['username'];

    // Hapus sesi dari tabel aktif
    $stmt_delete = $conn->prepare("DELETE FROM aktif WHERE username = ?");
    $stmt_delete->bind_param("s", $username);
    $stmt_delete->execute();
    
    // Hapus variabel sesi
    session_unset();
    session_destroy();
    
    // Redirect ke halaman login
    header("Location: ./login");
    exit();
}

else {
    // Jika tidak ada sesi, redirect ke halaman login
    header("Location: ./login");
    exit();
}
?>
