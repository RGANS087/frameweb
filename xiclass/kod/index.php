<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../../login/index.php");
    exit(); // Terminate script execution after the redirect
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Kelas 11 SMK</title>
    <link rel="stylesheet" href="cpp.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
</head>
<body>
    <table>
        <tr>
            <td class="isi">
                <h1 align="center">BELAJAR MEMBUAT APLIKASI BERBASIS ANDROID MENGGUNAKAN KODULAR</h1>
                <p align="justify">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_lkZmV7MqPQ?si=MryhhLUUb-nbNQPw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <br><br> <strong>Tonton video di atas dan praktekkan</strong>
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
