<?php
include '../login/config.php';
session_start();

if ($_SESSION['role'] == 'admin') {
    $username = $_SESSION['username'];

    $stmt_delete = $conn->prepare("DELETE FROM adminac WHERE username = ?");
    $stmt_delete->bind_param("s", $username);
    $stmt_delete->execute();
    
    session_unset();
    session_destroy();
    header("Location: ../");
    exit();
} 

elseif ($_SESSION['role'] == 'user') {
    $username = $_SESSION['username'];

    $stmt_delete = $conn->prepare("DELETE FROM aktif WHERE username = ?");
    $stmt_delete->bind_param("s", $username);
    $stmt_delete->execute();
    
    session_unset();
    session_destroy();
    
    header("Location: ../error");
    exit();
}

else {
    // Jika tidak ada sesi, redirect ke halaman login
    header("Location: ../error");
    exit();
}
?>
